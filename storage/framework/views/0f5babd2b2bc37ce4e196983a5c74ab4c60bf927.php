<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Adaugă postare nouă</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Descriere</label>

                    <input id="caption"
                           type="text"
                           class="form-control<?php echo e($errors->has('caption') ? ' is-invalid' : ''); ?>"
                           name="caption"
                           value="<?php echo e(old('caption')); ?>"
                           autocomplete="caption" autofocus>

                    <?php if($errors->has('caption')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('caption')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Selectează imagine</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    <?php if($errors->has('image')): ?>
                        <strong><?php echo e($errors->first('image')); ?></strong>
                    <?php endif; ?>
                </div>

                <div class="row pt-4">
                    <button class="btn btn-dark">Adaugă postare</button>
                </div>

            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\RealGlit\resources\views/posts/create.blade.php ENDPATH**/ ?>