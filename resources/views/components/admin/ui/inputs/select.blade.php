@props(['id', 'name', 'label' => null, 'options' => [], 'value' => '', 'required' => false])

<div class="mb-4 col-md-6">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <select id="{{ $id }}" name="{{ $name }}" class="form-select @error($name) is-invalid @enderror" {{ $required ? 'required' : '' }}>
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>{{ $optionLabel }}</option>
        @endforeach
    </select>

    @error($name)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
