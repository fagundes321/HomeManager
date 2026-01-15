<x-layout title="Casa & Carro - HomeManager">

    <div class="container mt-4">

        @forelse ($manutencao as $local => $itens)

            {{-- HEADER --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold text-dark m-0">
                    {{ $local }}
                </h2>

                <div class="d-flex gap-2">
                    <a href="{{ route('index') }}" class="btn btn-outline-dark btn-sm">Menu</a>

                    <a href="{{ route('cidades.index') }}" class="btn btn-outline-dark btn-sm">
                        Cidades
                    </a>

                    <a href="{{ route('manutencao.create') }}" class="btn btn-dark btn-sm">
                        + Novo Item
                    </a>
                </div>
            </div>

            {{-- ================= DESKTOP ================= --}}
            <div class="d-none d-md-block">
                <div class="card shadow-sm border border-dark mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th class="text-start">Nome</th>
                                    <th class="d-none d-md-table-cell">Unidade</th>
                                    <th>Loja</th>
                                    <th class="d-none d-md-table-cell">Preço</th>
                                    <th class="d-none d-md-table-cell">Cidade</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($itens as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td class="text-start">
                                            <strong class="d-flex">
                                                {{ $item->nome }}
                                                @if ($item->link)
                                                    <a href="{{ $item->link }}" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-link-45deg ml-2 "
                                                            style="width: 25px; height: 25px;" viewBox="0 0 16 16">
                                                            <path
                                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z" />
                                                            <path
                                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z" />
                                                        </svg>
                                                    </a>
                                                @else
                                                @endif

                                            </strong>
                                            @if ($item->observacao)
                                                <div class="small text-muted">
                                                    {{ $item->observacao }}
                                                </div>
                                            @endif
                                        </td>

                                        <td class="d-none d-md-table-cell">
                                            {{ $item->unidade ?? '-' }}
                                        </td>

                                        <td>{{ $item->loja ?? '-' }}</td>

                                        <td class="d-none d-md-table-cell">
                                            {{ $item->preco ? 'R$ ' . number_format($item->preco, 2, ',', '.') : '-' }}
                                        </td>

                                        <td class="d-none d-md-table-cell">
                                            {{ $cidades->firstWhere('id', $item->cidade_id)->nome_cidade ?? '-' }}
                                        </td>


                                        <td>
                                            <div class="d-flex justify-content-center gap-2">



                                                {{-- Editar --}}
                                                <a href="{{ route('manutencao.edit', $item->id) }}"
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
                                                <form action="{{ route('manutencao.destroy', $item->id) }}"
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

            {{-- ================= MOBILE ================= --}}
            <div class="d-md-none mb-4">
                @foreach ($itens as $item)
                    <div class="card shadow-sm mb-3 border-dark">
                        <div class="card-body">
                            <div class="d-flex bd-highlight">
                                <h6 class="fw-bold grow bd-highligh">{{ $item->nome }}</h6>
                                @if ($item->link)
                                    <a href="{{ $item->link }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-link-45deg ml-2 "
                                            style="width: 25px; height: 25px;" viewBox="0 0 16 16">
                                            <path
                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z" />
                                            <path
                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z" />
                                        </svg>
                                    </a>
                                @else
                                @endif
                            </div>
                            @if ($item->observacao)
                                <div class="small text-muted mb-2">
                                    {{ $item->observacao }}
                                </div>
                            @endif
                            @if ($item->unidade)
                                <div class="small">
                                    <strong>
                                        Unidade:
                                    </strong>
                                    {{ $item->unidade}}
                                </div>
                            @endif

                                @if ($item->loja)

                                <div class="small">
                                    <strong>
                                        Loja:
                                    </strong>
                                    {{ $item->loja}}
                                </div>
                                @endif
                            @if ($item->preco)

                            <div class="small">
                                <strong>Preço:</strong>
                                {{  'R$ ' . number_format($item->preco, 2, ',', '.')  }}
                            </div>
                            @endif
                            @if ($item->cidade)
                            <div class="small mb-3">
                                <strong>Cidade:</strong>
                                {{ $cidades->firstWhere('id', $item->cidade_id)->nome_cidade}}
                            </div>

                            @endif

                            <div class="d-flex gap-2 mt-2">
                                <a href="{{ route('manutencao.edit', $item->id) }}"
                                    class="btn btn-outline-dark btn-sm flex-fill">
                                    Editar
                                </a>

                                <form action="{{ route('manutencao.destroy', $item->id) }}" method="POST"
                                    class="flex-fill" onsubmit="return confirm('Excluir item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm w-100">
                                        Excluir
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        @empty
            {{-- HEADER --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold text-dark m-0">
                    Manutenções
                </h2>

                <div class="d-flex gap-2">
                    <a href="{{ route('index') }}" class="btn btn-outline-dark btn-sm">
                        Menu
                    </a>

                    <a href="{{ route('cidades.index') }}" class="btn btn-outline-dark btn-sm">
                        Cidades
                    </a>

                    <a href="{{ route('manutencao.create') }}" class="btn btn-dark btn-sm">
                        + Novo Item
                    </a>
                </div>
            </div>

            {{-- ================= DESKTOP ================= --}}
            <div class="d-none d-md-block">
                <div class="card shadow-sm border border-dark">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th class="text-start">Nome</th>
                                    <th class="d-none d-md-table-cell">Unidade</th>
                                    <th>Loja</th>
                                    <th class="d-none d-md-table-cell">Preço</th>
                                    <th class="d-none d-md-table-cell">Cidade</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td colspan="7" class="py-5 text-muted fw-semibold">
                                        Nenhuma manutenção cadastrada.<br>
                                        Clique em <strong>“+ Novo Item”</strong> para começar.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- ================= MOBILE ================= --}}
            <div class="d-md-none">
                <div class="card shadow-sm border-dark text-center">
                    <div class="card-body py-5">
                        <h6 class="fw-bold mb-2">
                            Nenhuma manutenção cadastrada
                        </h6>

                        <p class="text-muted mb-4">
                            Você ainda não adicionou nenhum item.
                        </p>

                        <a href="{{ route('manutencao.create') }}" class="btn btn-dark btn-sm">
                            + Novo Item
                        </a>
                    </div>
                </div>
            </div>
        @endforelse




    </div>
</x-layout>
