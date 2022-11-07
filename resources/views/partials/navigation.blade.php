<nav class="navbar navbar-expand-md navbar-light shadow-sm p-4 navigation">
    <div class="container-fluid">
        {{-- Logo --}}
        <a href="/"><img src="{{ asset('images/ps_logo.png') }}" width="150px" alt="ps_logo"></a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse menu-links" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="mx-3"><a class="text-decoration-none" href="/">Home</a></li>
                <li class="mx-3"><a class="text-decoration-none" href="/hardware">Hardware</a></li>
                <li class="mx-3"><a class="text-decoration-none" href="/history">History</a></li>
                <li class="mx-3"><a class="text-decoration-none" href="/news">News</a></li>
                <li class="mx-3"><a class="text-decoration-none" href="/contact">Contact</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto login-links m-4">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            {{-- <a class="nav-link btn-login" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            <a href="{{ route('login') }}" class="text-decoration-none mx-2"><button class="btn-login">Log in</button></a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link btn-register" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                            <a href="{{ route('register') }}" class="text-decoration-none"><button class="btn-register">Register</button></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>