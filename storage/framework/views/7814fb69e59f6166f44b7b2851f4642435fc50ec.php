

<?php $__env->startSection('content'); ?>
  
<head>
  <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Form Specific CSS-->
  <link href="<?php echo e(asset('css/form.css')); ?>" rel="stylesheet">

  <title>Autentificare - <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
      
			<div class="card-header">
				<h3>Autentificare</h3>
			
			</div>
			<div class="card-body">

      
        <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <span class="invalid-feedback" role="alert">
              <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
               <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>


					<div class="row align-items-center remember">
          <input class="row align-items-center remember" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
              <label class="form-check-label" for="remember">
            <?php echo e(__('??ine minte')); ?>

            </label>
					</div>


					<div class="form-group">
          <button type="submit" class="btn float-right login_btn">
           <?php echo e(__('Logare')); ?>

           </button>
					</div>

				</form>
			</div>

    <!-- Parte subsol formular     -->
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
              <a class="btn btn-link" href="<?php echo e(route('register')); ?>"> 
                  <?php echo e(__('??nregistreaz??-te')); ?>

              </a>          
				</div>

			  <div class="d-flex justify-content-center">
            <?php if(Route::has('password.request')): ?>
              <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                  <?php echo e(__('Ai uitat parola?')); ?>

              </a>
            <?php endif; ?>
				</div>
			</div>
      
		</div>
	</div>
</div>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\RealGlit\resources\views/test.blade.php ENDPATH**/ ?>