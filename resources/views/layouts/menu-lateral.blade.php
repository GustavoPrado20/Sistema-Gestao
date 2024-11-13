<nav class="menu-lateral" id="nav">
    <button id="btn-nav" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburguer"></span>
    </button>

    <ul id="menu" rule = "Menu">
        <li class="list @if($active_menu == "DB") active @endif" id="btn-menu-1">
            <a href="{{ route('index') }}">
                <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></span>
                <span class="list">Dashboard</span>
            </a>
        </li>

        <li class="list @if($active_menu == "GE") active @endif" id="btn-menu-2">
            <a href="{{ route('gruposEconomicos') }}">
                <span class="icon"><ion-icon name="layers-outline"></ion-icon></span>
                <span class="list">Grupos Economicos</span>
            </a>
        </li>

        <li class="list @if($active_menu == "BA") active @endif" id="btn-menu-3">
            <a href="{{ route('bandeiras') }}">
                <span class="icon"><ion-icon name="flag-outline"></ion-icon></span>
                <span class="list">Bandeiras</span>
            </a>
        </li>

        <li class="list @if($active_menu == "UN") active @endif" id="btn-menu-4">
            <a href="{{ route('unidades') }}">
                <span class="icon"><ion-icon name="business-outline"></ion-icon></span> 
                <span class="list">Unidades</span>
            </a>
        </li>

        <li class="list @if($active_menu == "CO") active @endif" id="btn-menu-5">
            <a href="{{ route('colaboradores') }}">
                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                <span class="list">Colaboradores</span>
            </a>
        </li>

        @if ($loginAuth)
            <li class="list" id="btn-menu-6">
                <a href="#">
                    <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon></span>
                    <span class="list">Logs</span>
                </a>
            </li>
        @endif

        @if (!$loginAuth)
            <li class="list" id="btn-menu-7">
                @livewire('Login')
            </li>
        @endif

        @if ($loginAuth)
            <li class="list" id="btn-menu-7">
                <a href="{{ route('sair') }}">
                    <span class="icon"><ion-icon name="exit"></ion-icon></span>
                    <span class="list">Sair</span>
                </a>
            </li>
        @endif
    </ul>
</nav>