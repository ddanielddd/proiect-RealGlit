<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="<?php echo e($user->profile->profileImage(), false); ?>" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="fw-bolder display-6"><?php echo e($user->username, false); ?></div>
                    <div> &nbsp </div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                    <?php else: ?>
                    <follow-button user-id="<?php echo e($user->id, false); ?>" follows="<?php echo e($follows, false); ?>"></follow-button>
                    <?php endif; ?>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                
                    <a href="/p/create"><button type="button" class="btn btn-outline-dark">Adaugă postare nouă</button></a>
                <?php endif; ?>

            </div>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                <a href="/profile/<?php echo e($user->id, false); ?>/edit"><button type="button" class="btn btn-outline-info">Editează profilul</button></a>
            <?php endif; ?>

            <div class="d-flex pt-2">
                <div class="pr-5"><strong><?php echo e($postCount, false); ?></strong> postări</div>
                <div> &nbsp </div>
                <div class="pr-5"><strong><?php echo e($followersCount, false); ?></strong> urmăritori </div>
                <div> &nbsp </div>
                <div class="ppr-5"><strong><?php echo e($followingCount, false); ?></strong> urmăriri </div>
            </div>
            <div class="pt-4 fw-bolder"><?php echo e($user->profile->title, false); ?></div>
            <div><?php echo e($user->profile->description, false); ?></div>
            <div><a href="<?php echo e($user->profile->url, false); ?>" class="link-secondary" ><?php echo e($user->profile->url, false); ?></a></div>
        </div>
    </div>

    <div class="row pt-5">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-3 pb-4">
                <a href="/p/<?php echo e($post->id, false); ?>">
                    <img src="/storage/<?php echo e($post->image, false); ?>" class="w-100">
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\RealGlit\resources\views/profiles/index.blade.php ENDPATH**/ ?>