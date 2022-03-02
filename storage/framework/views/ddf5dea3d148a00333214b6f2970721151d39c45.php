<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row pt-5">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-2 pb-4">
                <a href="/p/<?php echo e($post->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" class="w-100">
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <div class="row">
      
            <div class="pagination col-12 d-flex justify-content-center ">
                <?php echo e($posts->links()); ?>

                </div>
     </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\RealGlit\resources\views/posts/explore.blade.php ENDPATH**/ ?>