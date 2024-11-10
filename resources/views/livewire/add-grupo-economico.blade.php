<section class="btn-header">
    <button class="btn btn-animation" wire:click = "openAddGrupoEconomico"><ion-icon name="business"></ion-icon> Adicionar</button>
    
    @if($showModalAddGrupoEconomico)
    <section class="modal-fade">
        <section class="modal-add-membro modal">
            <header class="header-modal">
                <h2>Registro Membro</h2>
                <button wire:click="closeAddGrupoEconomico">&times;</button>
            </header>
            

            <form action="" method="POST">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name ="nome" placeholder="Ex. Eduardo da Silva" autocomplete="off" required>

                <label for="apelido">Apelido:</label>
                <input type="text" id="apelido" name ="apelido" placeholder="Ex. Buiu" autocomplete="off">

                <label for="ocupacao">Ocupação:</label>
                <select name="ocupação" id="ocupacao" required>
                    <option value="Jogador">Jogador</option>
                    <option value="Sócio">Sócio</option>
                    <option value="Diretor e Jogador">Diretor e Jogador</option>
                </select>

                <section class="checkbox-container">
                    <label for="acordo">
                        <input type="checkbox" id="acordo" value="{{ true }}" name="acordo">
                        Acordo
                    </label>
                </section>

                <input type="submit" name="registrar" value="REGISTRAR">
            </form>
        </section>
    </section>
    @endif
</section>

