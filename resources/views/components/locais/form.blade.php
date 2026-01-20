<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-5">

            <div class="card shadow-sm border border-dark">

                {{-- HEADER --}}
                <div class="card-header bg-dark text-white fw-semibold">
                    {{ $update ? 'Editar Local' : 'Novo Local' }}
                </div>

                <div class="card-body">

                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @if ($update)
                            @method('PUT')
                        @endif

                        {{-- NOME --}}
                        <div class="mb-3">
                            <label for="local" class="form-label fw-semibold text-dark">
                                Nome do local
                            </label>
                            <input
                                required
                                autofocus
                                class="form-control border-dark"
                                type="text"
                                id="local"
                                name="local"
                                placeholder="Ex.: Cozinha, Banheiro..."
                                value="{{ $nome }}"
                            >
                        </div>

                        <hr class="my-4 border-dark">

                        {{-- AÇÕES --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('locais.index') }}"
                               class="btn btn-outline-dark px-4">
                                Voltar
                            </a>

                            <button type="submit"
                                    class="btn btn-dark px-4">
                                {{ $update ? 'Salvar Alterações' : 'Adicionar' }}
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
