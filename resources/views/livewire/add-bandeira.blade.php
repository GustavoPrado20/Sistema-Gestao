<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddBandeira"><ion-icon name="flag"></ion-icon> Adicionar</button>
    
    @if($showModalAddBandeira)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeAddBandeira">&times;</button>
                </header>
                

                <form action="" method="POST">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name ="nome" placeholder="Ex. Bandeira X" autocomplete="off" required>

                    <label for="grupoEconomico">Grupo Econômico:</label>
                    <select name="grupoEconomico" id="grupoEconomico">
                        <option value="">Grupo Econômico</option>
                    </select>

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>