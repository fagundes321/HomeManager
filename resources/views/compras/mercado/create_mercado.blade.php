<x-layout title="">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border border-dark">

                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Novo Mercado
                    </div>

                    {{-- Corpo --}}
                    <div class="card-body">
                        <x-mercados.form
                            :action="route('mercado.store')"
                            :nome="old('nome_mercado')"
                            :update="false"
                        />
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-layout>
