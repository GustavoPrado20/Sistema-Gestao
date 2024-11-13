<section>
    <a wire:click = "openModalLogin">
        <span class="icon"><ion-icon name="enter-outline"></ion-icon></span>
        <span class="list">Entrar</span>
    </a>
    
    @if($showModalLogin)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeModalLogin">&times;</button>
                </header>
                

                <form wire:submit.prevent="login" method="POST">
                    @csrf
                    <label for="email">Email:</label>
                    <input type="email" id="email" wire:model.defer="email" name ="email" placeholder="Ex. google@gmail.com" autocomplete="on" >
                    @error('email')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="password">Senha: </label>
                    <input type="password" id="password" wire:model.defer="password" name ="password" placeholder="Senha" autocomplete="off">
                    @error('password')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <input type="submit" name="entrar" value="ENTRAR">
                </form>
                <input type="submit" wire:click ="openModalRegistro" name="registrar" value="REGISTRAR">
            </section>
        </section>
    @endif

    @if($showModalRegistro)
        <section class="modal-fade">
            <section class="modal-add-membro modal">
                <header class="header-modal">
                    <h2>Adicionar Bandeira</h2>
                    <button wire:click="closeModalRegistro">&times;</button>
                </header>
                

                <form wire:submit.prevent="registrar" method="POST">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" wire:model.defer="nome" name ="nome" placeholder="Ex. Joao Paulo" autocomplete="on" >
                    @error('nome')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="email">Email:</label>
                    <input type="email" id="email" wire:model.defer="email" name ="email" placeholder="Ex. google@gmail.com" autocomplete="on" >
                    @error('email')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <label for="password">Senha: </label>
                    <input type="password" id="password" wire:model.defer="password" name ="password" placeholder="Senha" autocomplete="off">
                    @error('password')
                        <p style="color: #cf0303">{{ $message }}</p>
                    @enderror

                    <input type="submit" name="registrar" value="REGISTRAR">
                </form>
            </section>
        </section>
    @endif
</section>