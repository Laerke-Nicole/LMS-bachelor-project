<div class="col-12">
    <div class="form-group mb-3">
        <label class="form-label ls-2 fs-6 text-uppercase">{{ $label }}</label>
        <input
            type="{{ $type ?? 'text' }}"
            name="{{ $name }}"
            value="{{ old($name, $value ?? '') }}"
            class="{{ $class }}"
            placeholder="{{ $placeholder ?? $label }}"
        >
    </div>
</div>
