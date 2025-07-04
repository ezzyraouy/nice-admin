<x-admin.ui.form-card 
    :title="isset($contact) ? 'Modifier un contact' : 'Ajouter un contact'" 
    :action="isset($contact) ? route('admin.contacts.update', $contact) : route('admin.contacts.store')" 
    :method="isset($contact) ? 'PUT' : 'POST'"
    submit-label="{{ isset($contact) ? 'Mettre à jour' : 'Créer' }}" 
    :show-reset="!isset($contact)"
>

    {{-- Name --}}
    <x-admin.ui.inputs.text 
        id="name" 
        name="name" 
        label="Nom" 
        :value="old('name', $contact->name ?? '')" 
        required 
    />

    {{-- Email --}}
    <x-admin.ui.inputs.email 
        id="email" 
        name="email" 
        label="Email" 
        :value="old('email', $contact->email ?? '')" 
        required 
    />

    {{-- Phone --}}
    <x-admin.ui.inputs.text 
        id="phone" 
        name="phone" 
        label="Téléphone" 
        :value="old('phone', $contact->phone ?? '')" 
        required 
    />

    {{-- Object --}}
    <x-admin.ui.inputs.text 
        id="object" 
        name="object" 
        label="Objet" 
        :value="old('object', $contact->object ?? '')" 
        required 
    />

    {{-- Message --}}
    <x-admin.ui.inputs.textarea 
        id="message" 
        name="message" 
        label="Message" 
        :value="old('message', $contact->message ?? '')" 
        placeholder="Saisir le message"
        required 
    />

</x-admin.ui.form-card>
