<x-layout title="Inicio - HomeManager">

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

                                Controle financeiro feito via planilha externa
                            </p>

                            </p>

                            <span class="badge bg-secondary">Planilha Google</span>



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

            {{-- Pereciveis --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('pereciveis.index') }}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />

                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Perecíveis</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Itens Monitorados
                            </p>

                            <p class="fw-bold h1 text-dark text-center ">

                                {{ $totalPereciveis }}
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
                                    {{ $validadePereciveis?->validade?->format('d/m/Y') ?? 'Sem validade' }}

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

                                    Ver Perecíveis
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

                                {{ $totalEssenciais }}
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
                <a href="{{route('manutencao.index')}}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708z" />
                                <path
                                    d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.5 1.5 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03" />
                                <path
                                    d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />


                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Casa & Carro</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">


                            <p class="fw-semibold h5 text-dark mb-2">
                                Manutenções e objetivos
                            </p>

                            <p class="text-muted mb-5 h5">
                                Controle de manutenções periódicas
                            </p>
                            <div
                                class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-cart4 me-2 " viewBox="0 0 16 16">

                                    <path
                                        d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                                </svg>

                                </svg>
                                <h5 class="fw-bold mb-0">
                                    Ver manutenções
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
