<nav class="side-menu-area style-two">
    <nav class="sidebar-nav" data-simplebar>
        <ul id="sidebar-menu" class="sidebar-menu">
            <li class="{{ Route::currentRouteName()== 'dashboard' ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/element.svg" alt="element">
                    </div>
                    <span class="menu-title">Dashboards</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName()== 'welcome' ? 'mm-active' : '' }}">
                <a href="{{ route('welcome') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/calendar.svg" alt="calendar">
                    </div>
                    <span class="menu-title">Site</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName()== 'dashboard.liste-users' ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard.liste-users') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/profile-2user.svg" alt="profile-2user">
                    </div>
                    <span class="menu-title">Utilisateurs</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName()== 'dashboard.liste-articles' ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard.liste-articles') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/profile-2user.svg" alt="profile-2user">
                    </div>
                    <span class="menu-title">Articles</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName()== 'dashboard.liste-agents' ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard.liste-agents') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/profile-2user.svg" alt="profile-2user">
                    </div>
                    <span class="menu-title">Agents</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName()== 'dashboard.liste-alerts' ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard.liste-alerts') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/profile-2user.svg" alt="profile-2user">
                    </div>
                    <span class="menu-title">alerts</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName()== 'dashboard.liste-product' ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard.liste-product') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="assets/dash/images/icon/profile-2user.svg" alt="profile-2user">
                    </div>
                    <span class="menu-title">Products</span>
                </a>
            </li>
        </ul>
    </nav>
</nav>
