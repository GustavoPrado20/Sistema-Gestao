<section class="container-grupos">
    <section class="table-head">
        <h3>Nome Fantasia</h3>
        <h3>Razão Social</h3>
        <h3>CNPJ</h3>
        <h3>Bandeira</h3>
        <h3>Colaboradores</h3>
        <form action="">
            <ion-icon name="search"></ion-icon>
            <input type="text" placeholder="Procurar">
        </form>
    </section>

    @if (!empty($dataUnidades))
        @foreach ($dataUnidades as $dataUnidade)
            <section class="table-body">
                <p>{{ $dataUnidade['nomeFantasia'] }}</p>
                <p>{{ $dataUnidade['razaoSocial'] }}</p>
                <p>{{ $dataUnidade['cnpj'] }}</p>
                <p>{{ $dataUnidade['bandeira'] }}</p>
                <p>{{ $dataUnidade['colaboradores'] }}</p>
                <section class="container-end">   
                    @livewire('EditRemoveUnidade', ['bandeiras' => $bandeiras, 'id_unidade' => $dataUnidade['id']])
                </section>
            </section> 
        @endforeach
    @endif
        
    <section class="paginacao-link">
        {{ $dataUnidades->links() }}
    </section>
</section>