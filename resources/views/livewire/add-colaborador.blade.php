<section class="btn-header">
    @if ($loginAuth)
    <button class="btn btn-animation" wire:click = "openAddColaborador"><ion-icon name="person-add"></ion-icon> Adicionar</button>
    @endif
    
    @if($showModalAddColaborador)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeAddColaborador">&times;</button>
                </header>
                

                <form wire:submit.prevent="store" method="GET">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" wire:model.defer="nome" name ="nome" placeholder="Ex. Colaborador X" autocomplete="off" >
                    @error('nome')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="email">Email:</label>
                    <input type="email" id="email" wire:model.defer="email" name ="email" placeholder="Ex. google@gmail.com" autocomplete="off">
                    @error('email')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="cpf">CPF:</label>
                    <input type="number" id="cpf" wire:model.defer="cpf" name="cpf" placeholder="Ex. 50211515841" autocomplete="off">
                    @error('cpf')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="idUnidade">Unidade:</label>
                    <select name="idUnidade" wire:model.defer="idUnidade" id="idUnidade">
                        <option value=""></option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade['id'] }}">{{ $unidade['nome_fantasia'] }}</option>
                        @endforeach
                    </select>
                    @error('idUnidade')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <input type="submit" name="adicionar" value="ADICIONAR">
                </form>
            </section>
        </section>
    @endif
</section>