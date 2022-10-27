

<?php $__env->startSection('content'); ?>
    <h1 class="text-center py-3">Playstation 3</h1>

    <div class="console-ps1 d-flex flex-wrap border border-primary">

        <figure class="gallery m-2">
            <img src="<?php echo e(asset('images/consoles/ps1-1.jpg')); ?>" alt="ps1" width="300px">
        </figure>

        <figure class="gallery m-2">
            <img src="<?php echo e(asset('images/consoles/ps1-2.jpg')); ?>" alt="ps1" width="300px">
        </figure>

        <figure class="gallery m-2">
            <img src="<?php echo e(asset('images/consoles/ds1.jpg')); ?>" alt="ps1" width="300px">
        </figure>

        <figure class="gallery m-2">
            <img src="<?php echo e(asset('images/consoles/ds1-2.jpg')); ?>" alt="ps1" width="300px">
        </figure>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Minde\Desktop\Coding\Laravel\playstation\resources\views/gallery/ps3-gallery.blade.php ENDPATH**/ ?>