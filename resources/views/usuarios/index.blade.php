@extends('layouts.app')

@section('title', 'Listar Usuarios | GamifyHub')

@section('content')
<div class="min-h-screen lg:flex">
    <aside class="hidden w-64 shrink-0 flex-col border-r border-brand-line bg-white px-5 py-6 lg:flex">
        <a href="{{ route('usuarios.index') }}" class="mb-10 flex items-center gap-3 px-2" aria-label="GamifyHub, usuarios">
            <span class="grid size-10 place-items-center rounded-xl bg-brand-primary text-white">
                <svg viewBox="0 0 24 24" fill="none" class="size-6" aria-hidden="true">
                    <path d="M5 7.5 12 4l7 3.5v9L12 20l-7-3.5v-9Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                    <path d="m8.5 12 2.2 2.2 4.8-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <span>
                <span class="block text-base font-extrabold">GamifyHub</span>
                <span class="block text-xs font-medium text-brand-muted">Enterprise</span>
            </span>
        </a>

        <p class="mb-3 px-3 text-[11px] font-bold uppercase text-slate-400">Plataforma</p>
        <nav aria-label="Navegación principal" class="space-y-1">
            <a href="{{ route('usuarios.index') }}" aria-current="page" class="flex items-center gap-3 rounded-xl bg-brand-primary/10 px-3 py-3 text-sm font-bold text-brand-primary">
                <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true">
                    <path d="M16 20v-1.5a4.5 4.5 0 0 0-4.5-4.5h-4A4.5 4.5 0 0 0 3 18.5V20m16 0v-1.5a4.5 4.5 0 0 0-3-4.24M13.5 4.26a4.5 4.5 0 0 1 0 8.48M9.5 10a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
                Usuarios
            </a>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted">
                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M3 16.5h14M4.5 16.5V8l5.5-4 5.5 4v8.5M7.5 10h.01M12.5 10h.01M7.5 13h.01M12.5 13h.01" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" /></svg>
                Empresas
            </span>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted">
                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M3 5.5h14v9H3v-9Zm0 2.5h14M6 11h3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" /></svg>
                Facturación y cuotas
            </span>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted">
                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 2.5 12 7l4.8.5-3.6 3.2 1 4.8-4.2-2.4-4.2 2.4 1-4.8-3.6-3.2L8 7l2-4.5Z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round" /></svg>
                Campañas
            </span>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted">
                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 3v14m-5-7h10M4 5.5h12v9H4v-9Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" /></svg>
                Configuración
            </span>
        </nav>

        <div class="mt-auto rounded-2xl border border-brand-line bg-brand-canvas p-4">
            <div class="mb-3 flex items-center justify-between text-xs font-semibold text-brand-muted">
                <span>Salud del sistema</span>
                <span class="text-brand-green">99.98%</span>
            </div>
            <div class="h-1.5 overflow-hidden rounded-full bg-white">
                <div class="h-full w-[99%] rounded-full bg-brand-green"></div>
            </div>
            <p class="mt-2 text-xs text-brand-muted">Todos los servicios operativos</p>
        </div>
    </aside>

    <div class="min-w-0 flex-1">
        <header class="flex min-h-[76px] items-center justify-between gap-4 border-b border-brand-line bg-white px-5 py-3 sm:px-8">
            <div class="ml-auto flex items-center gap-3">
                <span class="hidden text-right sm:block">
                    <span class="block text-sm font-bold">Administrador</span>
                    <span class="block text-xs text-brand-muted">Superadmin</span>
                </span>
                <img src="{{ asset('images/admin-avatar.svg') }}" alt="Avatar del administrador" class="size-10 rounded-full border border-brand-line bg-brand-canvas object-cover">
            </div>
        </header>

        <main class="mx-auto max-w-[1600px] px-4 py-7 sm:px-8 sm:py-9">
            <div class="mb-6 flex flex-col justify-between gap-5 xl:flex-row xl:items-end">
                <div class="max-w-2xl">
                    <div class="mb-3 inline-flex items-center gap-2 rounded-full bg-brand-green/10 px-3 py-1.5 text-xs font-bold text-brand-green">
                        <span class="size-1.5 rounded-full bg-brand-green"></span>
                        GESTIÓN DE ACCESOS
                    </div>
                    <h1 class="text-2xl font-extrabold text-brand-ink sm:text-3xl">Listar Usuarios</h1>
                    <p class="mt-2 text-sm leading-6 text-brand-muted">Administra perfiles, permisos y actividad de las cuentas de tu organización.</p>
                </div>
                <a href="{{ route('usuarios.create') }}" class="inline-flex min-h-11 items-center justify-center gap-2 self-start rounded-xl bg-brand-primary px-4 py-2.5 text-sm font-bold text-white shadow-sm transition hover:bg-brand-primary-dark focus:outline-none focus:ring-4 focus:ring-brand-primary/20 xl:self-auto">
                    <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="M10 4v12M4 10h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" /></svg>
                    Añadir usuario
                </a>
            </div>

            <section aria-label="Resumen de usuarios" class="mb-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="rounded-2xl border border-brand-line bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div><p class="text-sm font-medium text-brand-muted">Total usuarios</p><p class="mt-3 text-3xl font-extrabold text-brand-ink">{{ $stats['total'] }}</p></div>
                        <span class="grid size-10 place-items-center rounded-xl bg-brand-primary/10 text-brand-primary"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M13.5 16.5v-1.25a3.75 3.75 0 0 0-3.75-3.75h-3.5A3.75 3.75 0 0 0 2.5 15.25v1.25m13 0v-1.25a3.75 3.75 0 0 0-2.5-3.54M11 4.38a3.75 3.75 0 0 1 0 7.24M8 7a3 3 0 1 0-6 0 3 3 0 0 0 6 0Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg></span>
                    </div>
                    <p class="mt-3 text-xs text-brand-muted"><span class="font-bold text-brand-primary">+{{ $stats['newThisMonth'] }}</span> registrados este mes</p>
                </article>
                <article class="rounded-2xl border border-brand-line bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div><p class="text-sm font-medium text-brand-muted">Usuarios activos</p><p class="mt-3 text-3xl font-extrabold text-brand-ink">{{ $stats['active'] }}</p></div>
                        <span class="grid size-10 place-items-center rounded-xl bg-emerald-50 text-emerald-700"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="m4.5 10 3.5 3.5 7.5-7.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg></span>
                    </div>
                    <p class="mt-3 text-xs text-brand-muted">Cuentas con acceso habilitado</p>
                </article>
                <article class="rounded-2xl border border-brand-line bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div><p class="text-sm font-medium text-brand-muted">Invitaciones pendientes</p><p class="mt-3 text-3xl font-extrabold text-brand-ink">{{ $stats['pending'] }}</p></div>
                        <span class="grid size-10 place-items-center rounded-xl bg-amber-50 text-amber-700"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5" /><path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg></span>
                    </div>
                    <p class="mt-3 text-xs text-brand-muted">Esperando activación</p>
                </article>
                <article class="rounded-2xl border border-brand-line bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div><p class="text-sm font-medium text-brand-muted">Administradores</p><p class="mt-3 text-3xl font-extrabold text-brand-ink">{{ $stats['admins'] }}</p></div>
                        <span class="grid size-10 place-items-center rounded-xl bg-orange-50 text-orange-700"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 2.5 12 7l4.8.5-3.6 3.2 1 4.8-4.2-2.4-4.2 2.4 1-4.8-3.6-3.2L8 7l2-4.5Z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round" /></svg></span>
                    </div>
                    <p class="mt-3 text-xs text-brand-muted">Con permisos de administración</p>
                </article>
            </section>

            <section class="overflow-hidden rounded-2xl border border-brand-line bg-white shadow-sm">
                <div class="flex flex-col gap-4 border-b border-brand-line px-5 py-5 sm:px-6">
                    <div class="flex flex-col justify-between gap-3 sm:flex-row sm:items-center">
                        <div>
                            <h2 class="text-base font-bold text-brand-ink">Directorio de usuarios</h2>
                            <p class="mt-1 text-xs text-brand-muted">Perfiles registrados en la organización</p>
                        </div>
                        <span class="inline-flex items-center gap-2 self-start rounded-full bg-brand-green/10 px-3 py-1.5 text-xs font-semibold text-brand-green sm:self-auto"><span class="size-1.5 rounded-full bg-brand-green"></span>Sincronizado</span>
                    </div>

                    <form id="user-filters" action="{{ route('usuarios.index') }}" method="GET" class="flex flex-col gap-3 lg:flex-row lg:items-center">
                        <div class="w-full min-w-0 flex-1 lg:max-w-sm">
                            <x-search-input name="q" label="Buscar usuarios" :value="$filters['search']" />
                        </div>
                        <label class="sr-only" for="role-filter">Filtrar por rol</label>
                        <select id="role-filter" name="role" class="min-h-10 rounded-xl border border-brand-line bg-white px-3.5 text-sm text-brand-ink shadow-sm outline-none focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10">
                            <option value="">Todos los roles</option>
                            <option value="admin" @selected($filters['role'] === 'admin')>Administrador</option>
                            <option value="manager" @selected($filters['role'] === 'manager')>Gestor de empresa</option>
                            <option value="user" @selected($filters['role'] === 'user')>Usuario</option>
                        </select>
                        <label class="sr-only" for="status-filter">Filtrar por estado</label>
                        <select id="status-filter" name="status" class="min-h-10 rounded-xl border border-brand-line bg-white px-3.5 text-sm text-brand-ink shadow-sm outline-none focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10">
                            <option value="">Todos los estados</option>
                            <option value="active" @selected($filters['status'] === 'active')>Activo</option>
                            <option value="pending" @selected($filters['status'] === 'pending')>Pendiente</option>
                            <option value="inactive" @selected($filters['status'] === 'inactive')>Inactivo</option>
                        </select>
                        <button type="submit" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl border border-brand-line bg-white px-3.5 text-sm font-semibold text-brand-ink shadow-sm transition hover:border-brand-primary/40 hover:text-brand-primary focus:outline-none focus:ring-4 focus:ring-brand-primary/10">
                            <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="M3 5h14M5.5 10h9M8 15h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg>
                            Filtrar
                        </button>
                        @if ($filters['search'] !== '' || $filters['role'] !== '' || $filters['status'] !== '')
                            <a href="{{ route('usuarios.index') }}" class="inline-flex min-h-10 items-center justify-center px-2 text-sm font-semibold text-brand-muted hover:text-brand-primary">Limpiar filtros</a>
                        @endif
                    </form>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[980px] border-collapse text-left">
                        <thead class="bg-slate-50/80">
                            <tr class="border-b border-brand-line text-[11px] font-bold uppercase text-slate-500">
                                <th scope="col" class="px-6 py-3.5">Nombre</th>
                                <th scope="col" class="px-5 py-3.5">Correo</th>
                                <th scope="col" class="px-5 py-3.5">Rol</th>
                                <th scope="col" class="px-5 py-3.5">Estado</th>
                                <th scope="col" class="px-5 py-3.5">Fecha de registro</th>
                                <th scope="col" class="px-5 py-3.5 text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-brand-line">
                            @if ($users->isEmpty())
                                <tr><td colspan="6" class="px-6 py-14 text-center"><p class="text-sm font-bold text-brand-ink">No hay usuarios que coincidan</p><p class="mt-1 text-xs text-brand-muted">Prueba con otros términos o limpia los filtros.</p></td></tr>
                            @endif
                            @foreach ($users as $user)
                                @php
                                    $avatarClass = match ($user['id'] % 5) {
                                        0 => 'bg-amber-100 text-amber-800',
                                        1 => 'bg-indigo-100 text-brand-primary',
                                        2 => 'bg-emerald-100 text-emerald-800',
                                        3 => 'bg-sky-100 text-sky-800',
                                        default => 'bg-rose-100 text-rose-800',
                                    };
                                    $roleLabel = match ($user['role']) {
                                        'admin' => 'Administrador',
                                        'manager' => 'Gestor de empresa',
                                        default => 'Usuario',
                                    };
                                @endphp
                                <tr class="transition hover:bg-brand-canvas/70">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <span class="grid size-10 shrink-0 place-items-center rounded-xl text-xs font-extrabold {{ $avatarClass }}">{{ $user['initials'] }}</span>
                                            <span class="min-w-0"><span class="block truncate text-sm font-bold text-brand-ink">{{ $user['name'] }}</span><span class="mt-1 block truncate text-xs text-brand-muted">{{ $user['department'] }}</span></span>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 text-sm text-brand-muted">{{ $user['email'] }}</td>
                                    <td class="px-5 py-4"><span class="inline-flex rounded-lg bg-brand-canvas px-2.5 py-1.5 text-xs font-semibold text-brand-ink">{{ $roleLabel }}</span></td>
                                    <td class="px-5 py-4"><x-status-badge :status="$user['status']" /></td>
                                    <td class="px-5 py-4 text-sm text-brand-muted">{{ $user['registered_at'] }}</td>
                                    <td class="px-5 py-4 text-right"><x-secondary-button type="button" :aria-label="'Editar perfil de ' . $user['name']"><svg viewBox="0 0 20 20" fill="none" class="size-3.5" aria-hidden="true"><path d="m11.5 4.5 4 4M3.5 16.5l3.3-.7 9.4-9.4a1.4 1.4 0 0 0-2-2l-9.4 9.4-.7 2.7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>Editar perfil</x-secondary-button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex flex-col gap-3 border-t border-brand-line px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                    <p class="text-xs text-brand-muted">Mostrando <span class="font-bold text-brand-ink">{{ $users->count() }}</span> de <span class="font-bold text-brand-ink">{{ $stats['total'] }}</span> usuarios</p>
                    <div class="flex items-center gap-1 self-start sm:self-auto" aria-label="Paginación">
                        <button type="button" disabled aria-label="Página anterior" class="grid size-8 place-items-center rounded-lg border border-brand-line text-slate-300"><svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="m12 4-6 6 6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></button>
                        <span aria-current="page" class="grid size-8 place-items-center rounded-lg bg-brand-primary text-xs font-bold text-white">1</span>
                        <button type="button" disabled aria-label="Página siguiente" class="grid size-8 place-items-center rounded-lg border border-brand-line text-slate-300"><svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="m8 4 6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></button>
                    </div>
                </div>
            </section>

            <section aria-label="Actividad y cuentas pendientes" class="mt-6 grid gap-5 xl:grid-cols-[1.35fr_1fr]">
                <article class="flex flex-col justify-between gap-5 rounded-2xl border border-amber-200 bg-amber-50/70 p-5 sm:flex-row sm:items-center sm:p-6">
                    <div class="flex items-start gap-3">
                        <span class="grid size-10 shrink-0 place-items-center rounded-xl bg-white text-amber-700 shadow-sm"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 2.5 18 16H2l8-13.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" /><path d="M10 7v4m0 2.5h.01" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg></span>
                        <div><h2 class="text-sm font-bold text-brand-ink">{{ $stats['pending'] }} invitación pendiente</h2><p class="mt-1 max-w-lg text-xs leading-5 text-brand-muted">Hay una cuenta esperando activación. Puedes reenviar la invitación desde su perfil.</p></div>
                    </div>
                    <a href="{{ route('usuarios.create') }}" class="inline-flex min-h-9 shrink-0 items-center justify-center rounded-lg bg-amber-700 px-3.5 py-2 text-xs font-bold text-white transition hover:bg-amber-800">Invitar usuario</a>
                </article>

                <article class="rounded-2xl border border-brand-line bg-white p-5 shadow-sm sm:p-6">
                    <div class="mb-4 flex items-center justify-between">
                        <div><h2 class="text-sm font-bold text-brand-ink">Actividad reciente</h2><p class="mt-1 text-xs text-brand-muted">Últimos registros</p></div>
                        <span class="rounded-full bg-brand-green/10 px-2.5 py-1 text-[11px] font-bold text-brand-green">En vivo</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 border-t border-brand-line pt-3 text-xs">
                        <span class="truncate font-semibold text-brand-ink">Ana Gómez se unió al espacio</span><span class="shrink-0 text-brand-muted">hace 1 día</span>
                    </div>
                    <div class="mt-3 flex items-center justify-between gap-3 text-xs">
                        <span class="truncate font-semibold text-brand-ink">Mateo Ruiz recibió acceso</span><span class="shrink-0 text-brand-muted">hace 3 días</span>
                    </div>
                </article>
            </section>
        </main>
    </div>
</div>
@endsection