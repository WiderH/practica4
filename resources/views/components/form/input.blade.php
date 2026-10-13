@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'autocomplete' => null,
    'required' => false,
    'value' => null,
])

<div class="space-y-2">
    <label for="{{ $name }}" class="block text-sm font-semibold text-brand-ink">
        {{ $label }}
        @if ($required)
            <span class="ml-0.5 text-brand-primary" aria-hidden="true">*</span>
        @endif
    </label>
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        @if ($type !== 'password') value="{{ old($name, $value) }}" @endif
        placeholder="{{ $placeholder }}"
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        @if ($required) required @endif
        @if ($errors->has($name)) aria-invalid="true" aria-describedby="{{ $name }}-error" @endif
        {{ $attributes->class([
            'block w-full rounded-xl border bg-white px-4 py-3 text-sm text-brand-ink shadow-sm outline-none transition placeholder:text-slate-400 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10',
            'border-red-400' => $errors->has($name),
            'border-brand-line' => ! $errors->has($name),
        ]) }}
    >
    @error($name)
        <p id="{{ $name }}-error" class="text-sm font-medium text-red-600">{{ $message }}</p>
    @enderror
</div>