<x-layout title="Perecíveis - HomeManager">

    <div class="container mt-4">


        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold text-dark m-0">
                {{-- {{ $local }} --}} Perecíveis
            </h2>

            <div class="d-flex gap-2">
                <a href="{{ route('index') }}" class="btn btn-outline-dark btn-sm">
                    <i class="bi bi-arrow-left"></i> Menu
                </a>

                <a href="{{ route('pereciveis.create') }}" class="btn btn-dark btn-sm">
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
                                <th>Nome</th>
                                <th class="d-none d-md-table-cell">Marca</th>
                                <th class="d-none d-md-table-cell">Local</th>
                                <th class="d-none d-md-table-cell">Quantidade</th>
                                <th>Dias para vencer</th>
                                <th class="d-none d-md-table-cell">Validade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($pereciveis as $item)

                                @php
                                    $diasParaVencer = explode('.', now()->diffInDays($item->validade, false))[0];
                                @endphp
                                <tr
                                    class="
                                            @if ($diasParaVencer < 20) table-danger
                                            @elseif ($diasParaVencer <= 40)
                                                table-warning
                                            @elseif ($diasParaVencer <= 60)
                                                table-info @endif
                                        ">
                                    <td>{{ $loop->iteration }}</td>

                                    <td class="fw-semibold ">
                                        {{ $item->nome }}

                                        <div class="d-md-none small text-muted">
                                            {{ $item->marca }}
                                        </div>
                                    </td>

                                    <td class="d-none d-md-table-cell">
                                        {{ $item->marca }}
                                    </td>

                                    <td class="d-none d-md-table-cell">
                                        {{ $item->local }}
                                    </td>

                                    <td class="d-none d-md-table-cell">
                                        {{ $item->quantidade }}
                                    </td>
                                    <td>

                                        @if ($item->validade == '')
                                            -
                                        @else
                                            @if ($diasParaVencer < 0)
                                                Vencido há {{ abs($diasParaVencer) }} dias
                                            @else
                                                {{ $diasParaVencer }}
                                            @endif
                                        @endif

                                    </td>
                                    <td class="d-none d-md-table-cell">
                                        @if ($item->validade == '')
                                            -
                                        @else
                                            {{ $item->validade?->format('d/m/Y') }}
                                        @endif
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-center gap-2">


                                            <form action="{{ route('pereciveis.decrement', $item) }}" method="POST"
                                                class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center"
                                                title="Editar" style="width: 36px; height: 36px;"
                                                @if ($item->quantidade > 1) onsubmit="return confirm('Deseja excluir 1 Produto?')"
                                                    @else
                                                        onsubmit="return confirm('Deseja excluir Produto definitivamente?')" @endif>
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-pencil-square">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                        <path
                                                            d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                    </svg>
                                                </button>
                                            </form>

                                            {{-- Editar --}}
                                            <a href="{{ route('pereciveis.edit', $item->id) }}"
                                                class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center"
                                                title="Editar" style="width: 36px; height: 36px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            {{-- Excluir --}}
                                            <form action="{{ route('pereciveis.destroy', $item->id) }}" method="POST"
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

                            @empty
                                <div class="text-center text-muted py-5">
                                    Nenhum item cadastrado.
                                </div>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        {{-- ================= FIM DESKTOP ================= --}}


        {{-- ================= MOBILE ================= --}}
        <div class="d-md-none">

            @foreach ($pereciveis as $item)
                @php
                    $diasParaVencer = explode('.', now()->diffInDays($item->validade, false))[0];
                @endphp

                <div
                    class="card shadow-sm mb-3
                        @if ($diasParaVencer < 0) border-danger
                        @elseif ($diasParaVencer <= 20) border-warning
                        @else border-dark @endif
                    ">
                    <div class="card-body">

                        <h6 class="fw-bold mb-1">
                            {{ $item->nome }}
                        </h6>

                        @if ($item->marca)
                            <div class="small text-muted mb-1">
                                {{ $item->marca }}
                            </div>
                        @endif

                        <div class="mb-2">
                            <strong>Quantidade:</strong> {{ $item->quantidade }}
                        </div>

                        <div class="mb-2">
                            <strong>Validade:</strong>
                            @if (!$item->validade)
                                -
                            @elseif ($diasParaVencer < 0)
                                <span class="text-danger">
                                    Vencido há {{ abs($diasParaVencer) }} dias
                                </span>
                            @else
                                {{ $item->validade->format('d/m/Y') }}
                                <span class="text-muted">
                                    ({{ $diasParaVencer }} dias)
                                </span>
                            @endif
                        </div>

                        <div class="d-flex gap-2 mt-3">

                            <form action="{{ route('pereciveis.decrement', $item) }}" method="POST" class="flex-fill"
                                onsubmit="return confirm('Remover 1 unidade?')">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-dark btn-sm w-100">
                                    Consumir 1
                                </button>
                            </form>

                            <a href="{{ route('pereciveis.edit', $item) }}"
                                class="btn btn-outline-dark btn-sm flex-fill">
                                Editar
                            </a>

                            <form action="{{ route('pereciveis.destroy', $item) }}" method="POST" class="flex-fill"
                                onsubmit="return confirm('Excluir item?')">
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
        {{-- ================= FIM MOBILE ================= --}}

        <div class="text-end text-muted mb-5">
            Total de itens Perecíveis na casa:
            <strong>{{ $pereciveis->count() }}</strong>
        </div>


    </div>

</x-layout>
