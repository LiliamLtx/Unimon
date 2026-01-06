        <section class="content">
            {{-- Início do formulário de pesquisa (opcional se for usar apenas links) --}}
            <form action="{{ route('pesquisar') }}" name="frmPesqSrv" id="frmPesqSrv" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="fw-bold">Dashboard <small class="text-muted fs-6">- monitoramento de ferramentas</small></h4>
                    </div>
                </div>


                <div class="row g-3 mb-5">
                    {{-- 1. Serviços --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar') }}" class="text-decoration-none">
                            <div class="small-box bg-dark text-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                                <div class="inner">
                                    <h3 class="fw-bold">Serviços</h3>
                                    <p class="mb-0">Total: <span class="badge bg-light text-dark">teste</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-cogs fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- 2. Zabbix --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar',['FERRAMENTA'=>'Zabbix']) }}" class="text-decoration-none">
                            <div class="small-box bg-success text-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                                <div class="inner">
                                    <h3 class="fw-bold">Zabbix</h3>
                                    <p class="mb-0">Status: <span class="badge bg-white text-success">Ativo</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-server fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- 3. Prometheus --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar',['FERRAMENTA'=>'Prometheus']) }}" class="text-decoration-none">
                            <div class="small-box text-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden" style="background-color: #e65100;">
                                <div class="inner">
                                    <h3 class="fw-bold">Prometheus</h3>
                                    <p class="mb-0">Alertas: <span class="badge bg-danger">02</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-fire fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- 4. Checkmk --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar',['FERRAMENTA'=>'Checkmk']) }}" class="text-decoration-none">
                            <div class="small-box bg-info text-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                                <div class="inner">
                                    <h3 class="fw-bold">Checkmk</h3>
                                    <p class="mb-0">Hosts: <span class="badge bg-white text-info">150</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-check-circle fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- 5. SiteScope --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar',['FERRAMENTA'=>'Sitescope']) }}" class="text-decoration-none">
                            <div class="small-box bg-primary text-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                                <div class="inner">
                                    <h3 class="fw-bold">SiteScope</h3>
                                    <p class="mb-0">Monitores: <span class="badge bg-white text-primary">85</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-eye fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- 6. Siscogen --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar',['FERRAMENTA'=>'Siscogen']) }}" class="text-decoration-none">
                            <div class="small-box bg-secondary text-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                                <div class="inner">
                                    <h3 class="fw-bold">Siscogen</h3>
                                    <p class="mb-0">Tickets: <span class="badge bg-dark">12</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-file-alt fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </form>
        </section>