<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/icon-moobil-erase.png') }}" style="width: 60px;"
                alt="">
            Rent <span>Moobil</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="/"
                        class="nav-link">Beranda</a></li>
                <li class="nav-item {{ Request::is('mobil') ? 'active' : '' }}"><a href="/mobil"
                        class="nav-link">Mobil</a></li>
                <li class="nav-item {{ Request::is('tentang-kami') ? 'active' : '' }}"><a href="/tentang-kami"
                        class="nav-link">Tentang Kami</a></li>
                @guest
                    <li class="nav-item"><a href="/register" class="btn btn-outline-primary mt-2 mr-3">Register</a></li>
                    <li class="nav-item"><a href="/login" class="btn btn-primary mt-2">Login</a></li>
                @else
                    <li class="nav-item"><a href="/member/profil" class="nav-link">{{ Auth::user()->name }} <i
                                class="fa fa-user ml-2"></i></a></li>
                    <li class="nav-item"><a href="" class="btn btn-light mt-2" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
