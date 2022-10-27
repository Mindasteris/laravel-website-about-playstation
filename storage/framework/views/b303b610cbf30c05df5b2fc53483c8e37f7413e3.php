 <!-- Scripts and BS CSS -->
 <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
<nav>
    <div class="navigation d-flex justify-content-between">
        
        <a href="/"><img src="<?php echo e(asset('images/ps_logo.png')); ?>" width="150px" alt="ps_logo"></a>

        
        <ul class="menu-links list-unstyled d-flex m-4">
            <li class="mx-3"><a class="text-decoration-none" href="/">Home</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="/hardware">Hardware</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="#">History</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="#">News</a></li>
            <li class="mx-3"><a class="text-decoration-none" href="#">Contact</a></li>
        </ul>

        <div class="login-links m-4">
            
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/home')); ?>" class="text-light text-decoration-none"><button>Home</button></a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-decoration-none mx-2"><button class="btn-login">Log in</button></a>
        
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="text-decoration-none"><button class="btn-register">Register</button></a>
                <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</nav><?php /**PATH C:\Users\Minde\Desktop\Coding\Laravel\playstation\resources\views/partials/navigation.blade.php ENDPATH**/ ?>