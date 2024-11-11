<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddColaborador"><ion-icon name="person-add"></ion-icon> Adicionar</button>
    
    @if($showModalAddColaborador)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeAddColaborador">&times;</button>
                </header>
                

                <form action="" method="POST">
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

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>