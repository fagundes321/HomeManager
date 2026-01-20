
{{-- EDIT --}}
<x-layout title="Novo Local - HomeManager">
    <x-locais.form
        :action="route('locais.update', $locai->id)"
        :nome="$locai->local"
        :update="true"
    />
</x-layout>
