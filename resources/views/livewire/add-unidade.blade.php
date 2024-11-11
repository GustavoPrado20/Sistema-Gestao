<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddUnidade"><ion-icon name="business"></ion-icon> Adicionar</button>
    
    @if($showModalAddUnidade)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeAddUnidade">&times;</button>
                </header>
                

                <form action="" method="POST">
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

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>
