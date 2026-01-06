<x-layout title="">

    <div class="container mt-4 mb-5">

        {{-- HEADER --}}

        <div class="text-center mb-4">
            <span class="badge bg-dark fs-6 px-3 py-2">
                {{ $agora->translatedFormat('d/m/Y') }} •
                <span id="clock">{{ $agora->format('H:i') }}</span>
            </span>

        </div>
        <hr>
        {{-- GRID PRINCIPAL --}}
        <div class="row g-4">

            {{-- COMPRAS --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('compras.index') }}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Compras</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Total de itens
                            </p>
                            <p class="fw-bold h1 text-dark text-center ">

                                {{ $totalItens }}
                            </p>
                            <div class="text-center d-flex justify-content-center align-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" class="me-2"
                                    style="stroke: currentColor; stroke-width: 0.6;">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />

                                </svg>

                                <p class="mb-0">
                                    Última compra: 15/04/2026
                                </p>
                            </div>
                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                                <h5 class="fw-bold mb-0 ">

                                    Ver Compras
                                </h5>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- FINANCEIRO --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a target="__blank"
                    href="https://docs.google.com/spreadsheets/d/10vU2tjXz1vMTUuc5hYZxvgB8S9BGtawPrsLBLoXvaXg/edit?gid=1169939068#gid=1169939068"
                    class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                <path
                                    d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />

                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Financeiro</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Em caixa: <span class="text-success h2">R$ 1000</span>
                            </p>

                            <p class="fw-bold h5 text-dark text-center">
                                Total Gasto: <span class="text-danger h2">R$ 400</span>
                            </p>


                            <p class="fw-bold h1 text-dark text-center ">

                                {{-- {{ $totalItens }} --}}
                            </p>

                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
                                </svg>

                                </svg>
                                <h5 class="fw-bold mb-0 ">

                                    Financeiro
                                </h5>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- DESPENSA --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('despensa.index') }}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />

                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Despensa</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Itens Monitorados
                            </p>

                            <p class="fw-bold h1 text-dark text-center ">

                                {{ $totalDespensa }}
                            </p>
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" class="me-2"
                                    style="stroke: currentColor; stroke-width: 0.6;">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />

                                </svg>

                                <p class="mb-0">
                                    Próximo vencimento:
                                    {{ $validadeDespensa?->validade?->format('d/m/Y') ?? 'Sem validade' }}

                                </p>
                            </div>


                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2 " viewBox="0 0 16 16">
                                    <path
                                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                </svg>

                                </svg>
                                <h5 class="fw-bold mb-0 ">

                                    Ver Despensa
                                </h5>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- AVALIAÇÕES --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('avaliacao.index') }}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />

                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Avaliações</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Total de Avaliados
                            </p>

                            <p class="fw-bold h1 text-dark text-center ">


                                {{ $totalAvaliacoes }}
                            </p>
                            {{-- <div class="text-center d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" class="me-2"
                                    style="stroke: currentColor; stroke-width: 0.6;">

                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />

                                </svg>

                                <p class="mb-0">
                                    Próximo vencimento: 15/04/2026
                                </p>
                            </div> --}}


                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2 " viewBox="0 0 16 16">

                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                                    <path
                                        d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194z" />
                                </svg>

                                </svg>
                                <h5 class="fw-bold mb-0 ">

                                    Ver avaliações
                                </h5>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- essenciais --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('essenciais.index') }}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z" />
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514" />

                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">essenciais</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Itens fixos do mês
                            </p>

                            <p class="fw-bold h1 text-dark text-center ">

                                {{ $totalItens }}
                            </p>
                            {{-- <div class="text-center d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" class="me-2"
                                    style="stroke: currentColor; stroke-width: 0.6;">

                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />

                                </svg>

                                <p class="mb-0">
                                    Próximo vencimento: 15/04/2026
                                </p>
                            </div> --}}


                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2 " viewBox="0 0 16 16">

                                    <path
                                        d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                </svg>

                                </svg>
                                <h5 class="fw-bold mb-0 ">

                                    Gerenciar essenciais
                                </h5>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- HISTÓRICO --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />


                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Histórico</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Última ação
                            </p>

                            <p class="fw-bold h1 text-dark text-center ">

                                Teste

                            </p>
                            {{-- <div class="text-center d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" class="me-2"
                                    style="stroke: currentColor; stroke-width: 0.6;">

                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />

                                </svg>

                                <p class="mb-0">
                                    Próximo vencimento: 15/04/2026
                                </p>
                            </div> --}}


                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2 " viewBox="0 0 16 16">

                                    <path
                                        d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                                    <path
                                        d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                                </svg>

                                </svg>
                                <h5 class="fw-bold mb-0 ">

                                    Ver histórico
                                </h5>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <script>
        function atualizarHora() {
            const agora = new Date();
            const h = String(agora.getHours()).padStart(2, '0');
            const m = String(agora.getMinutes()).padStart(2, '0');
            document.getElementById('clock').textContent = `${h}:${m}`;
        }

        atualizarHora();
        setInterval(atualizarHora, 1000);
    </script>


</x-layout>
