{{-- EDIT --}}
<x-layout title="">
    <x-cidades.form
        :action="route('cidades.update', $cidade->id)"
        :nome="$cidade->nome_cidade"
        :update="true"
    />
</x-layout>
