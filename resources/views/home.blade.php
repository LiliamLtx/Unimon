@extends('layouts.main_layout')

@section('content')
<x-app-layout>
    <div class="page-container">
        {{-- Cabeçalho da Página --}}
        <div class="mb-4">
            <h1 class="fw-bold">Bem-vindo ao Unimon</h1>
            <p class="text-muted">Painel unificado de monitoramento de infraestrutura.</p>
            <hr>
        </div>

        <div>
            <div class="col-12">
                <h4 class="fw-bold">Pesquisar<small class="text-muted fs-6">- pesquisar pelo codigo do serviço</small></h4>
                <div class="input-group">
                    <input type="text" class="form-control border-0 ps-4">
                    <button>Pesquisar</button>
                </div>
            </div>
        </div>

        <br>

        @include('cards_serviços')

        <br>
        {{-- Divisão Inferior: Conteúdo 8x4 --}}
        <div class="row g-4">

            {{-- LADO ESQUERDO: Conteúdo 8 Colunas --}}
            <div class="col-lg-8 col-md-7">
                <div class="row g-3">
                    {{-- Card Incidente - Vermelho (Crítico) --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar') }}" class="text-decoration-none">
                            <div class="small-box shadow-sm h-100 position-relative overflow-hidden rounded p-4 text-white" style="background-color: #d32f2f;">
                                <div class="inner">
                                    <h3 class="fw-bold">Incidente</h3>
                                    <p class="mb-0">Dashboard <i class="fas fa-arrow-right ms-1 small"></i></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-tachometer-alt fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card Alerta - Amarelo/Laranja (Atenção) --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar') }}" class="text-decoration-none">
                            <div class="small-box shadow-sm h-100 position-relative overflow-hidden rounded p-4 text-white" style="background-color: #fbc02d;">
                                <div class="inner">
                                    <h3 class="fw-bold">Alerta</h3>
                                    <p class="mb-0">Total: <span class="badge bg-dark text-white">12</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-exclamation-triangle fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card Evento - Azul (Informativo) --}}
                    <div class="col-md-4">
                        <a href="{{ route('pesquisar') }}" class="text-decoration-none">
                            <div class="small-box shadow-sm h-100 position-relative overflow-hidden rounded p-4 text-white" style="background-color: #1976d2;">
                                <div class="inner">
                                    <h3 class="fw-bold">Evento</h3>
                                    <p class="mb-0">Total: <span class="badge bg-light text-dark">85</span></p>
                                </div>
                                <div class="icon-dashboard opacity-25 position-absolute top-50 end-0 translate-middle-y me-3">
                                    <i class="fas fa-stream fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- LADO DIREITO: Resumo de Status 4 Colunas --}}
            <div class="col-lg-4 col-md-5">
                {{-- sticky-top faz ele acompanhar o scroll se a coluna esquerda for longa --}}
                <div class="sticky-top" style="top: 80px;">
                    <div class="p-4 border-0 rounded bg-white shadow-sm">
                        <h5 class="fw-bold mb-4 text-primary">Resumo / Info</h5>

                        <div class="card shadow-sm border-0 p-3" style="background-color: #ebf2f7;">
                            <h6 class="fw-bold mb-3 text-dark">Status Geral</h6>

                            @php
                            $status = [
                            ['label' => 'Produção', 'val' => '1174/1174', 'pct' => 100],
                            ['label' => 'Ativos', 'val' => '1160/1174', 'pct' => 98.8],
                            ['label' => 'Monitorados', 'val' => '1160/1174', 'pct' => 98.8],
                            ];
                            @endphp

                            @foreach($status as $item)
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <small class="fw-bold text-muted">{{ $item['label'] }}</small>
                                    <small class="fw-bold text-primary">{{ $item['val'] }}</small>
                                </div>
                                <div class="progress" style="height: 8px; background-color: #d1e7ff;">
                                    <div class="progress-bar" style="width: {{ $item['pct'] }}%; background-color: #34aadc;"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</x-app-layout>
@endsection