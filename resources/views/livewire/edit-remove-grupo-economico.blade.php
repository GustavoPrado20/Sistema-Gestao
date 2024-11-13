<section class="container-edit">
    @if ($loginAuth)
        <button class="btn-remove-edit" wire:click ="openEditGrupoEconomico"><ion-icon name="create"></ion-icon></button>
        <button class="btn-remove-edit" wire:click = "openRemoveGrupoEconomico"><ion-icon name="remove-circle"></ion-icon></button>
    @endif


    @if ($showModalEditGrupoEconomico)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Grupo Econômico</h2>
                    <button wire:click="closeEditGrupoEconomico">&times;</button>
                </header>
                

                <form wire:submit.prevent="update" method="GET">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" wire:model.defer="nome" name ="nome" placeholder="Ex. Grupo Economico X" value="{{ $data_grupo_economico['nome'] }}" autocomplete="off">
                    @error('nome')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

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
                    <button wire:click="delete" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>