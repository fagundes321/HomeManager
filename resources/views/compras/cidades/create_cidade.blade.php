{{-- CREATE --}}
<x-layout title="">
    <x-cidades.form
        :action="route('cidades.store')"
        :nome="old('nome_cidade')"
        :update="false"
    />
</x-layout>
