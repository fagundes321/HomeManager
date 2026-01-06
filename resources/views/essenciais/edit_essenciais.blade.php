<x-layout title="">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Adicionar a Essenciais
                    </div>

                    <div class="card-body">

                        <form action="{{ route('essenciais.update', $essenciai->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-12 col-md-5">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input required autofocus type="text" id="nome" name="nome"
                                        class="form-control border-dark" placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('nome', $essenciai->nome) }}">
                                </div>



                                {{-- Quantidade + Unidade --}}
                                <div class="col-12 col-md-4">
                                    <label class="form-label fw-semibold text-dark">
                                        Quantidade
                                    </label>
                                    
                                    <div class="input-group">
                                        <input type="number" step="0.01" min="1"
                                           required class="form-control border-dark" name="quantidade" placeholder="1"
                                           value="{{old('quantidade',(int) $essenciai->quantidade)}}">

                                        <select class="form-select border-dark" name="unidade"
                                            style="max-width: 160px;">
                                            <option value="" disabled>
                                                Selecione
                                            </option>

                                            <option value="un" @selected(old('unidade', $essenciai->unidade) == 'un')>
                                                Unidade
                                            </option>

                                            <option value="kg" @selected(old('unidade', $essenciai->unidade) == 'kg')>
                                                Quilo
                                            </option>

                                            <option value="g" @selected(old('unidade', $essenciai->unidade) == 'g')>
                                                Grama
                                            </option>

                                            <option value="L" @selected(old('unidade', $essenciai->unidade) == 'L')>
                                                Litro
                                            </option>

                                            <option value="ml" @selected(old('unidade', $essenciai->unidade) == 'ml')>
                                                Mililitro
                                            </option>

                                            <option value="pct" @selected(old('unidade', $essenciai->unidade) == 'pct')>
                                                Pacote
                                            </option>

                                            <option value="cx" @selected(old('unidade', $essenciai->unidade) == 'cx')>
                                                Caixa
                                            </option>
                                        </select>


                                    </div>
                                </div>



                                {{-- Local --}}
                                <div class="col-12 col-md-3">
                                    <label for="local" class="form-label fw-semibold text-dark">
                                        Local
                                    </label>
                                    <select id="local" name="local" class="form-select border-dark" required>
                                        <option value="" disabled selected>Selecione o local </option>
                                        <option value="Despensa" @selected(old('local', $essenciai->local) === 'Despensa')>
                                            Despensa
                                        </option>
                                        <option value="Geladeira" @selected(old('local', $essenciai->local) == 'Geladeira')>
                                            Geladeira
                                        </option>
                                        <option value="Área de Serviço" @selected(old('local', $essenciai->local) === 'Área de Serviço')>
                                            Área de Serviço
                                        </option>
                                        <option value="Banheiro" @selected(old('local', $essenciai->local) === 'Banheiro')>
                                            Banheiro
                                        </option>
                                    </select>
                                </div>

                            </div>

                            <hr class="my-4 border-dark">

                            {{-- Botões --}}
                            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">
                                <a href="{{ route('essenciais.index') }}"
                                    class="btn btn-outline-dark px-4 w-100 w-md-auto">
                                    Voltar
                                </a>

                                <button type="submit" class="btn btn-dark px-4 w-100 w-md-auto">
                                    Salvar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>
