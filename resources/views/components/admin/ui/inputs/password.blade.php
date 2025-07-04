@props(['id', 'name', 'label' => null, 'value' => '', 'placeholder' => '', 'required' => false])

<div class="mb-4 col-md-6">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <input id="{{ $id }}" type="password" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}>

    @error($name)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
