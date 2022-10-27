<?php $__env->startSection('content'); ?>
<div class="container logged-user">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Welcome') . " " . Auth::user()->name); ?> &nbsp;| <?php echo e(__('You are logged in!')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <h1 class="text-center">Explore the world of gaming!</h1> <br>
                    <h1 class="text-center">Dive in to the world of Playstation!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\msunokas\Documents\Programavimas\Laravel\playstation\resources\views/home.blade.php ENDPATH**/ ?>