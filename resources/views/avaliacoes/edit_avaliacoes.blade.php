<x-layout title="">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Nova Avaliação
                    </div>

                    <div class="card-body">
                        <form action="{{ route('avaliacao.update', $avaliacao->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-12 col-md-3">
                                    <label for="produto" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input required autofocus class="form-control border-dark" type="text"
                                        id="produto" name="produto" placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('produto', $avaliacao->produto) }}">
                                </div>

                                {{-- Marca --}}
                                <div class="col-12 col-md-3">
                                    <label for="marca" class="form-label fw-semibold text-dark">
                                        Marca
                                    </label>
                                    <input class="form-control border-dark" type="text" id="marca" name="marca"
                                        placeholder="Ex.: Sadia, Perdigão..."
                                        value="{{ old('marca', $avaliacao->marca) }}">
                                </div>


                                {{-- Avaliação --}}
                                <div class=" col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Categoria
                                    </label>

                                    <div class="">

                                        <div class="">
                                            <select class="form-select border-dark" name="categoria" required>
                                                <option value="" disabled selected>Selecione</option>
                                                <option value="Alimentos" @selected(old('categoria', $avaliacao->categoria) === 'Alimentos')>
                                                    Alimentos
                                                </option>
                                                <option value="Bebidas" @selected(old('categoria', $avaliacao->categoria) === 'Bebidas')>
                                                    Bebidas
                                                </option>
                                                <option value="Limpeza" @selected(old('categoria', $avaliacao->categoria) === 'Limpeza')>
                                                    Limpeza
                                                </option>
                                                <option value="Higiene" @selected(old('categoria', $avaliacao->categoria) === 'Higiene')>
                                                    Higiene
                                                </option>
                                            </select>



                                        </div>
                                    </div>
                                </div>

                                <div class=" col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Avaliação
                                    </label>

                                    <div class="">

                                        <div class="">
                                            <select class="form-select border-dark" name="avaliacao" required>
                                                <option value="" disabled selected>Selecione</option>
                                                <option value="3" @selected(old('avaliacao', $avaliacao->avaliacao) === 3)>
                                                    Excelente
                                                </option>
                                                <option value="2" @selected(old('avaliacao', $avaliacao->avaliacao) === 2)>
                                                    Bom
                                                </option>
                                                <option value="1" @selected(old('avaliacao', $avaliacao->avaliacao) === 1)>
                                                    Ruim
                                                </option>
                                            </select>



                                        </div>
                                    </div>
                                </div>

                                {{-- Descrição --}}
                                <div class="col-12">
                                    <label for="comentario" class="form-label fw-semibold text-dark">
                                        Comentário
                                    </label>

                                    <textarea class="form-control border-dark" id="comentario" name="comentario" rows="4"
                                        placeholder="Escreva sua opinião sobre o produto...">{{ old('comentario', $avaliacao->comentario) }}</textarea>
                                </div>


                                {{-- Preço Menor --}}
                                <div class="col-12 col-md-3">
                                    <label for="menor_preco" class="form-label fw-semibold text-dark">
                                        Preço menor
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-dark text-dark">
                                            R$
                                        </span>
                                        <input class="form-control border-dark" type="text" inputmode="decimal"
                                            id="menor_preco" name="menor_preco" placeholder="0,00"
                                            value="{{ old('menor_preco', $avaliacao->menor_preco) }}"
                                            oninput="formatarMoeda(this)">
                                    </div>


                                </div>

                                {{-- Preço Maior --}}
                                <div class="col-12 col-md-3">
                                    <label for="maior_preco" class="form-label fw-semibold text-dark">
                                        Preço Maior
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-dark text-dark">
                                            R$
                                        </span>
                                        <input class="form-control border-dark" type="text" inputmode="decimal"
                                            id="maior_preco" name="maior_preco" placeholder="0,00"
                                            value="{{ old('maior_preco', $avaliacao->maior_preco) }}"
                                            oninput="formatarMoeda(this)">
                                    </div>


                                </div>




                            </div>

                            <hr class="my-4 border-dark">

                            {{-- Botões --}}
                            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">
                                <button type="submit" class="btn btn-dark px-4 w-100 w-md-auto">
                                    Salvar
                                </button>
                                <a href="{{ route('avaliacao.index') }}"
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
