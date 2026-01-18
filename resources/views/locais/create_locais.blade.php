{{-- CREATE --}}
<x-layout title="Novo Local - HomeManager">
    <x-locais.form
        :action="route('locais.store')"
        :nome="old('local')"
        :update="false"
    />
</x-layout>
