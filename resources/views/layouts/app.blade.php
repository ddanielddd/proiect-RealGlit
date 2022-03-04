<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RealGlit</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div><img src="/svg/RealGlitLogo.svg" style="height: 45px;"></div>
                    <!-- <div>RealGlit</div> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Logare') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Înregistrare') }}</a>
                                </li>
                            @endif
                        @else
                        
                        <div class="d-flex justify-content-between align-items-center">

                            <li class="nav-item">
                            <!-- <form class="input-group" action="{{ '/explore' }}" method="GET">
                                <input type="text" class="form-control rounded" name="search" placeholder="Cauta" value="{{ request()->query('search') }}">
                                    <div class="input-group-addon">
                                        <span class="input-group-text"><i class="ti-search"></i></span>
                                    </div>
                            </form> -->
                             <form class="input-group p-3" action="{{ '/explore' }}" method="GET">
                                <input type="text" class="form-control rounded" name="search" placeholder="Cauta" value="{{ request()->query('search') }}">
                                <button type="button" class="btn btn-outline-secondary">Caută</button>
                             </form>
                            </li>

                            <li class="nav-item"><a href="/explore"><button type="button" class="btn btn-outline-dark">Explorează</button></a></li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">{{ Auth::user()->username }}</a>
                                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}/edit">Editează Profilul</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconectează') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    
                                    
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </div>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
