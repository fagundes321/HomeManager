<x-layout title="Essenciais - HomeManager">

    <div class="container mt-4">

        @forelse ($locais as $local)
            @php
                $locaisDosEssenciais = $essenciais->where('local_id', $local->id)
            @endphp
            @if ($locaisDosEssenciais)


            <div class="d-flex bd-highlight">
                {{-- TÍTULO DO LOCAL --}}
                <h2 class="fw-bold text-dark  mb-3 p-2 grow bd-highlight">
                    {{ $local->local }}
                </h2>
                {{-- BOTÕES --}}
                <div class="flex-row p-2 bd-highlight">
                    <a href="{{ route('index') }}" class="btn btn-outline-dark">
                        <i class="bi bi-arrow-left"></i> Menu
                    </a>

                    <a href="{{ route('essenciais.create') }}" class="btn btn-dark">
                        + Novo Item
                    </a>
                </div>
            </div>



            {{-- TABELA --}}
            <div class="d-none d-md-block">
                <div class="card shadow-sm border border-dark mb-4">
                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0 text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th class="d-none d-md-table-cell">Quantidade</th>
                                    <th class="d-none d-md-table-cell">Local</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($essenciais as $item)
                                    <tr class="">
                                        <td>{{ $loop->iteration }}</td>

                                        <td class="fw-semibold ">
                                            {{ $item->nome }}

                                            <div class="d-md-none small text-muted">
                                                {{ (int) $item->quantidade }}
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $unidadesEspeciais = ['kg', 'l'];
                                                $temDecimal = fmod($item->quantidade, 1) != 0;
                                            @endphp

                                            @if (in_array($item->unidade, $unidadesEspeciais) && $temDecimal)
                                                {{ number_format($item->quantidade, 1, '.', '') }} {{ $item->unidade }}
                                            @else
                                                {{ (int) $item->quantidade }} {{ $item->unidade }}
                                            @endif

                                        </td>


                                        <td class="d-none d-md-table-cell">
                                            {{ $item->local }}
                                        </td>

                                        <td>
                                            <div class="d-flex justify-content-center gap-2">




                                                {{-- Editar --}}
                                                <a href="{{ route('essenciais.edit', $item->id) }}"
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
                                                <form action="{{ route('essenciais.destroy', $item->id) }}"
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


            <div class="d-md-none">

                <div class="card shadow-sm border-dark mb-3">
                    <div class="card-body">
                        {{-- item --}}

                        <div class="d-flex">
                            <h6 class="fw-bold">
                                {{ $item->nome }}
                            </h6>
                        </div>
                        <div>
                            @if (in_array($item->unidade, $unidadesEspeciais) && $temDecimal)
                                {{ number_format($item->quantidade, 1, '.', '') }} {{ $item->unidade }}
                            @else
                                {{ (int) $item->quantidade }} {{ $item->unidade }}
                            @endif

                        </div>
                        {{-- AÇÕES --}}
                            <div class="d-flex gap-2 mt-3">
                                <a href="{{ route('essenciais.edit', $item->id) }}"
                                    class="btn btn-outline-dark btn-sm w-50">
                                    Editar
                                </a>

                                <form action="{{ route('essenciais.destroy', $item->id) }}" method="POST"
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

            </div>


            {{-- RESUMO DO LOCAL --}}
            <div class="mb-4 text-end text-muted">
                Total de essencial em {{ $local }}:

                <strong>{{ $essenciais->count() }}</strong>
            </div>
        @endif
        @empty
            <div class="text-center text-muted py-5">
                Nenhum item cadastrado.
            </div>
        @endforelse

    </div>

</x-layout>
