@props([
    'name',
    'label',
    'value' => '',
    'placeholder' => '',
    'rows' => 4,
    'maxlength' => null,
    'required' => false,
])

<div class="space-y-2">
    <label for="{{ $name }}" class="block text-sm font-semibold text-brand-ink">
        {{ $label }}
        @if ($required)
            <span class="ml-0.5 text-brand-primary" aria-hidden="true">*</span>
        @endif
    </label>
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        @if ($maxlength) maxlength="{{ $maxlength }}" @endif
        @if ($required) required @endif
        @if ($errors->has($name)) aria-invalid="true" aria-describedby="{{ $name }}-error" @endif
        {{ $attributes->class([
            'block w-full resize-y rounded-xl border bg-white px-4 py-3 text-sm leading-6 text-brand-ink shadow-sm outline-none transition placeholder:text-slate-400 focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10',
            'border-red-400' => $errors->has($name),
            'border-brand-line' => ! $errors->has($name),
        ]) }}
    >{{ old($name, $value) }}</textarea>
    @error($name)
        <p id="{{ $name }}-error" class="text-sm font-medium text-red-600">{{ $message }}</p>
    @enderror
</div>