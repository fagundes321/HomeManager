<x-layout title="">

    <div class="container mt-4">

        @forelse ($avaliacoes as $categoria => $produtos)
            {{-- BOTÕES --}}
            <div class="d-flex bd-highlight ">

                <h4 class="fw-bold text-dark  mb-3 p-2 flex-grow-1 bd-highlight">
                    {{ $categoria }}
                </h4>
                <div class=" flex-row p-2 bd-highlight">
                    <a href="{{ route('index') }}" class="btn btn-outline-dark mr-2">
                        <i class="bi bi-arrow-left"></i> Menu
                    </a>

                    <a href="{{ route('avaliacao.create') }}" class="btn btn-dark">
                        + Novo Produto
                    </a>
                </div>
            </div>


            {{-- ================= MOBILE (CARDS) ================= --}}
            <div class="d-md-none">
                @foreach ($produtos as $produto)
                    <div class="card shadow-sm border-dark mb-3">
                        <div class="card-body">

                            {{-- PRODUTO --}}
                            <div class="d-flex bd-highlight">
                                <h6 class="fw-bold  flex-grow-1 bd-highligh">
                                    {{ $produto->produto }}
                                </h6>
                                <div class="d-flex justify-content-between align-items-start  bd-highlight">
                                    <form action="{{ route('avaliacao.favorite', $produto) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit">
                                            @if ($produto->favorito == 0)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                </svg>
                                            @endif

                                        </button>
                                    </form>
                                </div>

                            </div>

                            {{-- MARCA --}}
                            @if ($produto->marca)
                                <div class="small text-muted mb-1">
                                    Marca: {{ $produto->marca }}
                                </div>
                            @endif

                            {{-- AVALIAÇÃO --}}
                            @php
                                $avaliacoesBadge = [
                                    0 => ['Avaliando', 'secondary'],
                                    1 => ['Ruim', 'danger'],
                                    2 => ['Bom', 'primary'],
                                    3 => ['Excelente', 'success'],
                                ];
                            @endphp

                            @if (isset($avaliacoesBadge[$produto->avaliacao]))
                                <span class="badge bg-{{ $avaliacoesBadge[$produto->avaliacao][1] }}">
                                    {{ $avaliacoesBadge[$produto->avaliacao][0] }}
                                </span>
                            @endif

                            {{-- COMENTÁRIO --}}
                            @if ($produto->comentario)
                                <p class="small text-secondary mt-2 mb-2">
                                    {{ $produto->comentario }}
                                </p>
                            @endif

                            {{-- PREÇO --}}
                            <div class="small text-muted">
                                @if ($produto->menor_preco && $produto->maior_preco)
                                    R$ {{ number_format($produto->menor_preco, 2, ',', '.') }}
                                    -
                                    {{ number_format($produto->maior_preco, 2, ',', '.') }}
                                @elseif($produto->menor_preco)
                                    R$ {{ number_format($produto->menor_preco, 2, ',', '.') }}
                                @elseif($produto->maior_preco)
                                    R$ {{ number_format($produto->maior_preco, 2, ',', '.') }}
                                @else
                                    
                                @endif
                            </div>

                            {{-- DATA --}}
                            <div class="small text-muted mt-1">
                                {{ $produto->data_avaliacao?->format('d/m/Y') }}
                            </div>

                            {{-- AÇÕES --}}
                            <div class="d-flex gap-2 mt-3">
                                <a href="{{ route('avaliacao.edit', $produto->id) }}"
                                    class="btn btn-outline-dark btn-sm w-50">
                                    Editar
                                </a>

                                <form action="{{ route('avaliacao.destroy', $produto->id) }}" method="POST"
                                    class="w-50"
                                    onsubmit="return confirm('Tem certeza que deseja excluir este item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm w-100">
                                        Excluir
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            {{-- ================= DESKTOP (TABELA) ================= --}}
            <div class="d-none d-md-block">
                <div class="card shadow-sm border-dark mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 50px" class="text-center">#</th>
                                    <th></th>
                                    <th style="width: 35%">Produto</th>
                                    <th style="width: 15%" class="text-center">Marca</th>
                                    <th style="width: 15%" class="text-center">Avaliação</th>
                                    <th style="width: 15%" class="text-center">Preço</th>
                                    <th style="width: 10%" class="text-center">Data</th>
                                    <th style="width: 10%" class="text-center">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($produtos as $produto)
                                    <tr>

                                        {{-- # --}}
                                        <td class="text-center text-muted">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <form action="{{ route('avaliacao.favorite', $produto) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit">
                                                    @if ($produto->favorito == 0)
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-heart"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                                        </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-heart-fill"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                        </svg>
                                                    @endif

                                                </button>
                                            </form>
                                        </td>
                                        {{-- PRODUTO + COMENTÁRIO --}}
                                        <td>
                                            <div class="fw-semibold text-dark lh-sm">

                                                {{ $produto->produto }}
                                            </div>

                                            @if ($produto->comentario)
                                                <div class="small text-muted mt-1 lh-sm" style="max-width: 520px;">

                                                    {{ $produto->comentario }}
                                                </div>
                                            @endif
                                        </td>

                                        {{-- MARCA --}}
                                        <td class="text-center text-secondary">
                                            {{ $produto->marca ?? '-' }}
                                        </td>

                                        {{-- AVALIAÇÃO --}}
                                        <td class="text-center">
                                            @if (isset($avaliacoesBadge[$produto->avaliacao]))
                                                <span
                                                    class="badge bg-{{ $avaliacoesBadge[$produto->avaliacao][1] }} px-3 py-2">
                                                    {{ $avaliacoesBadge[$produto->avaliacao][0] }}
                                                </span>
                                            @endif
                                        </td>

                                        {{-- PREÇO --}}
                                        <td class="text-center text-nowrap">
                                            @if ($produto->menor_preco && $produto->maior_preco)
                                                R$ {{ number_format($produto->menor_preco, 2, ',', '.') }}
                                                <span class="text-muted">–</span>
                                                {{ number_format($produto->maior_preco, 2, ',', '.') }}
                                            @elseif($produto->menor_preco)
                                                R$ {{ number_format($produto->menor_preco, 2, ',', '.') }}
                                            @elseif($produto->maior_preco)
                                                R$ {{ number_format($produto->maior_preco, 2, ',', '.') }}
                                            @else
                                                -
                                            @endif
                                        </td>

                                        {{-- DATA --}}
                                        <td class="text-center text-nowrap">
                                            {{ $produto->data_avaliacao?->format('d/m/Y') }}
                                        </td>

                                        {{-- AÇÕES --}}
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">

                                                {{-- Editar --}}
                                                <a href="{{ route('avaliacao.edit', $produto->id) }}"
                                                    class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center"
                                                    title="Editar" style="width: 36px; height: 36px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-pencil-square">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg>
                                                </a>

                                                {{-- Excluir --}}
                                                <form action="{{ route('avaliacao.destroy', $produto->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Tem certeza que deseja excluir este item?');">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center"
                                                        title="Excluir" style="width: 36px; height: 36px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                        </svg>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        @empty
            <div class="text-center text-muted py-5">
                Nenhum item cadastrado.
            </div>
        @endforelse

    </div>

</x-layout>
