@extends('layouts.logapp')

@section('foregs')

<!-- Header -->
<header id="header">
    <a href="/" class="title">Volver</a>
    <nav>
        <ul>
            <!-- Authentication Links -->
            @guest


            @if (Route::has('register'))
            <li class="title">
                <a class="button" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            </li>
            @endif
            @endguest
        </ul>
    </nav>
</header>
<div class="login">
    <div class="login-screen">
        <div class="app-title">
            <h1>Ingresar</h1>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
<br>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>
                    <br>
                    @if (Route::has('password.request'))
                    <a class="login-link" href="{{ route('password.request') }}">
                        {{ __('Olvidé mi contraseña') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection