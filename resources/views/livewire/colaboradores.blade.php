<section class="container-grupos">
    <section class="table-head">
        <h3>Nome</h3>
        <h3>Email</h3>
        <h3>CPF</h3>
        <h3>Unidade</h3>
        <form action="">
            <ion-icon name="search"></ion-icon>
            <input type="text" placeholder="Procurar">
        </form>
    </section>

    <section class="table-body">
        <p>Gustavo Prado</p>
        <p>zane@gmail.com</p>
        <p>356.475.148.39</p>
        <p>Unidade X</p>
        <section class="container-end">   
            <section class="container-edit">
                <button class="btn-remove-edit" wire:click ="openEditColaborador"><ion-icon name="create"></ion-icon></button>
                <button class="btn-remove-edit" wire:click = "openRemoveColaborador"><ion-icon name="remove-circle"></ion-icon></button>
            </section>
        </section>
    </section>

    @if ($showModalEditColaborador)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Bandeira</h2>
                    <button wire:click="closeEditColaborador">&times;</button>
                </header>
                

                <form action="#" method="GET">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name ="nome" placeholder="Ex. Colaborador X" autocomplete="off" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name ="email" placeholder="Ex. google@gmail.com" autocomplete="off" required>

                    <label for="cpf">CPF:</label>
                    <input type="number" id="cpf" name="cpf" placeholder="Ex. 50211515841" autocomplete="off" maxlength="11" minlength="11" required>

                    <label for="unidade">Unidade:</label>
                    <select name="unidade" id="unidade">
                        <option value="">Unidade</option>
                    </select>

                    <input type="submit" name="editar" value="EDITAR">
                </form>
            </section>
        </section>
    @endif

    @if ($showModalRemoveColaborador)
        <section class="modal-fade">
            <section class="modal-remover-membro modal">
                <header class="header-modal header-modal-remover">
                    <h2>Remover Bandeira</h2>
                </header>
                
                <section class="container-1-modal-remover">
                    <p>Tem certeza que deseja remover este Colaborador??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveColaborador" class="btn-1">CANCELAR</button>
                    <button wire:click="removeGrupoUnidade" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>