<section class="container-grupos">
    <section class="table-head">
        <h3>Nome</h3>
        <h3>Grupo Econômico</h3>
        <h3>Unidades</h3>
        <h3>Colaboradores</h3>
        <form action="">
            <ion-icon name="search"></ion-icon>
            <input type="text" placeholder="Procurar">
        </form>
    </section>

    @if (!empty($dataBandeiras))
        @foreach ($dataBandeiras as $dataBandeira)
            <section class="table-body">
                <p>{{ $dataBandeira['nome'] }}</p>
                <p>{{ $dataBandeira['grupoEconomico'] }}</p>
                <p>{{ $dataBandeira['unidades'] }}</p>
                <p>{{ $dataBandeira['colaboradores'] }}</p>
                <section class="container-end">   
                    @livewire('EditRemoveBandeira', ['id_bandeira' => $dataBandeira['id'], 'gruposEconomicos' => $gruposEconomicos])
                </section>
            </section>
        @endforeach
    @endif

    <section class="paginacao-link">
        {{ $dataBandeiras->links() }}
    </section>
</section>