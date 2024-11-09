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

                <section class="btn-header">
                    <button class="btn btn-animation"><ion-icon name="business"></ion-icon> Adicionar</button>
                </section>
            </section>
        </header>

        <section class="container-grupos">
            <section class="table-head">
                <h3>Nome</h3>
                <h3>Bandeiras</h3>
                <h3>Unidades</h3>
                <h3>Colaboradores</h3>
                <form action="">
                    <ion-icon name="search"></ion-icon>
                    <input type="text" placeholder="Procurar">
                </form>
            </section>

            <section class="table-body">
                <p>Grupo Economico 1</p>
                <p>5000</p>
                <p>8000</p>
                <p>10000</p>
                <section class="container-end">   
                    <section class="container-edit">
                        <button class="btn-remove-edit" ><ion-icon name="create"></ion-icon></button>
                        <button class="btn-remove-edit"><ion-icon name="remove-circle"></ion-icon></button>
                    </section>

                    {{-- <section class="container-datas">
                        <p>Data Criação: 20/08/2003</p>
                        <p>Ultima Atualização: 20/08/2003</p>
                    </section> --}}
                </section>
            </section>

            <section class="table-body">
                
            </section>

            <section class="table-body">
                
            </section>

            <section class="table-body">
                
            </section>
            
        </section>
    </main>
@endsection