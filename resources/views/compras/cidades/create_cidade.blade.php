{{-- CREATE --}}
<x-layout title="Nova Cidade - HomeManager">
    <x-cidades.form
        :action="route('cidades.store')"
        :nome="old('nome_cidade')"
        :update="false"
    />
</x-layout>
