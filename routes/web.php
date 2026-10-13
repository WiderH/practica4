<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HolaMundoController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para la vista Hola Mundo con animaciones y Glassmorphism
Route::get('/hola', [HolaMundoController::class, 'index']);

Route::get('/usuarios', function (Request $request) {
    $allUsers = collect([
        ['id' => 1, 'initials' => 'AG', 'name' => 'Ana Gómez', 'email' => 'ana.gomez@gamifyhub.com', 'role' => 'admin', 'status' => 'active', 'registered_at' => '12 oct 2026', 'department' => 'Administradora del espacio', 'new' => true],
        ['id' => 2, 'initials' => 'MR', 'name' => 'Mateo Ruiz', 'email' => 'mateo.ruiz@gamifyhub.com', 'role' => 'manager', 'status' => 'active', 'registered_at' => '10 oct 2026', 'department' => 'Marketing', 'new' => true],
        ['id' => 3, 'initials' => 'SM', 'name' => 'Sofía Mendoza', 'email' => 'sofia.mendoza@gamifyhub.com', 'role' => 'user', 'status' => 'pending', 'registered_at' => '6 oct 2026', 'department' => 'Invitación pendiente', 'new' => true],
        ['id' => 4, 'initials' => 'DC', 'name' => 'Daniel Costa', 'email' => 'daniel.costa@gamifyhub.com', 'role' => 'manager', 'status' => 'active', 'registered_at' => '28 sep 2026', 'department' => 'Operaciones', 'new' => false],
        ['id' => 5, 'initials' => 'VC', 'name' => 'Valentina Cruz', 'email' => 'valentina.cruz@gamifyhub.com', 'role' => 'user', 'status' => 'inactive', 'registered_at' => '17 sep 2026', 'department' => 'Ventas', 'new' => false],
        ['id' => 6, 'initials' => 'BS', 'name' => 'Bruno Silva', 'email' => 'bruno.silva@gamifyhub.com', 'role' => 'user', 'status' => 'active', 'registered_at' => '30 ago 2026', 'department' => 'Diseño', 'new' => false],
    ]);

    $search = trim((string) $request->query('q', ''));
    $role = (string) $request->query('role', '');
    $status = (string) $request->query('status', '');

    $users = $allUsers->filter(function (array $user) use ($search, $role, $status) {
        $matchesSearch = $search === '' || str_contains(strtolower($user['name'] . ' ' . $user['email']), strtolower($search));
        $matchesRole = $role === '' || $user['role'] === $role;
        $matchesStatus = $status === '' || $user['status'] === $status;

        return $matchesSearch && $matchesRole && $matchesStatus;
    })->values();

    return view('usuarios.index', [
        'users' => $users,
        'filters' => compact('search', 'role', 'status'),
        'stats' => [
            'total' => $allUsers->count(),
            'active' => $allUsers->where('status', 'active')->count(),
            'pending' => $allUsers->where('status', 'pending')->count(),
            'admins' => $allUsers->where('role', 'admin')->count(),
            'newThisMonth' => $allUsers->where('new', true)->count(),
        ],
    ]);
})->name('usuarios.index');

Route::get('/usuarios/registro', function () {
    return view('usuarios.registro');
})->name('usuarios.create');

Route::post('/usuarios/registro', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'role' => ['required', 'in:admin,manager,user'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    return to_route('usuarios.create')->with('status', 'Validación correcta. Esta ruta de prueba no guarda el usuario.');
})->name('usuarios.store');

Route::get('/perfil/editar', function () {
    return view('usuarios.editar-perfil', [
        'profile' => [
            'name' => 'Ana Gómez',
            'email' => 'ana.gomez@gamifyhub.com',
            'phone' => '+34 600 123 456',
            'bio' => 'Administradora del espacio de trabajo. Me interesa crear experiencias digitales útiles y cercanas.',
            'role' => 'Administradora',
            'memberSince' => 'Octubre de 2024',
        ],
    ]);
})->name('perfil.edit');

Route::put('/perfil/editar', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'phone' => ['nullable', 'string', 'max:30'],
        'bio' => ['nullable', 'string', 'max:500'],
        'avatar' => ['nullable', 'image', 'max:2048'],
        'current_password' => ['nullable', 'required_with:password', 'string'],
        'password' => ['nullable', 'required_with:current_password', 'string', 'min:8', 'confirmed'],
    ]);

    return to_route('perfil.edit')->with('status', 'Datos validados. Esta ruta de prueba no guarda los cambios.');
})->name('perfil.update');
