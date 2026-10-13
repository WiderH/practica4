@extends('layouts.app')

@section('title', 'Registro de Usuario | GamifyHub')

@section('content')
<div class="min-h-screen lg:flex">
    <aside class="hidden w-64 shrink-0 flex-col border-r border-brand-line bg-white px-5 py-6 lg:flex">
        <a href="{{ route('usuarios.create') }}" class="mb-10 flex items-center gap-3 px-2" aria-label="GamifyHub, inicio">
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

        <p class="mb-3 px-3 text-[11px] font-bold uppercase text-slate-400">Administración</p>
        <nav aria-label="Navegación principal" class="space-y-1">
            <a href="{{ route('usuarios.create') }}" aria-current="page" class="flex items-center gap-3 rounded-xl bg-brand-primary/10 px-3 py-3 text-sm font-bold text-brand-primary">
                <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true">
                    <path d="M16 20v-1.5a4.5 4.5 0 0 0-4.5-4.5h-4A4.5 4.5 0 0 0 3 18.5V20m16 0v-1.5a4.5 4.5 0 0 0-3-4.24M13.5 4.26a4.5 4.5 0 0 1 0 8.48M9.5 10a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
                Usuarios
            </a>
        </nav>

        <div class="mt-auto rounded-2xl border border-brand-line bg-brand-canvas p-4">
            <div class="mb-3 flex items-center justify-between text-xs font-semibold text-brand-muted">
                <span>Espacio de trabajo</span>
                <span class="text-brand-green">Activo</span>
            </div>
            <div class="h-1.5 overflow-hidden rounded-full bg-white">
                <div class="h-full w-3/4 rounded-full bg-brand-primary"></div>
            </div>
            <p class="mt-2 text-xs text-brand-muted">Configuración de empresa</p>
        </div>
    </aside>

    <div class="min-w-0 flex-1">
        <header class="flex h-[76px] items-center justify-between border-b border-brand-line bg-white px-5 sm:px-8">
            <div class="flex min-w-0 items-center gap-3 text-sm">
                <span class="truncate font-medium text-brand-muted">Gestión de usuarios</span>
                <svg viewBox="0 0 20 20" fill="none" class="size-4 shrink-0 text-slate-400" aria-hidden="true">
                    <path d="m7.5 4 6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="truncate font-bold text-brand-ink">Registro</span>
            </div>
            <div class="ml-4 flex items-center gap-3">
                <span class="hidden text-right sm:block">
                    <span class="block text-sm font-bold">Administrador</span>
                    <span class="block text-xs text-brand-muted">Superadmin</span>
                </span>
                <img src="{{ asset('images/admin-avatar.svg') }}" alt="Avatar del administrador" class="size-10 rounded-full border border-brand-line bg-brand-canvas object-cover">
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-4 py-8 sm:px-8 sm:py-10">
            <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                <div>
                    <div class="mb-3 inline-flex items-center gap-2 rounded-full bg-brand-green/10 px-3 py-1.5 text-xs font-bold text-brand-green">
                        <span class="size-1.5 rounded-full bg-brand-green"></span>
                        ADMINISTRACIÓN DE CUENTAS
                    </div>
                    <h1 class="text-2xl font-extrabold text-brand-ink sm:text-3xl">Registro de Usuario</h1>
                    <p class="mt-2 max-w-2xl text-sm leading-6 text-brand-muted">Crea una cuenta y asigna el nivel de acceso adecuado a tu espacio de trabajo.</p>
                </div>
                <a href="{{ route('usuarios.create') }}" class="inline-flex min-h-10 items-center justify-center gap-2 self-start rounded-xl border border-brand-line bg-white px-4 py-2.5 text-sm font-bold text-brand-ink shadow-sm transition hover:border-brand-primary/40 hover:text-brand-primary sm:self-auto">
                    <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true">
                        <path d="M10 4v12M4 10h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                    Nuevo registro
                </a>
            </div>

            @if (session('status'))
                <div role="status" class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-800">
                    {{ session('status') }}
                </div>
            @endif

            <div class="grid items-start gap-6 xl:grid-cols-[minmax(0,1.55fr)_minmax(18rem,0.8fr)]">
                <form action="{{ route('usuarios.store') }}" method="POST" class="overflow-hidden rounded-2xl border border-brand-line bg-white shadow-sm">
                    @csrf
                    <div class="border-b border-brand-line px-5 py-5 sm:px-7">
                        <div class="flex items-start gap-3">
                            <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-brand-primary/10 text-brand-primary">
                                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true">
                                    <path d="M13.5 16.5v-1.25a3.75 3.75 0 0 0-3.75-3.75h-3.5A3.75 3.75 0 0 0 2.5 15.25v1.25m13 0v-1.25a3.75 3.75 0 0 0-2.5-3.54M11 4.38a3.75 3.75 0 0 1 0 7.24M8 7a3 3 0 1 0-6 0 3 3 0 0 0 6 0Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </span>
                            <div>
                                <h2 class="text-base font-bold text-brand-ink">Datos de la cuenta</h2>
                                <p class="mt-1 text-sm text-brand-muted">Completa la información del nuevo usuario.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-x-5 gap-y-5 px-5 py-6 sm:grid-cols-2 sm:px-7">
                        <x-form.input name="name" label="Nombre completo" placeholder="Ej. Alex Rivera" autocomplete="name" required />
                        <x-form.input name="email" label="Correo electrónico" type="email" placeholder="nombre@empresa.com" autocomplete="email" required />
                        <div class="sm:col-span-2">
                            <x-form.select
                                name="role"
                                label="Rol de usuario"
                                :options="['admin' => 'Administrador', 'manager' => 'Gestor de empresa', 'user' => 'Usuario']"
                                placeholder="Selecciona un rol"
                                required
                            />
                        </div>
                        <x-form.input name="password" label="Contraseña" type="password" placeholder="Mínimo 8 caracteres" autocomplete="new-password" required />
                        <x-form.input name="password_confirmation" label="Confirmar contraseña" type="password" placeholder="Repite la contraseña" autocomplete="new-password" required />
                        <p class="-mt-2 text-xs leading-5 text-brand-muted sm:col-span-2">Usa al menos 8 caracteres. La contraseña debe coincidir con su confirmación.</p>
                    </div>

                    <div class="flex flex-col-reverse gap-3 border-t border-brand-line bg-slate-50/70 px-5 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-7">
                        <p class="text-xs text-brand-muted"><span class="font-bold text-brand-primary">*</span> Campos obligatorios</p>
                        <x-primary-button type="submit">
                            Crear usuario
                            <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true">
                                <path d="M4 10h12m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </x-primary-button>
                    </div>
                </form>

                <aside class="space-y-5">
                    <section class="rounded-2xl border border-brand-line bg-white p-5 shadow-sm sm:p-6">
                        <div class="mb-5 flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-bold text-brand-ink">Acceso y permisos</h2>
                                <p class="mt-1 text-xs text-brand-muted">Resumen de la cuenta</p>
                            </div>
                            <span class="grid size-9 place-items-center rounded-xl bg-brand-green/10 text-brand-green">
                                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true">
                                    <path d="M5.5 8V5.75a4.5 4.5 0 0 1 9 0V8m-10 0h11a1.5 1.5 0 0 1 1.5 1.5v6A1.5 1.5 0 0 1 15.5 17h-11A1.5 1.5 0 0 1 3 15.5v-6A1.5 1.5 0 0 1 4.5 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M10 11v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </span>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 rounded-xl bg-brand-canvas p-3.5">
                                <span class="grid size-8 shrink-0 place-items-center rounded-lg bg-white text-brand-primary shadow-sm">
                                    <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5.5 6v-1a5.5 5.5 0 0 0-11 0v1h11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg>
                                </span>
                                <span><span class="block text-xs font-bold text-brand-ink">Identidad verificada</span><span class="mt-0.5 block text-xs text-brand-muted">Correo para iniciar sesión</span></span>
                            </div>
                            <div class="flex items-center gap-3 rounded-xl bg-brand-canvas p-3.5">
                                <span class="grid size-8 shrink-0 place-items-center rounded-lg bg-white text-brand-green shadow-sm">
                                    <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="m4.5 10 3.5 3.5 7.5-7.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                </span>
                                <span><span class="block text-xs font-bold text-brand-ink">Permisos por rol</span><span class="mt-0.5 block text-xs text-brand-muted">Acceso según responsabilidad</span></span>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-brand-primary/15 bg-brand-primary/5 p-5 sm:p-6">
                        <div class="flex gap-3">
                            <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-white text-brand-primary shadow-sm">
                                <svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true">
                                    <path d="M10 2.5 16 5v4.5c0 3.7-2.5 6.4-6 8-3.5-1.6-6-4.3-6-8V5l6-2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                    <path d="m7.5 9.75 1.7 1.7 3.4-3.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <div>
                                <h2 class="text-sm font-bold text-brand-ink">Cuenta protegida</h2>
                                <p class="mt-1.5 text-xs leading-5 text-brand-muted">Los datos se validan antes de crear la cuenta. La contraseña no se conserva si ocurre un error.</p>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </main>
    </div>
</div>
@endsection