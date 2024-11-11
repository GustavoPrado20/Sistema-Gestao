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

    <section class="table-body">
        <p>Bandeira 1</p>
        <p>Grupo Econômico 1</p>
        <p>8000</p>
        <p>10000</p>
        <section class="container-end">   
            <section class="container-edit">
                <button class="btn-remove-edit" wire:click ="openEditBandeira"><ion-icon name="create"></ion-icon></button>
                <button class="btn-remove-edit" wire:click = "openRemoveBandeira"><ion-icon name="remove-circle"></ion-icon></button>
            </section>
        </section>
    </section>

    @if ($showModalEditBandeira)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Bandeira</h2>
                    <button wire:click="closeEditBandeira">&times;</button>
                </header>
                

                <form action="#" method="GET">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name ="nome" placeholder="Ex. Bandeira X" autocomplete="off" required>

                    <label for="grupoEconomico">Grupo Econômico:</label>
                    <select name="grupoEconomico" id="grupoEconomico">
                        <option value="">Grupo Econômico</option>
                    </select>

                    <input type="submit" name="editar" value="EDITAR">
                </form>
            </section>
        </section>
    @endif

    @if ($showModalRemoveBandeira)
        <section class="modal-fade">
            <section class="modal-remover-membro modal">
                <header class="header-modal header-modal-remover">
                    <h2>Remover Bandeira</h2>
                </header>
                
                <section class="container-1-modal-remover">
                    <p>Tem certeza que deseja remover este Grupo Econômico??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveBandeira" class="btn-1">CANCELAR</button>
                    <button wire:click="removeGrupoBandeira" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>