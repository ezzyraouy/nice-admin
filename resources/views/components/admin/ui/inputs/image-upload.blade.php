@props([
    'id' => 'image',
    'name' => 'image',
    'label' => 'Image principale',
    'value' => null, // pass $blog->image
    'deleteUrl' => null, // pass route
    'blogId' => null,
])

<div class="mb-4">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="file" id="{{ $id }}" name="{{ $name }}" accept="image/*" class="form-control">

    @error($name)
        <span class="text-danger d-block">{{ $message }}</span>
    @enderror

    @if ($value)
        <div class="mt-2 position-relative d-inline-block">
            <img src="{{ asset('storage/' . $value) }}" alt="Image principale"
                style="max-height: 200px; border-radius: .25rem;">
            <div class="position-absolute top-0 end-0 p-2 bg-white rounded-bottom-start" style="opacity: 0.9;">
                <button type="button" onclick="deleteMainImage({{ $blogId }}, this)"
                    class="btn btn-sm btn-link text-danger p-0 m-0" title="Supprimer l'image principale">
                    <i class="bi bi-x-circle-fill fs-5"></i>
                </button>
            </div>
        </div>
    @endif
</div>
