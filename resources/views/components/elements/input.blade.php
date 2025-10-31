<div class="col-12">
    <div class="form-group">
        <label class="form-label"><strong>{{ $label }}</strong></label>
        <input
            type="{{ $type ?? 'text' }}"
            name="{{ $name }}"
            value="{{ old($name, $value ?? '') }}"
            class="form-control"
            placeholder="{{ $placeholder ?? $label }}"
        >
    </div>
</div>
