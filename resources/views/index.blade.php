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

      <section class="btn-header">
        @if ($loginAuth)
          <button class="btn btn-animation"><ion-icon name="cloud-upload"></ion-icon> Gerar PDF</button>
        @endif
      </section>
    </header>

    <section class="container-card">
      <a href="#" class="card">
        <section class="titulo-card">
          <h3>Grupos Economicos</h3>
          <span><ion-icon name="layers"></ion-icon></span>
        </section>

        <section class="dados-card">
          <p>{{ $totalGruposEconomicos }}</p>
        </section>
      </a>

        <a href="#" class="card">
          <section class="titulo-card">
            <h3>Bandeiras</h3>
            <span><ion-icon name="flag"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>{{ $totalBandeiras }}</p>
          </section>
        </a>

        <a href="#" class="card">
          <section class="titulo-card">
            <h3>Unidades</h3>
            <span><ion-icon name="business"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>{{ $totalUnidades }}</p>
          </section>
        </a>

        <a href="#" class="card">
          <section class="titulo-card">
            <h3>Colaboradores</h3>
            <span><ion-icon name="people"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>{{ $totalColaboradores }}</p>
          </section>
        </a>
      </section>

      <section class="container-graficos">
        <section class="grid-grafico">
          <canvas id="GruposEconomicosXColaboradores"></canvas>

          <script>
            const ctx = document.getElementById('GruposEconomicosXColaboradores');
        
            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: [
                  @foreach($colaboradoresPorGrupo as $colaboradorGrupo)
                    "{{ $colaboradorGrupo['nome'] }}",
                  @endforeach
                ],
                datasets: [{
                  label: 'Colaboradores',
                  data: [
                    @foreach($colaboradoresPorGrupo as $colaboradorGrupo)
                      {{ $colaboradorGrupo['colaboradores'] }},
                    @endforeach
                  ],
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                  ],
                  borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                  ],
                  borderWidth: 1
                }],
                
              },
              options: {
                plugins: {
                  title: {
                    display: true, 
                    text: 'Grupos Econômicos X Colaboradores',
                    font: {
                      size: 24
                    },
                    color: '#000'
                  }
                },
                scales: {
                  y: {
                    beginAtZero: true
                  }
                },
              }
            });
          </script>
        </section>
    </section>

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

        @foreach ($ultimosColaboradores as $ultimoColaborador)
          <section class="grid-colaborador">
            <p>{{ $ultimoColaborador['nome'] }}</p>
            <p>{{ $ultimoColaborador['email'] }}</p>
            <p>{{ $ultimoColaborador->unidade->nome_fantasia }}</p>
            <p>{{ $ultimoColaborador['created_at'] }}</p>
          </section>
        @endforeach
        
      </section>
    </section>
  </main>
@endsection

@section('scripts')

@endsection