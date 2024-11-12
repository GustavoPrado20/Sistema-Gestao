<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddUnidade"><ion-icon name="business"></ion-icon> Adicionar</button>
    
    @if($showModalAddUnidade)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeAddUnidade">&times;</button>
                </header>
                

                <form wire:submit.prevent="store" method="POST">
                    @csrf
                    <label for="nomeFantasia">Nome Fantasia:</label>
                    <input type="text" id="nomeFantasia" wire:model.defer="nomeFantasia" name ="nomeFantasia" placeholder="Ex. Unidade X" autocomplete="off">
                    @error('nomeFantasia')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="razaoSocial">Razão Social:</label>
                    <input type="text" id="razaoSocial"  wire:model.defer="razaoSocial" name ="razaoSocial" placeholder="Ex. Razão Social" autocomplete="off">
                    @error('razaoSocial')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="cnpj">CNPJ:</label>
                    <input type="number" id="cnpj" wire:model.defer="cnpj" name="cnpj" placeholder="Ex. 12340197000197" autocomplete="off">
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

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>
