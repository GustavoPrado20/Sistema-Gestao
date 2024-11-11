<nav class="menu-lateral" id="nav">
    <button id="btn-nav" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburguer"></span>
    </button>

    <ul id="menu" rule = "Menu">
        <li class="list active" id="btn-menu-1">
            <a href="{{ route('index') }}">
                <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></span>
                <span class="list">Dashboard</span>
            </a>
        </li>

        <li class="list" id="btn-menu-2">
            <a href="{{ route('gruposEconomicos') }}">
                <span class="icon"><ion-icon name="layers-outline"></ion-icon></span>
                <span class="list">Grupos Economicos</span>
            </a>
        </li>

        <li class="list" id="btn-menu-3">
            <a href="{{ route('bandeiras') }}">
                <span class="icon"><ion-icon name="flag-outline"></ion-icon></span>
                <span class="list">Bandeiras</span>
            </a>
        </li>

        <li class="list" id="btn-menu-4">
            <a href="{{ route('unidades') }}">
                <span class="icon"><ion-icon name="business-outline"></ion-icon></span> 
                <span class="list">Unidades</span>
            </a>
        </li>

        <li class="list" id="btn-menu-5">
            <a href="{{ route('colaboradores') }}">
                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                <span class="list">Colaboradores</span>
            </a>
        </li>

        <li class="list" id="btn-menu-6">
            <a href="#">
                <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon></span>
                <span class="list">Logs</span>
            </a>
        </li>

        <li class="list" id="btn-menu-7">
            <a href="#">
                <span class="icon"><ion-icon name="enter-outline"></ion-icon></span>
                <span class="list">Entrar</span>
            </a>
        </li>
    </ul>
</nav>