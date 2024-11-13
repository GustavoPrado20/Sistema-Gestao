@extends('layouts.esqueleto')

@section('stylesAndScripts')
    <link rel="stylesheet" href="{{ asset('css/colaboradores.css') }}">
@endsection

@section('conteudo')
    <main>
        <header>
            <section class="container-header">
                <section class="titulo">
                    <span><ion-icon name="people"></ion-icon></span>
                    <h1>COLABORADORES</h1>
                </section>

                @livewire('AddColaborador', ['unidades' => $unidades, 'loginAuth' => $loginAuth])
            </section>
        </header>

        @livewire('Colaboradores', ['unidades' => $unidades, 'loginAuth' => $loginAuth])
    </main>
@endsection