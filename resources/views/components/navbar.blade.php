<div class="header" style="padding: 0px 15px">
    <div class="header-left">
        {{-- <div class="menu-icon bi bi-list"></div>
        <div class="search-toggle-icon bi bi-search"></div> --}}
        <div class="brand-logo">
            <a href="/">
                <img src=@if (Request::getHost() == 'erp.kalinggakelingjati.site') "/img/image 6 big.png"
                @else
                    "https://allureindustries.com/files/uploads/2016/03/600.png" @endif
                    style="height: 50%;" alt="" />
            </a>
        </div>
        @if (Request::getHost() == 'erp.kalinggakelingjati.site')
            <div class="login-menu">
                <ul>
                    <li><a href="/">Kalingga Keling Jati</a></li>
                </ul>
            </div>
        @endif
    </div>
    <div class="header-right">
        @role('Admin')
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-5">
                <li class="nav-item d-flex align-items-center h-100">
                    <a class="nav-link @if ($slot == 'Users') text-primary disabled @endif"
                        href="/users">Users</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-5">
                <li class="nav-item d-flex align-items-center h-100">
                    <a class="nav-link @if ($slot == 'Roles') text-primary disabled @endif"
                        href="/roles">Roles</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-5">
                <li class="nav-item d-flex align-items-center h-100">
                    <a class="nav-link @if ($slot == 'Permissions') text-primary disabled @endif"
                        href="/permissions">Permissions</a>
                </li>
            </ul>
        @endrole
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="/vendors/images/paper-map-cuate.svg" alt="" />
                    </span>
                    <span class="user-name">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i>Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
