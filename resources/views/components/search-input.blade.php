@props([
    'name' => 'q',
    'id' => null,
    'label' => 'Buscar usuarios',
    'placeholder' => 'Buscar por nombre o correo...',
    'value' => '',
])

<div class="relative min-w-0">
    <label for="{{ $id ?? $name }}" class="sr-only">{{ $label }}</label>
    <svg viewBox="0 0 20 20" fill="none" class="pointer-events-none absolute left-3.5 top-1/2 size-4 -translate-y-1/2 text-slate-400" aria-hidden="true">
        <circle cx="8.75" cy="8.75" r="5.75" stroke="currentColor" stroke-width="1.5" />
        <path d="m13 13 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
    </svg>
    <input
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        type="search"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->class('w-full rounded-xl border border-brand-line bg-white py-2.5 pl-10 pr-4 text-sm text-brand-ink shadow-sm outline-none placeholder:text-slate-400 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10') }}
    >
</div>