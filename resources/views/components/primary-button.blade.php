@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex min-h-11 items-center justify-center gap-2 rounded-xl bg-brand-primary px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-brand-primary-dark focus:outline-none focus:ring-4 focus:ring-brand-primary/20 disabled:pointer-events-none disabled:opacity-60',
    ]) }}
>
    {{ $slot }}
</button>