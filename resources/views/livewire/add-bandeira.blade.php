<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddBandeira"><ion-icon name="flag"></ion-icon> Adicionar</button>
    
    @if($showModalAddBandeira)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeAddBandeira">&times;</button>
                </header>
                

                <form wire:submit.prevent="store" method="POST">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" wire:model.defer="nome" name ="nome" placeholder="Ex. Bandeira X" autocomplete="off">
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

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>