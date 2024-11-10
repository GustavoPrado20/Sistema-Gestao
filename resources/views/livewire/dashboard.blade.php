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
        <button wire:click="GruposEconomicosXColaboradores" class="listG">Grupos Econômicos X Colaboradores</button>
        <button wire:click="BandeirasXUidades" class="listG">Bandeiras X Unidades</button>
        <button wire:click="GruposEconomicosXBandeiras" class="listG">Grupos Econômicos X Bandeiras</button>
        <button wire:click="BandeirasXColaboradores" class="listG">Bandeiras X Colaboradores</button>
        <button wire:click="GruposEconomicosXUnidades" class="listG">Grupos Econômicos X Unidades</button>
        <button wire:click="UnidadesXColaboradores" class="listG">Unidades X Colaboradores</button>
    </section>
  </section>

  <script>
    const listG = document.querySelectorAll('.listG');
    function activeLink(){
        listG.forEach((item) =>
        item.classList.remove('active'));
        this.classList.add('active');
    }

    listG.forEach((item) =>
    item.addEventListener('click', activeLink));
  </script>
</section>
