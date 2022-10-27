

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Contact Us')); ?></div>
                    
                    <div class="card-body">

                        
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success text-center contact-message">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                       
                        <form method="POST" action="<?php echo e(url('/contact')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Name')); ?></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" autofocus>
                                    
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Email Address')); ?></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email">
                                    
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="message" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Your Message')); ?></label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                                    
                                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" name="send" class="btn btn-primary" value="Send">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\msunokas\Documents\Programavimas\Laravel\playstation\resources\views/contact.blade.php ENDPATH**/ ?>