 <!-- Scripts and BS CSS -->
 @vite(['resources/js/app.js'])
<nav>
    <div class="navigation d-flex justify-content-between">
        {{-- Logo --}}
        <a href="/"><img src="{{ asset('images/ps_logo.png') }}" width="150px" alt="ps_logo"></a>

        {{-- Menu Links Default --}}
        <ul class="menu-links list-unstyled d-flex m-4">
            <li class="mx-3"><a class="text-decoration-none" href="/">Home</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/hardware">Hardware</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/history">History</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/contact">Contact</a></li>
        </ul>

        <div class="login-links m-4">
            {{-- Login and Registration --}}
            @if (Route::has('login'))
                @auth
                    <!-- Right Side Of Navbar (Logged User) -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="text-light">{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @else
                    <a href="{{ route('login') }}" class="text-decoration-none mx-2"><button class="btn-login">Log in</button></a>
        
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-decoration-none"><button class="btn-register">Register</button></a>
                @endif
                @endauth
            @endif
        </div>

            {{-- Hamburger Menu --}}
            <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                {{-- Mobile Links --}}
                {{-- Menu Links --}}
                <ul class="mobile-menu menu-links">
                    <li class="mx-3"><a class="text-decoration-none" href="/">Home</a></li>
                    <li class="mx-3"><a class="text-decoration-none" href="/hardware">Hardware</a></li>
                    <li class="mx-3"><a class="text-decoration-none" href="/history">History</a></li>
                    <li class="mx-3"><a class="text-decoration-none" href="/contact">Contact</a></li>
                </ul>
            </div>

    </div>
</nav>

{{-- JS --}}
<script src="{{ asset('js/index.js') }}"></script>