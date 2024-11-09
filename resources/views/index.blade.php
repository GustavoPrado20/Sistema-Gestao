@extends('layouts.esqueleto')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('conteudo')
    <!-- Conteúdo do dashboard aqui -->
    <main>
        <header>
            <section class="titulo">
                <span><ion-icon name="stats-chart"></ion-icon></span>
                <h1>DASHBOARD</h1>
            </section>
        </header>

        <section class="container-card">
            <section class="card">

            </section>

            <section class="card">
                
            </section>

            <section class="card">
                
            </section>

            <section class="card">
                
            </section>
        </section>

        <section class="container-graficos">
            
        </section>

        <section class="container-last-colaboradores">

        </section>
    </main>
@endsection

@section('scripts')

@endsection