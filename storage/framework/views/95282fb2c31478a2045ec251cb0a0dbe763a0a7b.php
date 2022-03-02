

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/p/<?php echo e($post->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
            <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100" style="max-width: 30px;">
                    </div>
                    <div>&nbsp</div>
                    <div>
                        <div class="fw-bolder">
                            <a href="/profile/<?php echo e($post->user->id); ?>">
                                <span class="fw-bolder"><?php echo e($post->user->username); ?></span>
                            </a>
                             <?php echo e($post->caption); ?>

                        </div>
                        <div></div>
                    </div>
                     
                </div>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php echo e($posts->links()); ?>

            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\RealGlit\resources\views/posts/index.blade.php ENDPATH**/ ?>