 <!-- Scripts and BS CSS -->
 <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
<nav>
    <div class="navigation d-flex justify-content-between">
        
        <a href="/"><img src="<?php echo e(asset('images/ps_logo.png')); ?>" width="150px" alt="ps_logo"></a>

        
        <ul class="menu-links list-unstyled d-flex m-4">
            <li class="mx-3"><a class="text-decoration-none" href="/">Home</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/hardware">Hardware</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/history">History</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/contact">Contact</a></li>
        </ul>

        <div class="login-links m-4">
            
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                    <!-- Right Side Of Navbar (Logged User) -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="text-light"><?php echo e(Auth::user()->name); ?></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-decoration-none mx-2"><button class="btn-login">Log in</button></a>
        
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="text-decoration-none"><button class="btn-register">Register</button></a>
                <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>

            
            <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                
                
                <ul class="mobile-menu menu-links">
                    <li class="mx-3"><a class="text-decoration-none" href="/">Home</a></li>
                    <li class="mx-3"><a class="text-decoration-none" href="/hardware">Hardware</a></li>
                    <li class="mx-3"><a class="text-decoration-none" href="/history">History</a></li>
                    <li class="mx-3"><a class="text-decoration-none" href="/contact">Contact</a></li>
                </ul>
            </div>

    </div>
</nav>


<script src="<?php echo e(asset('js/index.js')); ?>"></script><?php /**PATH C:\Users\msunokas\Documents\Programavimas\Laravel\playstation\resources\views/partials/navigation.blade.php ENDPATH**/ ?>