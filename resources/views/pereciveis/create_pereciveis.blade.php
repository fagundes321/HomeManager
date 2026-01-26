<x-layout title="Criar Perecível - HomeManager">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Adicionar a casa
                    </div>

                    <div class="card-body">

                        <form action="{{ route('pereciveis.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-12 col-md-5">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input required autofocus type="text" id="nome" name="nome"
                                        class="form-control border-dark" placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('nome') }}">
                                </div>

                                {{-- Marca --}}
                                <div class="col-12 col-md-4">
                                    <label for="marca" class="form-label fw-semibold text-dark">
                                        Marca
                                    </label>
                                    <input type="text" id="marca" name="marca" class="form-control border-dark"
                                        placeholder="Ex.: Sadia, Perdigão..." value="{{ old('marca') }}">
                                </div>

                                {{-- Quantidade --}}
                                <div class="col-12 col-md-3">
                                    <label for="quantidade" class="form-label fw-semibold text-dark">
                                        Quantidade
                                    </label>
                                    <input required type="number" step="0" min="0" id="quantidade"
                                        name="quantidade" class="form-control border-dark" placeholder="Qtd"
                                        value="{{ old('quantidade') }}">
                                </div>

                                {{-- Validade --}}
                                <div class="col-12 col-md-4">
                                    <label for="validade" class="form-label fw-semibold text-dark">
                                        Validade
                                    </label>
                                    <input type="date" id="validade" name="validade"
                                        class="form-control border-dark" value="{{ old('validade') }}">
                                </div>

                                {{-- Local --}}
                                <div class="col-12 col-md-5">
                                    <label for="local" class="form-label fw-semibold text-dark">
                                        Local
                                    </label>
                                    <select id="local" name="local" class="form-select border-dark" required>
                                        <option value="" disabled selected>Selecione o local</option>
                                        <option value="Despensa">Despensa</option>
                                        <option value="Geladeira">Geladeira</option>
                                    </select>
                                </div>

                            </div>

                            <hr class="my-4 border-dark">

                            {{-- Botões --}}
                            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">

                                <button type="submit" class="btn btn-dark px-4 w-100 w-md-auto">
                                    Salvar
                                </button>
                                <a href="{{ route('pereciveis.index') }}"
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
