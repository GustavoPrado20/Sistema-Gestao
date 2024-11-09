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
                <section class="titulo-card">
                    <h3>Grupos Economicos</h3>
                    <span><ion-icon name="layers"></ion-icon></span>
                </section>
                <section class="dados-card">
                    <p>375</p>
                </section>
            </section>

            <section class="card">
                
            </section>

            <section class="card">
                
            </section>

            <section class="card">
                
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
                          data: [12, 19, 3, 5, 2, 3, 10],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  </script>
            </section>

            <section class="grid-opcao">

            </section>
        </section>

        <section class="container-last-colaboradores">

        </section>
    </main>
@endsection

@section('scripts')

@endsection