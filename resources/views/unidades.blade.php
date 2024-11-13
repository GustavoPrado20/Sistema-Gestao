@extends('layouts.esqueleto')

@section('stylesAndScripts')
    <link rel="stylesheet" href="{{ asset('css/unidades.css') }}">
@endsection

@section('conteudo')
    <main>
        <header>
            <section class="container-header">
                <section class="titulo">
                    <span><ion-icon name="business"></ion-icon></span>
                    <h1>UNIDADES</h1>
                </section>

                @livewire('AddUnidade',  ['bandeiras' => $bandeiras, 'loginAuth' => $loginAuth])
            </section>
        </header>

        @livewire('Unidades', ['bandeiras' => $bandeiras, 'loginAuth' => $loginAuth])
    </main>
@endsection