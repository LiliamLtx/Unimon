@extends('layouts.main_layout')

@section('content')

<x-app-layout>
    <div class="page-container">
        <h1>Bem-vindo ao Unimon</h1>
        <p>Conteúdo principal da página.</p>
        <section class="content">
            <form action="{{ route('pesquisar') }}" name="frmPesqSrv" id="frmPesqSrv" method="post">
                <div class="row mt-4">
                    <div class="col-12">
                        <h1>Dashboard <small class="text-muted">- monitoramento de ferramentas</small></h1>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-dark text-white p-3 rounded shadow-sm"><a href="{{ route('pesquisar') }}" class="text-reset text-decoration-none">
                            <div class="inner">
                                <h3>Serviços</h3>
                                <p>Total: <strong>teste</strong></p>
                            </div>
                            <div class="icon-dashboard"><i class="fas fa-cogs"></i></div>
                        </div></a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-success text-white p-3 rounded shadow-sm"><a href="{{ route('pesquisar',['FERRAMENTA'=>'Zabbix']) }}" class="text-reset text-decoration-none">
                            <div class="inner">
                                <h3>Zabbix</h3>
                                <p>Status: <strong>Ativo</strong></p>
                            </div>
                            <div class="icon-dashboard"><i class="fas fa-server"></i></div>
                        </div></a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-orange text-white p-3 rounded shadow-sm" style="background-color: #e65100;"><a href="{{ route('pesquisar',['FERRAMENTA'=>'Prometheus']) }}" class="text-reset text-decoration-none">
                            <div class="inner">
                                <h3>Prometheus</h3>
                                <p>Alertas: <strong>02</strong></p>
                            </div>
                            <div class="icon-dashboard"><i class="fas fa-fire"></i></div>
                        </div></a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-info text-white p-3 rounded shadow-sm"><a href="{{ route('pesquisar',['FERRAMENTA'=>'Checkmk']) }}" class="text-reset text-decoration-none">
                            <div class="inner">
                                <h3>Checkmk</h3>
                                <p>Hosts: <strong>150</strong></p>
                            </div>
                            <div class="icon-dashboard"><i class="fas fa-check-circle"></i></div>
                        </div></a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-primary text-white p-3 rounded shadow-sm"><a href="{{ route('pesquisar',['FERRAMENTA'=>'Sitescope']) }}" class="text-reset text-decoration-none">
                            <div class="inner">
                                <h3>SiteScope</h3>
                                <p>Monitores: <strong>85</strong></p>
                            </div>
                            <div class="icon-dashboard"><i class="fas fa-eye"></i></div>
                        </div></a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="small-box bg-secondary text-white p-3 rounded shadow-sm">
                            <div class="inner">
                                <h3>Siscogen</h3>
                                <p>Tickets: <strong>12</strong></p>
                            </div>
                            <div class="icon-dashboard"><i class="fas fa-file-alt"></i></div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</x-app-layout>

@endsection