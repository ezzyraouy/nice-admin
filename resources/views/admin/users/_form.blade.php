<x-admin.ui.form-card 
    :title="isset($user) ? 'Modifier un utilisateur' : 'Ajouter un utilisateur'" 
    :action="isset($user) ? route('admin.users.update', $user) : route('admin.users.store')" 
    :method="isset($user) ? 'PUT' : 'POST'"
    submit-label="{{ isset($user) ? 'Mettre à jour' : 'Créer' }}" 
    :show-reset="!isset($user)"
>
    {{-- Name --}}
    <x-admin.ui.inputs.text 
        id="name" 
        name="name" 
        label="Nom" 
        :value="old('name', $user->name ?? '')" 
        required 
    />

    {{-- Email --}}
    <x-admin.ui.inputs.email 
        id="email" 
        name="email" 
        label="Email" 
        :value="old('email', $user->email ?? '')" 
        required 
    />

    {{-- Password --}}
    <x-admin.ui.inputs.password 
        id="password" 
        name="password" 
        label="Mot de passe" 
    />

    {{-- Password Confirmation --}}
    <x-admin.ui.inputs.password 
        id="password_confirmation" 
        name="password_confirmation" 
        label="Confirmation" 
    />

    {{-- Is Admin (Checkbox) --}}
    <x-admin.ui.inputs.checkbox 
        id="is_admin" 
        name="is_admin" 
        label="Administrateur" 
        :checked="old('is_admin', $user->is_admin ?? false)"
    />

</x-admin.ui.form-card>
