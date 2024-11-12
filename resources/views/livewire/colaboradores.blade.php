<section class="container-grupos">
    <section class="table-head">
        <h3>Nome</h3>
        <h3>Email</h3>
        <h3>CPF</h3>
        <h3>Unidade</h3>
        <form action="">
            <ion-icon name="search"></ion-icon>
            <input type="text" wire:model.live="search" placeholder="Procurar">
        </form>
    </section>

    @if (!empty($dataColaboradores))
        @foreach ($dataColaboradores as $dataColaborador)
            <section class="table-body">
                <p>{{ $dataColaborador['nome'] }}</p>
                <p>{{ $dataColaborador['email'] }}</p>
                <p>{{ $dataColaborador['cpf'] }}</p>
                <p>{{ $dataColaborador['unidade'] }}</p>
                <section class="container-end">   
                    @livewire('EditRemoveColaborador', ['idColaborador' => $dataColaborador['id'], 'unidades' => $unidades])
                </section>
            </section>
        @endforeach
    @endif
</section>