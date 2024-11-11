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

    <section class="table-body">
        <p>Unidade 1</p>
        <p>Boa Unidade Amem</p>
        <p>356.475.148.39</p>
        <p>Bandeira X</p>
        <p>10000</p>
        <section class="container-end">   
            <section class="container-edit">
                <button class="btn-remove-edit" wire:click ="openEditUnidade"><ion-icon name="create"></ion-icon></button>
                <button class="btn-remove-edit" wire:click = "openRemoveUnidade"><ion-icon name="remove-circle"></ion-icon></button>
            </section>
        </section>
    </section>

    @if ($showModalEditUnidade)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Bandeira</h2>
                    <button wire:click="closeEditUnidade">&times;</button>
                </header>
                

                <form action="#" method="GET">
                    @csrf
                    <label for="nomeFantasia">Nome Fantasia:</label>
                    <input type="text" id="nomeFantasia" name ="nomeFantasia" placeholder="Ex. Unidade X" autocomplete="off" required>

                    <label for="razaoSocial">Razão Social:</label>
                    <input type="text" id="razaoSocial" name ="razaoSocial" placeholder="Ex. Razão Social" autocomplete="off" required>

                    <label for="cnpj">CNPJ:</label>
                    <input type="number" id="cnpj" name="cnpj" placeholder="Ex. 12340197000197" autocomplete="off" required>

                    <label for="bandeira">Bandeira:</label>
                    <select name="bandeira" id="bandeira">
                        <option value="">Bandeira</option>
                    </select>

                    <input type="submit" name="editar" value="EDITAR">
                </form>
            </section>
        </section>
    @endif

    @if ($showModalRemoveUnidade)
        <section class="modal-fade">
            <section class="modal-remover-membro modal">
                <header class="header-modal header-modal-remover">
                    <h2>Remover Bandeira</h2>
                </header>
                
                <section class="container-1-modal-remover">
                    <p>Tem certeza que deseja remover está Unidade??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveUnidade" class="btn-1">CANCELAR</button>
                    <button wire:click="removeGrupoUnidade" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>