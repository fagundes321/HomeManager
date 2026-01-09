<x-layout title="Nova Compra - HomeManager">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Nova Compra
                    </div>

                    <div class="card-body">

                        <form action="{{ route('compras.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-12 col-md-5">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input
                                        required
                                        autofocus
                                        class="form-control border-dark"
                                        type="text"
                                        id="nome"
                                        name="nome"
                                        placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('nome') }}"
                                    >
                                </div>

                                {{-- Marca --}}
                                <div class="col-12 col-md-4">
                                    <label for="marca" class="form-label fw-semibold text-dark">
                                        Marca
                                    </label>
                                    <input
                                        class="form-control border-dark"
                                        type="text"
                                        id="marca"
                                        name="marca"
                                        placeholder="Ex.: Sadia, Perdigão..."
                                        value="{{ old('marca') }}"
                                    >
                                </div>

                                {{-- Preço --}}
                                <div class="col-12 col-md-3">
                                    <label for="preco" class="form-label fw-semibold text-dark">
                                        Preço
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-dark text-dark">
                                            R$
                                        </span>
                                        <input
                                            class="form-control border-dark"
                                            type="text"
                                            inputmode="decimal"

                                            id="preco"
                                            name="preco"
                                            placeholder="0,00"
                                            value="{{ old('preco') }}"
                                            oninput="formatarMoeda(this)"
                                        >
                                    </div>
                                </div>

                                {{-- Quantidade + Unidade --}}
                                <div class="col-12 col-md-4">
                                    <label class="form-label fw-semibold text-dark">
                                        Quantidade
                                    </label>

                                    <div class="row g-2">
                                        <div class="col-7">
                                            <input
                                                required
                                                type="number"
                                                step="0.01"
                                                min="0"
                                                class="form-control border-dark"
                                                name="quantidade"
                                                placeholder="Qtd"
                                                value="{{ old('quantidade') }}"
                                            >
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

                                {{-- Mercado --}}
                                <div class="col-12 col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Mercado
                                    </label>
                                    <select class="form-select border-dark" name="mercado_id">
                                        <option value="" disabled selected>
                                            Selecione
                                        </option>
                                        @foreach ($mercados as $mercado)
                                            <option value="{{ $mercado->id }}">
                                                {{ $mercado->nome_mercado }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Cidade --}}
                                <div class="col-12 col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Cidade
                                    </label>
                                    <select class="form-select border-dark" name="cidade_id">
                                        <option value="" disabled selected>
                                            Selecione
                                        </option>
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->id }}">
                                                {{ $cidade->nome_cidade }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <hr class="my-4 border-dark">

                            {{-- Botões --}}
                            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">

                                  <button type="submit"
                                        class="btn btn-dark px-4 w-100 w-md-auto">
                                    Salvar
                                </button>
                                <a href="{{ route('compras.index') }}"
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

    <script>
        function formatarMoeda(input) {
            let value = input.value.replace(/\D/g, "");
            value = (value / 100).toFixed(2);
            input.value = value.replace(".", ",");
        }
    </script>

</x-layout>
