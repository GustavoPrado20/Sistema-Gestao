<section class="container-grupos">
    <section class="table-head">
        <h3>Nome</h3>
        <h3>Bandeiras</h3>
        <h3>Unidades</h3>
        <h3>Colaboradores</h3>
        <form action="">
            <ion-icon name="search"></ion-icon>
            <input type="text" wire:model.live ="search" placeholder="Procurar">
        </form>
    </section>

    @if (!empty($dataGruposEconomicos))
        @foreach ($dataGruposEconomicos as $dataGrupoEconomico)
            <section class="table-body">
                <p>{{ $dataGrupoEconomico['nome'] }}</p>
                <p>{{ $dataGrupoEconomico['bandeiras'] }}</p>
                <p>{{ $dataGrupoEconomico['unidades'] }}</p>
                <p>{{ $dataGrupoEconomico['colaboradores'] }}</p>
                <section class="container-end">   
                    @livewire('EditRemoveGrupoEconomico', ['id_grupo_economico' => $dataGrupoEconomico['id']])
                </section>
            </section>
        @endforeach
    @endif

    <section class="paginacao-link">
        {{ $dataGruposEconomicos->links() }}
    </section>
</section>
