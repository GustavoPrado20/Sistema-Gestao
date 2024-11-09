@extends('layouts.esqueleto')

@section('styles')
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
      <section class="card">
        <section class="titulo-card">
          <h3>Grupos Economicos</h3>
          <span><ion-icon name="layers"></ion-icon></span>
        </section>

        <section class="dados-card">
          <p>375</p>
        </section>
      </section>

        <section class="card">
          <section class="titulo-card">
            <h3>Bandeiras</h3>
            <span><ion-icon name="flag"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>375</p>
          </section>
        </section>

        <section class="card">
          <section class="titulo-card">
            <h3>Unidades</h3>
            <span><ion-icon name="business"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>375</p>
          </section>
        </section>

        <section class="card">
          <section class="titulo-card">
            <h3>Colaboradores</h3>
            <span><ion-icon name="people"></ion-icon></span>
          </section>

          <section class="dados-card">
            <p>375</p>
          </section>
        </section>
      </section>

      <section class="container-graficos">
          <section class="grid-grafico">
            <canvas id="teste"></canvas>

            <script>
              const ctx = document.getElementById('teste');
            
              new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Black'],
                  datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 50, 2, 3, 10],
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

        <section class="grid-opcao">
          <section class="titulo-grafico">
            <h2>Gráficos e Estatísticas</h2>
          </section>

          <section class="dados-grafico">
            <button>Grupos Econômicos X Colaboradores</button>
            <button>Bandeiras X Unidades</button>
            <button>Grupos Econômicos X Bandeiras</button>
            <button>Bandeiras X Colaboradores</button>
            <button>Grupos Econômicos X Unidades</button>
            <button>Unidades X Colaboradores</button>
          </section>
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