<nav class="site-header navbar navbar-expand-lg navbar-dark" aria-label="Primary">
    <div class="container site-header__container d-flex flex-wrap align-items-center   border-secondary ">
        <a class="navbar-brand m-0 py-0" href="{{url('./')}}">
            <img src="{{ asset('assets/frontend/img/logo/logo.webp') }}" alt="{{ config('app.name', 'Kricketers Space') }}" class="logo-img" width="120" height="auto">
        </a>

        <button class="navbar-toggler border-0 shadow-none site-header__toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteHeaderNav" aria-controls="siteHeaderNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse site-header__collapse d-lg-flex flex-lg-grow-1 align-items-lg-center" id="siteHeaderNav">
            <ul class="navbar-nav site-header__links flex-grow-1 justify-content-center gap-lg-1 gap-2 mb-0 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link site-header__link @if(request()->routeIs('login')) active @endif" href="{{url('./')}}
                    
                    ">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link site-header__link" href="{{ url('/tournaments') }}">Tournaments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link site-header__link" href="{{ url('/matches') }}">Matches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link site-header__link" href="{{ url('/grounds') }}">Grounds</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link site-header__link" href="{{ url('/teams') }}">Teams</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link site-header__link dropdown-toggle d-inline-flex align-items-center gap-1" href="#" id="siteHeaderMore" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                        <i class="fa-solid fa-chevron-down site-header__chevron" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark site-header__dropdown" aria-labelledby="siteHeaderMore">
                        <li><a class="dropdown-item" href="{{ url('/leaderboard') }}">Leaderboard</a></li>
                        <li><a class="dropdown-item" href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </li>
            </ul>

            <div class="  d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0 pt-2 pt-lg-0 border-top border-secondary border-lg-0">
                <a href="{{ route('sign-in') }}" class="cta1 text-decoration-none d-inline-block text-center">Sign in</a>
            </div>
        </div>
    </div>
</nav>
