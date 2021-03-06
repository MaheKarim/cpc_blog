<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="{{ route('user.list') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    User Data
                </a>
                <a class="nav-link collapsed" href="{{ route('post.index') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Post
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
           {{ Auth::user()->email }}
        </div>
    </nav>
</div>
