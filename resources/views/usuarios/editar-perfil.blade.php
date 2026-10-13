@extends('layouts.app')

@section('title', 'Editar Perfil de Usuario | GamifyHub')

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
            <span><span class="block text-base font-extrabold">GamifyHub</span><span class="block text-xs font-medium text-brand-muted">Enterprise</span></span>
        </a>

        <p class="mb-3 px-3 text-[11px] font-bold uppercase text-slate-400">Plataforma</p>
        <nav aria-label="Navegación principal" class="space-y-1">
            <a href="{{ route('usuarios.index') }}" class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted transition hover:bg-brand-canvas hover:text-brand-primary">
                <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true"><path d="M16 20v-1.5a4.5 4.5 0 0 0-4.5-4.5h-4A4.5 4.5 0 0 0 3 18.5V20m16 0v-1.5a4.5 4.5 0 0 0-3-4.24M13.5 4.26a4.5 4.5 0 0 1 0 8.48M9.5 10a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" /></svg>
                Usuarios
            </a>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M3 16.5h14M4.5 16.5V8l5.5-4 5.5 4v8.5M7.5 10h.01M12.5 10h.01M7.5 13h.01M12.5 13h.01" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" /></svg>Empresas</span>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 2.5 12 7l4.8.5-3.6 3.2 1 4.8-4.2-2.4-4.2 2.4 1-4.8-3.6-3.2L8 7l2-4.5Z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round" /></svg>Campañas</span>
            <span class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-brand-muted"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 3v14m-5-7h10M4 5.5h12v9H4v-9Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" /></svg>Configuración</span>
        </nav>

        <div class="mt-auto rounded-2xl border border-brand-line bg-brand-canvas p-4">
            <div class="mb-3 flex items-center justify-between text-xs font-semibold text-brand-muted"><span>Salud del sistema</span><span class="text-brand-green">99.98%</span></div>
            <div class="h-1.5 overflow-hidden rounded-full bg-white"><div class="h-full w-[99%] rounded-full bg-brand-green"></div></div>
            <p class="mt-2 text-xs text-brand-muted">Todos los servicios operativos</p>
        </div>
    </aside>

    <div class="min-w-0 flex-1">
        <header class="flex min-h-[76px] items-center justify-between gap-4 border-b border-brand-line bg-white px-5 py-3 sm:px-8">
            <div class="flex min-w-0 items-center gap-3 text-sm">
                <a href="{{ route('usuarios.index') }}" class="truncate font-medium text-brand-muted hover:text-brand-primary">Usuarios</a>
                <svg viewBox="0 0 20 20" fill="none" class="size-4 shrink-0 text-slate-400" aria-hidden="true"><path d="m7.5 4 6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
                <span class="truncate font-bold text-brand-ink">Editar perfil</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="hidden text-right sm:block"><span class="block text-sm font-bold">{{ $profile['name'] }}</span><span class="block text-xs text-brand-muted">{{ $profile['role'] }}</span></span>
                <img src="{{ asset('images/admin-avatar.svg') }}" alt="Avatar de {{ $profile['name'] }}" class="size-10 rounded-full border border-brand-line bg-brand-canvas object-cover">
            </div>
        </header>

        <main class="mx-auto max-w-[1500px] px-4 py-7 sm:px-8 sm:py-9">
            <div class="mb-6 flex flex-col justify-between gap-5 xl:flex-row xl:items-end">
                <div>
                    <div class="mb-3 inline-flex items-center gap-2 rounded-full bg-brand-green/10 px-3 py-1.5 text-xs font-bold text-brand-green"><span class="size-1.5 rounded-full bg-brand-green"></span>CONFIGURACIÓN DE CUENTA</div>
                    <h1 class="text-2xl font-extrabold text-brand-ink sm:text-3xl">Editar Perfil de Usuario</h1>
                    <p class="mt-2 max-w-2xl text-sm leading-6 text-brand-muted">Actualiza la información personal y las opciones de acceso de tu cuenta.</p>
                </div>
                <a href="{{ route('usuarios.index') }}" class="inline-flex min-h-10 items-center justify-center gap-2 self-start rounded-xl border border-brand-line bg-white px-4 py-2.5 text-sm font-bold text-brand-ink shadow-sm transition hover:border-brand-primary/40 hover:text-brand-primary xl:self-auto">
                    <svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="M12.5 4 6.5 10l6 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    Volver a usuarios
                </a>
            </div>

            <nav aria-label="Secciones del perfil" class="mb-6 grid gap-3 sm:grid-cols-3">
                <a href="#datos-personales" class="flex items-center gap-3 rounded-xl border border-brand-primary/25 bg-brand-primary/5 p-3.5 text-sm font-bold text-brand-primary"><span class="grid size-7 place-items-center rounded-lg bg-brand-primary text-xs text-white">1</span>Datos personales</a>
                <a href="#foto-perfil" class="flex items-center gap-3 rounded-xl border border-brand-line bg-white p-3.5 text-sm font-semibold text-brand-muted transition hover:border-brand-primary/30 hover:text-brand-primary"><span class="grid size-7 place-items-center rounded-lg bg-brand-canvas text-xs font-bold text-brand-muted">2</span>Foto de perfil</a>
                <a href="#seguridad" class="flex items-center gap-3 rounded-xl border border-brand-line bg-white p-3.5 text-sm font-semibold text-brand-muted transition hover:border-brand-primary/30 hover:text-brand-primary"><span class="grid size-7 place-items-center rounded-lg bg-brand-canvas text-xs font-bold text-brand-muted">3</span>Seguridad</a>
            </nav>

            @if (session('status'))
                <div role="status" class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-800">{{ session('status') }}</div>
            @endif

            <form action="{{ route('perfil.update') }}" method="POST" enctype="multipart/form-data" class="grid items-start gap-6 xl:grid-cols-[minmax(0,1.55fr)_minmax(18rem,0.75fr)]">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <section id="datos-personales" class="scroll-mt-6 overflow-hidden rounded-2xl border border-brand-line bg-white shadow-sm">
                        <div class="flex items-start gap-3 border-b border-brand-line px-5 py-5 sm:px-7">
                            <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-brand-primary/10 text-brand-primary"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5.5 6v-1a5.5 5.5 0 0 0-11 0v1h11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg></span>
                            <div><h2 class="text-base font-bold text-brand-ink">Información personal</h2><p class="mt-1 text-sm text-brand-muted">Estos datos aparecen en tu perfil de usuario.</p></div>
                        </div>
                        <div class="grid gap-x-5 gap-y-5 px-5 py-6 sm:grid-cols-2 sm:px-7">
                            <x-form.input name="name" label="Nombre completo" autocomplete="name" placeholder="Tu nombre y apellido" :value="$profile['name']" required />
                            <x-form.input name="email" label="Correo electrónico" type="email" autocomplete="email" placeholder="nombre@empresa.com" :value="$profile['email']" required />
                            <x-form.input name="phone" label="Teléfono" type="tel" autocomplete="tel" placeholder="+34 600 000 000" :value="$profile['phone']" />
                            <div class="sm:col-span-2">
                                <x-form.textarea name="bio" label="Biografía" :value="$profile['bio']" placeholder="Cuéntanos brevemente sobre ti" rows="4" maxlength="500" />
                                <p class="mt-2 text-xs text-brand-muted">Máximo 500 caracteres.</p>
                            </div>
                        </div>
                    </section>

                    <section id="seguridad" class="scroll-mt-6 overflow-hidden rounded-2xl border border-brand-line bg-white shadow-sm">
                        <div class="flex items-start gap-3 border-b border-brand-line px-5 py-5 sm:px-7">
                            <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-brand-green/10 text-brand-green"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M5.5 8V5.75a4.5 4.5 0 0 1 9 0V8m-10 0h11a1.5 1.5 0 0 1 1.5 1.5v6A1.5 1.5 0 0 1 15.5 17h-11A1.5 1.5 0 0 1 3 15.5v-6A1.5 1.5 0 0 1 4.5 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /><path d="M10 11v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg></span>
                            <div><h2 class="text-base font-bold text-brand-ink">Cambiar contraseña</h2><p class="mt-1 text-sm text-brand-muted">Deja estos campos vacíos para conservar tu contraseña actual.</p></div>
                        </div>
                        <div class="grid gap-x-5 gap-y-5 px-5 py-6 sm:grid-cols-2 sm:px-7">
                            <div class="sm:col-span-2"><x-form.input name="current_password" label="Contraseña actual" type="password" autocomplete="current-password" placeholder="Introduce tu contraseña actual" /></div>
                            <x-form.input name="password" label="Nueva contraseña" type="password" autocomplete="new-password" placeholder="Mínimo 8 caracteres" />
                            <x-form.input name="password_confirmation" label="Confirmar nueva contraseña" type="password" autocomplete="new-password" placeholder="Repite la nueva contraseña" />
                        </div>
                    </section>
                </div>

                <aside class="space-y-5">
                    <section id="foto-perfil" class="scroll-mt-6 rounded-2xl border border-brand-line bg-white p-5 shadow-sm sm:p-6">
                        <div class="mb-5 flex items-center justify-between"><div><h2 class="text-sm font-bold text-brand-ink">Foto de perfil</h2><p class="mt-1 text-xs text-brand-muted">Personaliza cómo te ven</p></div><span class="rounded-full bg-brand-green/10 px-2.5 py-1 text-[11px] font-bold text-brand-green">Perfil activo</span></div>
                        <div class="flex flex-col items-center rounded-xl bg-brand-canvas px-4 py-6 text-center">
                            <img src="{{ asset('images/admin-avatar.svg') }}" alt="Foto de {{ $profile['name'] }}" class="size-24 rounded-2xl border-4 border-white object-cover shadow-sm">
                            <h3 class="mt-4 text-base font-bold text-brand-ink">{{ old('name', $profile['name']) }}</h3>
                            <p class="mt-1 text-sm text-brand-muted">{{ $profile['role'] }}</p>
                            <p class="mt-1 text-xs text-brand-muted">Miembro desde {{ $profile['memberSince'] }}</p>
                        </div>
                        <div class="mt-4">
                            <label for="avatar" class="flex cursor-pointer flex-col items-center justify-center rounded-xl border border-dashed border-brand-primary/30 bg-white px-4 py-5 text-center transition hover:bg-brand-primary/5">
                                <span class="grid size-9 place-items-center rounded-xl bg-brand-primary/10 text-brand-primary"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 13V4m0 0L6.5 7.5M10 4l3.5 3.5M4 12.5v2A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></span>
                                <span class="mt-2 text-xs font-bold text-brand-primary">Subir una foto nueva</span>
                                <span class="mt-1 text-[11px] text-brand-muted">PNG o JPG, hasta 2 MB</span>
                                <input id="avatar" name="avatar" type="file" accept="image/png,image/jpeg" class="sr-only" @if ($errors->has('avatar')) aria-invalid="true" aria-describedby="avatar-error" @else aria-describedby="avatar-help" @endif>
                            </label>
                            <p id="avatar-help" class="mt-2 text-center text-xs text-brand-muted">La imagen actual se conserva si no seleccionas otra.</p>
                            @error('avatar')<p id="avatar-error" class="mt-2 text-center text-sm font-medium text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </section>

                    <section class="rounded-2xl border border-brand-primary/15 bg-brand-primary/5 p-5 sm:p-6">
                        <div class="flex gap-3">
                            <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-white text-brand-primary shadow-sm"><svg viewBox="0 0 20 20" fill="none" class="size-5" aria-hidden="true"><path d="M10 2.5 16 5v4.5c0 3.7-2.5 6.4-6 8-3.5-1.6-6-4.3-6-8V5l6-2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" /><path d="m7.5 9.75 1.7 1.7 3.4-3.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></span>
                            <div><h2 class="text-sm font-bold text-brand-ink">Tu cuenta, protegida</h2><p class="mt-1.5 text-xs leading-5 text-brand-muted">Para cambiar tu contraseña se solicitará la actual. Usa una combinación segura de al menos 8 caracteres.</p></div>
                        </div>
                    </section>
                </aside>

                <div class="flex flex-col-reverse gap-3 border-t border-brand-line pt-5 sm:flex-row sm:items-center sm:justify-between xl:col-span-2">
                    <p class="text-xs text-brand-muted">Los cambios se aplican después de guardar.</p>
                    <div class="flex flex-col-reverse gap-3 sm:flex-row">
                        <a href="{{ route('usuarios.index') }}" class="inline-flex min-h-11 items-center justify-center rounded-xl border border-brand-line bg-white px-5 py-3 text-sm font-bold text-brand-ink shadow-sm transition hover:border-brand-primary/40 hover:text-brand-primary">Cancelar</a>
                        <x-primary-button type="submit">Guardar cambios<svg viewBox="0 0 20 20" fill="none" class="size-4" aria-hidden="true"><path d="m4.5 10 3.5 3.5 7.5-7.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" /></svg></x-primary-button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection