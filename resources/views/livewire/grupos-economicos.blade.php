<section class="container-grupos">
    <section class="table-head">
        <h3>Nome</h3>
        <h3>Bandeiras</h3>
        <h3>Unidades</h3>
        <h3>Colaboradores</h3>
        <form action="">
            <ion-icon name="search"></ion-icon>
            <input type="text" placeholder="Procurar">
        </form>
    </section>

    <section class="table-body">
        <p>Grupo Economico 1</p>
        <p>5000</p>
        <p>8000</p>
        <p>10000</p>
        <section class="container-end">   
            <section class="container-edit">
                <button class="btn-remove-edit" wire:click ="openEditGrupoEconomico"><ion-icon name="create"></ion-icon></button>
                <button class="btn-remove-edit" wire:click = "openRemoveGrupoEconomico"><ion-icon name="remove-circle"></ion-icon></button>
            </section>
        </section>
    </section>

    @if ($showModalEditGrupoEconomico)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Grupo Econômico</h2>
                    <button wire:click="closeEditGrupoEconomico">&times;</button>
                </header>
                

                <form action="#" method="GET">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name ="nome" placeholder="Ex. Grupo Economico X" autocomplete="off" required>

                    <input type="submit" name="editar" value="EDITAR">
                </form>
            </section>
        </section>
    @endif

    @if ($showModalRemoveGrupoEconomico)
        <section class="modal-fade">
            <section class="modal-remover-membro modal">
                <header class="header-modal header-modal-remover">
                    <h2>Remover Grupo Econômico</h2>
                </header>
                
                <section class="container-1-modal-remover">
                    <p>Tem certeza que deseja remover este Grupo Econômico??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveGrupoEconomico" class="btn-1">CANCELAR</button>
                    <button wire:click="removeGrupoEconomico" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>
