<x-admin.ui.form-card :title="isset($user) ? 'Modifier un utilisateur' : 'Ajouter un utilisateur'" :action="isset($user) ? route('admin.users.update', $user) : route('admin.users.store')" :method="isset($user) ? 'PUT' : 'POST'"
    submit-label="{{ isset($user) ? 'Mettre à jour' : 'Créer' }}" :show-reset="!isset($user)">
    <div class="col-md-6">
        <label for="name" class="form-label">Nom</label>
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $user->name ?? '') }}">
        @error('name')
            <span class="error invalid-feedback d-block">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $user->email ?? '') }}">
        @error('email')
            <span class="error invalid-feedback d-block">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" id="password" name="password"
            class="form-control @error('password') is-invalid @enderror">
        @error('password')
            <span class="error invalid-feedback d-block">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin" value="1"
                {{ old('is_admin', $user->is_admin ?? false) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_admin">
                Administrateur
            </label>
        </div>
        @error('is_admin')
            <span class="error invalid-feedback d-block">{{ $message }}</span>
        @enderror
    </div>


    <div class="col-md-6">
        <label for="password_confirmation" class="form-label">Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation"
            class="form-control @error('password_confirmation') is-invalid @enderror">
        @error('password_confirmation')
            <span class="error invalid-feedback d-block">{{ $message }}</span>
        @enderror
    </div>
</x-admin.ui.form-card>
