<section class="container-edit">
    <button class="btn-remove-edit" wire:click ="openEditBandeira"><ion-icon name="create"></ion-icon></button>
    <button class="btn-remove-edit" wire:click = "openRemoveBandeira"><ion-icon name="remove-circle"></ion-icon></button>

    @if ($showModalEditBandeira)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Bandeira</h2>
                    <button wire:click="closeEditBandeira">&times;</button>
                </header>
                

                <form wire:submit.prevent ="update" method="GET">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" wire:model.defer="nome" name ="nome" placeholder="Ex. Bandeira X" value="{{ $nome }}" autocomplete="off">
                    @error('nome')
                    <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="idGrupoEconomico">Grupo Econômico:</label>
                    <select name="idGrupoEconomico" wire:model.defer = "idGrupoEconomico" id="idGrupoEconomico">
                        <option value=""></option>
                        @foreach ($gruposEconomicos as $grupoEconomico)
                            <option value="{{ intval($grupoEconomico['id']) }}">{{ $grupoEconomico['nome'] }}</option>
                        @endforeach
                    </select>
                    @error('idGrupoEconomico')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

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
                    <p>Tem certeza que deseja remover está Bandeira??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveBandeira" class="btn-1">CANCELAR</button>
                    <button wire:click="delete" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>
