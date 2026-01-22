<x-layout title="Criar Manutenção - HomeManager">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Nova Manutenção
                    </div>

                    <div class="card-body">

                        <form action="{{ route('manutencao.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-12 col-md-3 position-relative">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome
                                    </label>

                                    <input required autofocus class="form-control border-dark" type="text"
                                        id="nome" name="nome" placeholder="Ex.: Espelho, Pneu..."
                                        autocomplete="off" value="{{ old('nome') }}">


                                </div>

                                {{-- unidade --}}
                                <div class="col-12 col-md-3">
                                    <label for="unidade" class="form-label fw-semibold text-dark">
                                        Unidade
                                    </label>
                                    <input class="form-control border-dark" type="text" id="unidade" name="unidade"
                                        placeholder="Ex.: 1 km, 1 kg..." value="{{ old('unidade') }}">
                                </div>


                                {{-- Preço Maior --}}
                                <div class="col-12 col-md-3">
                                    <label for="preco" class="form-label fw-semibold text-dark">
                                        Preço
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-dark text-dark">
                                            R$
                                        </span>
                                        <input class="form-control border-dark" type="text" inputmode="decimal"
                                            id="preco" name="preco" placeholder="0,00" value="{{ old('preco') }}"
                                            oninput="formatarMoeda(this)">
                                    </div>


                                </div>


                                {{-- loja --}}
                                <div class="col-12 col-md-3">
                                    <label for="loja" class="form-label fw-semibold text-dark">
                                        Loja
                                    </label>
                                    <input class="form-control border-dark" type="text" id="loja" name="loja"
                                        placeholder="Ex.: Real, Americanas..." value="{{ old('loja') }}">
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



                                {{-- Local --}}
                                <div class=" col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Local
                                    </label>

                                    <div class="">

                                        <div class="">
                                            <select class="form-select border-dark" name="local_id" required>
                                                <option value="" disabled selected>Selecione</option>

                                                @foreach ($locais as $local)
                                                <option value="{{$local->id}}">
                                                    {{$local->local}}
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 col-md-6">
                                    <label class="form-label fw-semibold text-dark">
                                        Link
                                    </label>
                                    <input class="form-control border-dark" type="text" id="link" name="link"
                                        placeholder="Ex.: http://..." value="{{ old('link') }}">
                                </div>
                                {{-- Descrição --}}
                                <div class="col-12">
                                    <label for="observacao" class="form-label fw-semibold text-dark">
                                        Observação
                                    </label>

                                    <textarea class="form-control border-dark" id="observacao" name="observacao" rows="4"
                                        placeholder="Escreva sua opinião sobre o produto...">{{ old('observacao') }}</textarea>
                                </div>
                            </div>


                            <hr class="my-4 border-dark">

                            {{-- Botões --}}

                            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">

                                <button type="submit" class="btn btn-dark px-4 w-100 w-md-auto">
                                    Salvar
                                </button>
                                <a href="{{ route('manutencao.index') }}"
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

    <script>
        const inputProduto = document.getElementById('produto');
        const listaSugestoes = document.getElementById('sugestoes-produto');

        let timeout = null;

        inputProduto.addEventListener('input', () => {
            clearTimeout(timeout);

            const valor = inputProduto.value.trim();

            if (valor.length < 2) {
                listaSugestoes.style.display = 'none';
                return;
            }

            timeout = setTimeout(() => {
                fetch(`{{ route('avaliacao.sugestoes') }}?q=${valor}`)
                    .then(res => res.json())
                    .then(dados => {
                        listaSugestoes.innerHTML = '';

                        if (dados.length === 0) {
                            listaSugestoes.style.display = 'none';
                            return;
                        }

                        dados.forEach(produto => {
                            const li = document.createElement('li');
                            li.className = 'list-group-item list-group-item-action';
                            li.textContent = produto;

                            li.onclick = () => {
                                inputProduto.value = produto;
                                listaSugestoes.style.display = 'none';
                            };

                            listaSugestoes.appendChild(li);
                        });

                        listaSugestoes.style.display = 'block';
                    });
            }, 300);
        });
    </script>


</x-layout>
