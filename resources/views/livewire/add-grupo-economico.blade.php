<section class="btn-header">
    @if ($loginAuth)
        <button class="btn btn-animation" wire:click = "openAddGrupoEconomico"><ion-icon name="layers"></ion-icon> Adicionar</button>
    @endif
    
    @if($showModalAddGrupoEconomico)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Grupo Econômico</h2>
                    <button wire:click="closeAddGrupoEconomico">&times;</button>
                </header>
                

                <form wire:submit.prevent="store" method="POST">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" wire:model.defer="nome" id="nome" name ="nome" placeholder="Ex. Grupo Economico X" autocomplete="off">
                    @error('nome')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>

