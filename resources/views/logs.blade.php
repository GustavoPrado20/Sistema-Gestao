@extends('layouts.esqueleto')

@section('stylesAndScripts')
    <link rel="stylesheet" href="{{ asset('css/logs.css')}}">
@endsection

@section('conteudo')
    <main>
        <section class="container-last-colaboradores">
            <header>
                <h2>Últimos Colaboradores Adicionados</h2>
            </header>
      
            <section class="table">
                <section class="table-head">
                    <h4>ID</h4>
                    <h4>User</h4>
                    <h4>Ação</h4>
                    <h4>Entidade</h4>
                    <h4>ID Entidade</h4>
                    <h4>Alterações</h4>
                    <h4>Data</h4>
                </section>
      
                @foreach ($logs as $log)
                    <section class="grid-colaborador">
                        <p>{{ $log['id'] }}</p>
                        <p>{{ $log['user_id'] }}</p>
                        <p>{{ $log['acao'] }}</p>
                        <p>{{ $log['entidade_type'] }}</p>
                        <p>{{ $log['entidade_id'] }}</p>
                        <p>{{ json_encode($log['changes']) }}</p>
                        <p>{{ $log['created_at'] }}</p>
                @endforeach  
            </section>
        </section>

        <section class="paginacao-link">
            {{ $logs->links() }}
        </section>
    </main>
@endsection