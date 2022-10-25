<nav class="navbar navbar-expand-md bg-light">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('storage/images/icons/name-logo.svg') }}" width="40" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ms-5  {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item ms-5 {{ Request::is('manga') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ url('manga') }}">manga</a>
                </li>
                <li class="nav-item ms-5 {{ Request::is('lightnovel') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ url('lightnovel') }}">lightnovel</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto"> @guest
                    @if (Route::has('login'))
                        <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}</a>
                            </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="Logout ">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="nav" aria-labelledby="navbarDropdown">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if (Auth::user()->isadmin)
                        <li class="navigation__item">
                            <a href="{{ url('dashboard/products') }}">dashboard</a>
                        </li>
                    @endif
                @endguest
            </ul>

        </div>
    </div>
</nav>
