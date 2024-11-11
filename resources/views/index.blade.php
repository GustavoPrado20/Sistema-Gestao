@extends('layouts.esqueleto')

@section('stylesAndScripts')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.6/dist/chart.umd.min.js"></script>
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
      <a href="#" class="card">
        <section class="titulo-card">
          <h3>Grupos Economicos</h3>
          <span><ion-icon name="layers"></ion-icon></span>
        </section>

        <section class="dados-card">
          <p>375</p>
        </section>
      </a>

        <a href="#" class="card">
          <section class="titulo-card">
            <h3>Bandeiras</h3>
            <span><ion-icon name="flag"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>375</p>
          </section>
        </a>

        <a href="#" class="card">
          <section class="titulo-card">
            <h3>Unidades</h3>
            <span><ion-icon name="business"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>375</p>
          </section>
        </a>

        <a href="#" class="card">
          <section class="titulo-card">
            <h3>Colaboradores</h3>
            <span><ion-icon name="people"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>375</p>
          </section>
        </a>
      </section>

      @livewire('Dashboard')

    <section class="container-last-colaboradores">
      <header>
          <h2>Últimos Colaboradores Adicionados</h2>
      </header>

      <section class="table">
        <section class="table-head">
          <h4>Nome</h4>
          <h4>Email</h4>
          <h4>Unidade</h4>
          <h4>Data Adição</h4>
        </section>

        <section class="grid-colaborador">
          <p>Gustavo Prado</p>
          <p>gustavo.henrique.igt@gmail.com</p>
          <p>Unidade X</p>
          <p>20/08/2003</p>
        </section>
      </section>
    </section>
  </main>
@endsection

@section('scripts')

@endsection