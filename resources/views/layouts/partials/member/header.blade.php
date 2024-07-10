<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-dark" id="ftco-navbar">
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
                <li class="nav-item "><a href="/"
                        class="nav-link mr-2 {{ Request::is('/') ? 'text-primary' : 'text-dark' }}">Beranda</a>
                </li>
                <li class="nav-item"><a href="/mobil"
                        class="nav-link mr-2 {{ Request::is('mobil') ? 'text-primary' : 'text-dark' }}">Mobil</a>
                </li>
                <li class="nav-item"><a href="/tentang-kami"
                        class="nav-link mr-2 {{ Request::is('tentang-kami') ? 'text-primary' : 'text-dark' }}">Tentang
                        Kami</a></li>
                @guest
                    <li class="nav-item"><a href="/register" class="btn btn-outline-primary ml-3 mt-1 mr-3">Register</a>
                    </li>
                    <li class="nav-item"><a href="/login" class="btn btn-primary mt-1">Login</a></li>
                @else
                    <li class="nav-item"><a href="/member/profil"
                            class="nav-link mr-2 {{ Request::is('member/profil') ? 'text-primary' : 'text-dark' }}">{{ Auth::user()->name }}
                            <i class="fa fa-user ml-2"></i></a></li>
                    <li class="nav-item"><a href="" class="btn btn-outline-primary ml-2 mt-1"
                            href="{{ route('logout') }}"
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
