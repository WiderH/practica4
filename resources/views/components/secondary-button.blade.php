@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->class('inline-flex min-h-9 items-center justify-center gap-1.5 whitespace-nowrap rounded-lg border border-brand-line bg-white px-3 py-2 text-xs font-bold text-brand-ink shadow-sm transition hover:border-brand-primary/40 hover:text-brand-primary focus:outline-none focus:ring-4 focus:ring-brand-primary/10') }}
>
    {{ $slot }}
</button>