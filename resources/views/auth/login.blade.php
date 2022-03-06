@extends('layouts.app')

@section('content')

<head>
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Form Specific CSS-->
  <link href="{{ asset('css/form.css') }}" rel="stylesheet">

  <title>Autentificare - @yield('title')</title>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">

        <div class="card-header">
          <h3>Autentificare</h3>

        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Adresa de email" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>


            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Parolă" required autocomplete="current-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>


            <div class="row align-items-center remember">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              Ține minte
            </div>


            <div class="form-group">
              <button type="submit" class="btn float-right login_btn">
                {{ __('Logare') }}
              </button>
            </div>

          </form>
        </div>

        <!-- Parte subsol formular     -->
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            <a class="btn btn-link" href="{{ route('register') }}">
              {{ __('Înregistrează-te') }}
            </a>
          </div>

          <div class="d-flex justify-content-center">
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Ai uitat parola?') }}
            </a>
            @endif
          </div>
        </div>

      </div>
    </div>
    
  </div>
  <!-- <div class="d-flex justify-content-center fixed-bottom pb-5"><a href="/admin"><button type="button" class="btn btn-outline-light">Admin</button></a></div> -->

  


</body>

@endsection