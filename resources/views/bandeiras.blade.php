@extends('layouts.esqueleto')

@section('stylesAndScripts')
    <link rel="stylesheet" href="{{ asset('css/bandeiras.css') }}">
@endsection

@section('conteudo')
    <main>
        <header>
            <section class="container-header">
                <section class="titulo">
                    <span><ion-icon name="flag"></ion-icon></span>
                    <h1>BANDEIRAS</h1>
                </section>

                @livewire('AddBandeira')
            </section>
        </header>

        @livewire('Bandeiras')
    </main>
@endsection