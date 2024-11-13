<section class="container-edit">
    @if ($loginAuth)
        <button class="btn-remove-edit" wire:click ="openEditUnidade"><ion-icon name="create"></ion-icon></button>
        <button class="btn-remove-edit" wire:click = "openRemoveUnidade"><ion-icon name="remove-circle"></ion-icon></button>
    @endif
    
    @if ($showModalEditUnidade)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Bandeira</h2>
                    <button wire:click="closeEditUnidade">&times;</button>
                </header>
                

                <form wire:submit.prevent="update" method="GET">
                    @csrf
                    <label for="nomeFantasia">Nome Fantasia:</label>
                    <input type="text" id="nomeFantasia" wire:model.defer="nomeFantasia" name ="nomeFantasia" placeholder="Ex. Unidade X" autocomplete="off" required>
                    @error('nomeFantasia')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="razaoSocial">Razão Social:</label>
                    <input type="text" id="razaoSocial"  wire:model.defer="razaoSocial" name ="razaoSocial" placeholder="Ex. Razão Social" autocomplete="off" required>
                    @error('razaoSocial')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="cnpj">CNPJ:</label>
                    <input type="number" id="cnpj" wire:model.defer="cnpj" name="cnpj" placeholder="Ex. 12340197000197" autocomplete="off" required>
                    @error('cnpj')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="idBandeira">Bandeira:</label>
                    <select name="idBandeira" wire:model.defer="idBandeira" id="idBandeira">
                        <option value=""></option>
                        @foreach ($bandeiras as $bandeira)
                            <option value="{{ $bandeira['id'] }}">{{ $bandeira['nome'] }}</option>    
                        @endforeach
                    </select>
                    @error('idBandeira')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <input type="submit" name="editar" value="EDITAR">
                </form>
            </section>
        </section>
    @endif

    @if ($showModalRemoveUnidade)
        <section class="modal-fade">
            <section class="modal-remover-membro modal">
                <header class="header-modal header-modal-remover">
                    <h2>Remover Unidade</h2>
                </header>
                
                <section class="container-1-modal-remover">
                    <p>Tem certeza que deseja remover está Unidade??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveUnidade" class="btn-1">CANCELAR</button>
                    <button wire:click="delete" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>
