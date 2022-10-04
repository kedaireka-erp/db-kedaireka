<!-- <div class="header" style="padding: 0px 15px">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="/vendors/images/paper-map-cuate.svg" alt="" />
                    </span>
                    <span class="user-name">{{auth()->user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    {{-- <a class="dropdown-item" href="{{ route('login') }}"><i class="dw dw-logout"></i>Log Out</a> --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="dw dw-logout"></i>Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<nav class="navbar navbar-light bg-light justify-content-between">
<a class="navbar-brand" href="/">
    <img src="https://allureindustries.com/files/uploads/2016/03/600.png" alt="">
  </a>
  <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="/vendors/images/paper-map-cuate.svg" alt="" />
                    </span>
                    <span class="user-name">{{auth()->user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    {{-- <a class="dropdown-item" href="{{ route('login') }}"><i class="dw dw-logout"></i>Log Out</a> --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="dw dw-logout"></i>Log Out</button>
                    </form>
                </div>
            </div>
        </div>
</nav>
