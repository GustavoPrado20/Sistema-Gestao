<section class="container-edit">
    @if ($loginAuth)
        <button class="btn-remove-edit" wire:click ="openEditColaborador"><ion-icon name="create"></ion-icon></button>
        <button class="btn-remove-edit" wire:click = "openRemoveColaborador"><ion-icon name="remove-circle"></ion-icon></button>
    @endif
    
    @if ($showModalEditColaborador)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Editar Bandeira</h2>
                    <button wire:click="closeEditColaborador">&times;</button>
                </header>
                

                <form wire:submit.prevent="update" method="GET">
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

                    <input type="submit" name="editar" value="EDITAR">
                </form>
            </section>
        </section>
    @endif

    @if ($showModalRemoveColaborador)
        <section class="modal-fade">
            <section class="modal-remover-membro modal">
                <header class="header-modal header-modal-remover">
                    <h2>Remover Colaborador</h2>
                    
                </header>
                
                <section class="container-1-modal-remover">
                    <p>Tem certeza que deseja remover este Colaborador??</p>
                </section>

                <section class="container-2-modal-remover">
                    <button wire:click="closeRemoveColaborador" class="btn-1">CANCELAR</button>
                    <button wire:click="delete" class="btn-2">CONFIRMAR</button>
                </section>
            </section>  
        </section>
    @endif
</section>
