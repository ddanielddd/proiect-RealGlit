

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/<?php echo e($post->image); ?>" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>&nbsp</div>
                    <div>
                        <div class="fw-bolder">
                            <a href="/profile/<?php echo e($post->user->id); ?>">
                                <span class="text-dark"><?php echo e($post->user->username); ?></span>
                            </a>
                        </div>
                    </div>
                     
                </div>
                <br>
                <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                <a href="/p/<?php echo e($post->id); ?>/delete"><button type="button" class="btn btn-outline-danger">Sterge</button></a>
                </div>
                <br>
                <?php endif; ?>
                    <span class="fw-light"> <?php echo e(date('d-m-Y', strtotime($post->created_at))); ?></span>
                
                <hr>

                <p>
                    <span class="fw-bold">
                        <a href="/profile/<?php echo e($post->user->id); ?>">
                            <span class="text-dark"><?php echo e($post->user->username); ?></span>
                        </a>
                    </span> <?php echo e($post->caption); ?>

                    
                </p>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\RealGlit\resources\views/posts/show.blade.php ENDPATH**/ ?>