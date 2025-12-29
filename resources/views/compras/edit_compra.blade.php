<x-layout title="">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">

                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Editar Compra
                    </div>

                    <div class="card-body">

                        <form action="{{ route('compras.update', $compra->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-md-5">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input required class="form-control border-dark" type="text" id="nome"
                                        name="nome" placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('nome', $compra->nome) }}" autofocus>
                                </div>


                                {{-- Marca --}}
                                <div class="col-md-4">
                                    <label for="marca" class="form-label fw-semibold text-dark">
                                        Marca
                                    </label>
                                    <input class="form-control border-dark" type="text" id="marca" name="marca"
                                        placeholder="Ex.: Sadia, Perdigão..." value="{{ old('marca', $compra->marca) }}"
                                        autofocus>
                                </div>



                                {{-- Preço --}}
                                <div class="col-md-3">
                                    <label for="preco" class="form-label fw-semibold text-dark">
                                        Preço
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-dark text-dark">
                                            R$
                                        </span>
                                        <input class="form-control border-dark" type="text" id="preco"
                                            name="preco" placeholder="0,00" value="{{ old('preco', $compra->preco) }}"
                                            oninput="formatarMoeda(this)">
                                    </div>
                                </div>

                                {{-- Quantidade + Unidade --}}
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold text-dark">
                                        Quantidade
                                    </label>

                                    <div class="input-group">
                                        <input type="number" step="0.01" min="1"
                                            class="form-control border-dark" name="quantidade" placeholder="1"
                                            value="{{ old('quantidade', $compra->quantidade) }}">

                                        <select class="form-select border-dark" name="unidade"
                                            style="max-width: 160px;">
                                            <option value="" disabled selected>
                                                Selecione
                                            </option>
                                            <option value="un">unidade</option>
                                            <option value="kg">Quilo</option>
                                            <option value="g">Grama</option>
                                            <option value="L">Litro</option>
                                            <option value="ml">Mililitro</option>
                                            <option value="pct">Pacote</option>
                                            <option value="cx">Caixa</option>
                                        </select>

                                    </div>
                                </div>

                                {{-- Mercado --}}
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Mercado
                                    </label>
                                    <select class="form-select border-dark" name="mercado_id">
                                        <option value="" disabled selected>
                                            Selecione
                                        </option>
                                        @foreach ($mercados as $mercado)
                                            <option value="{{ $mercado->id }}" @selected(old('mercado_id', $compra->mercado_id) == $mercado->id)>
                                                {{ $mercado->nome_mercado }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Cidade --}}
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Cidade
                                    </label>
                                    <select class="form-select border-dark" name="cidade_id">
                                        <option value="" disabled selected>
                                            Selecione
                                        </option>
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->id }}" @selected(old('cidade_id', $compra->cidade_id) == $cidade->id)>
                                                {{ $cidade->nome_cidade }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <hr class="my-4 border-dark">

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('compras.index') }}" class="btn btn-outline-dark px-4">
                                    Voltar
                                </a>

                                <button type="submit" class="btn btn-dark px-4">
                                    Salvar Alterações
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function formatarMoeda(input) {
            let value = input.value.replace(/\D/g, '');
            if (value === '') return;
            value = (parseInt(value) / 100).toFixed(2);
            input.value = value.replace('.', ',');
        }
    </script>


</x-layout>
