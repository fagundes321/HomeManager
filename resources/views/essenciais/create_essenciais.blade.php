<x-layout title="Criar Essencial - HomeManager">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Adicionar a Essenciais
                    </div>

                    <div class="card-body">

                        <form action="{{ route('essenciais.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-12 col-md-5">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input required autofocus type="text" id="nome" name="nome" autocomplete="on"
                                        class="form-control border-dark" placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('nome') }}">
                                </div>



                                {{-- Quantidade + Unidade --}}
                                <div class="col-12 col-md-4">
                                    <label class="form-label fw-semibold text-dark">
                                        Quantidade
                                    </label>

                                    <div class="row g-2">
                                        <div class="col-7">
                                            <input required type="number" step="0.01" min="0"
                                                class="form-control border-dark" name="quantidade" placeholder="Qtd"
                                                value="{{ old('quantidade') }}">
                                        </div>

                                        <div class="col-5">
                                            <select class="form-select border-dark" name="unidade" required>
                                                <option value="" disabled selected>Un.</option>
                                                <option value="un">Unidade</option>
                                                <option value="kg">Quilo</option>
                                                <option value="g">Grama</option>
                                                <option value="L">Litro</option>
                                                <option value="ml">Mililitro</option>
                                                <option value="pct">Pacote</option>
                                                <option value="cx">Caixa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                {{-- Local --}}
                                <div class="col-12 col-md-3">
                                    <label for="local" class="form-label fw-semibold text-dark">
                                        Local
                                    </label>
                                    <select id="local" name="local" class="form-select border-dark" required>
                                        <option value="" disabled selected>Selecione o local</option>
                                        <option value="Despensa">Despensa</option>
                                        <option value="Geladeira">Geladeira</option>
                                        <option value="Área de Serviço">Área de Serviço</option>
                                        <option value="Banheiro">Banheiro</option>
                                    </select>
                                </div>

                            </div>

                            <hr class="my-4 border-dark">

                            {{-- Botões --}}
                            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">

                                <button type="submit" class="btn btn-dark px-4 w-100 w-md-auto">
                                    Salvar
                                </button>

                                <a href="{{ route('essenciais.index') }}"
                                    class="btn btn-outline-dark px-4 w-100 w-md-auto">
                                    Voltar
                                </a>


                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>
