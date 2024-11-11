<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddGrupoEconomico"><ion-icon name="layers"></ion-icon> Adicionar</button>
    
    @if($showModalAddGrupoEconomico)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Grupo Econômico</h2>
                    <button wire:click="closeAddGrupoEconomico">&times;</button>
                </header>
                

                <form action="" method="POST">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name ="nome" placeholder="Ex. Grupo Economico X" autocomplete="off" required>

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>

