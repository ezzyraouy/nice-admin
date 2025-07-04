@props(['id', 'name', 'label' => null, 'value' => '', 'placeholder' => '', 'required' => false])

<div class="mb-4 col-md-6">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <textarea id="{{ $id }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}>{{ old($name, $value) }}</textarea>

    @error($name)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
