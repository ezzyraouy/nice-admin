@props([
    'id' => 'files',
    'name' => 'files[]',
    'label' => 'Fichiers',
    'accept' => 'image/*,video/*,application/pdf',
    'required' => false,
])

<div class="mb-4">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="file" id="{{ $id }}" name="{{ $name }}" class="form-control" multiple
        accept="{{ $accept }}" {{ $required ? 'required' : '' }}>

    {{-- Laravel supports nested file errors like files.0, files.1, etc --}}
    @if ($errors->has(str_replace('[]', '', $name) . '.*'))
        @foreach ($errors->get(str_replace('[]', '', $name) . '.*') as $error)
            <span class="text-danger text-left d-block">{{ $error[0] }}</span>
        @endforeach
    @endif
</div>
