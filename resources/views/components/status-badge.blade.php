@props(['status'])

@php
    $appearance = match ($status) {
        'active' => ['label' => 'Activo', 'classes' => 'bg-emerald-50 text-emerald-700 ring-emerald-600/15', 'dot' => 'bg-emerald-500'],
        'pending' => ['label' => 'Pendiente', 'classes' => 'bg-amber-50 text-amber-700 ring-amber-600/15', 'dot' => 'bg-amber-500'],
        default => ['label' => 'Inactivo', 'classes' => 'bg-slate-100 text-slate-600 ring-slate-500/15', 'dot' => 'bg-slate-400'],
    };
@endphp

<span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-semibold ring-1 ring-inset {{ $appearance['classes'] }}">
    <span class="size-1.5 rounded-full {{ $appearance['dot'] }}"></span>
    {{ $appearance['label'] }}
</span>