@extends('layouts.esqueleto')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gruposEconomicos.css') }}">
@endsection

@section('conteudo')
    <main>
        <header>
            <section class="container-header">
                <section class="titulo">
                    <span><ion-icon name="layers"></ion-icon></span>
                    <h1>GRUPOS ECONÔMICOS</h1>
                </section>

                @livewire('AddGrupoEconomico')
            </section>
        </header>

        @livewire('GruposEconomicos')
    </main>
@endsection