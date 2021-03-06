<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title>RealGlit</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js'), false); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <a class="navbar-brand d-flex align-items-center" href="<?php echo e(url('/'), false); ?>">
                    <div><img src="/svg/RealGlitLogo.svg" style="height: 45px;"></div>
                    <!-- <div>RealGlit</div> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation'), false); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login'), false); ?>"><?php echo e(__('Logare'), false); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register'), false); ?>"><?php echo e(__('??nregistrare'), false); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        
                        <div class="d-flex justify-content-between align-items-center">

                            <li class="nav-item">
                            <!-- <form class="input-group" action="<?php echo e('/explore', false); ?>" method="GET">
                                <input type="text" class="form-control rounded" name="search" placeholder="Cauta" value="<?php echo e(request()->query('search'), false); ?>">
                                    <div class="input-group-addon">
                                        <span class="input-group-text"><i class="ti-search"></i></span>
                                    </div>
                            </form> -->
                             <form class="input-group p-3" action="<?php echo e('/explore', false); ?>" method="GET">
                                <input type="text" class="form-control rounded" name="search" placeholder="Cauta" value="<?php echo e(request()->query('search'), false); ?>">
                                <button type="submit" class="btn btn-outline-secondary">Caut??</button>
                             </form>
                            </li>

                            <li class="nav-item"><a href="/explore"><button type="button" class="btn btn-outline-dark">Exploreaz??</button></a></li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name, false); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="/profile/<?php echo e(Auth::user()->id, false); ?>"><?php echo e(Auth::user()->username, false); ?></a>
                                    <a class="dropdown-item" href="/profile/<?php echo e(Auth::user()->id, false); ?>/edit">Editeaz?? Profilul</a>
                                    <hr>
                                    <a class="dropdown-item" href="<?php echo e(route('logout'), false); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Deconecteaz??'), false); ?>

                                    </a>
                                    

                                    <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" class="d-none">
                                    
                                    
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                            </div>
                            
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

<footer class="text-center">&copy; Copyright <?php echo date("Y"); ?> Dicher Daniel </footer>


</html>
<?php /**PATH C:\laragon\www\RealGlit\resources\views/layouts/app.blade.php ENDPATH**/ ?>