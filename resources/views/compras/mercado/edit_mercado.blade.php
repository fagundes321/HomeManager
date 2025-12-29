<x-layout title="">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border border-dark">

                    <div class="card-header bg-dark text-white fw-semibold">
                        Editar Mercado
                    </div>

                    <div class="card-body">
                        <x-mercados.form
                            :action="route('mercado.update', $mercado->id)"
                            :nome="$mercado->nome_mercado"
                            :update="true"
                        />
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-layout>
