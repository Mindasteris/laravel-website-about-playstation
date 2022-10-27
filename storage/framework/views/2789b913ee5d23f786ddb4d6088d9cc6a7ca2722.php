<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Mindaugas Šunokas">
    <meta name="description" content="This is a webpage about Sony Playstation computers">
    <meta name="keywords" content="laravel, php, ps, playstation, museum, history, sony">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Scripts and Bootstrap CSS -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    
    <?php echo $__env->make('partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="sidebar-picture">
        <?php $__env->startSection('sidebar'); ?>
            
        <?php echo $__env->yieldSection(); ?>
    </div>
    
    
    <div class="container py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\Users\Minde\Desktop\Coding\Laravel\playstation\resources\views/layouts/master.blade.php ENDPATH**/ ?>