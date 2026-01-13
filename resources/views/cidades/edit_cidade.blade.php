{{-- EDIT --}}
<x-layout title="Editar Cidade - HomeManager">
    <x-cidades.form
        :action="route('cidades.update', $cidade->id)"
        :nome="$cidade->nome_cidade"
        :update="true"
    />
</x-layout>
