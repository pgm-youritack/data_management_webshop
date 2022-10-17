<header class="header">
    <img  class="logo" src="" alt="logo">
    <ul class="navigation">
        <li class="{{Request::is('/')?'active':'';}} navigation__item">
            <a href="{{url('/')}}">Home</a>
        </li>
        <li class="{{Request::is('manga')?'active':'';}} navigation__item">
            <a href="{{url('manga')}}">manga's</a>
        </li>
        <li class="{{Request::is('lightnovel')?'active':'';}} navigation__item">
            <a href="{{url('lightnovel')}}">light novels</a>
        </li>

        @guest
        @if (Route::has('login'))
            <li class="navigation__item {{Request::is('login')?'active':'';}}">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="navigation__item {{Request::is('register')?'active':'';}}">
                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="navigation__item ">
            <a  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        @if(Auth::user()->isadmin)
        <li class="navigation__item">
            <a href="{{url('dashboard/products')}}">dashboard</a>
        </li>
        @endif
    @endguest

    </ul>
</header>