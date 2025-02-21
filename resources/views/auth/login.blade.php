@extends('layouts.auth')

@section('main-content')
<div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    <div class="col-lg-5 col-md-7 col-sm-9">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-body p-4 text-center">
                <div class="mb-4">
                    <img src="{{ asset('/img/logo_disdukcapil.png') }}" alt="Logo" class="img-fluid" style="width: 100px;">
                </div>
                <h2 class="h4 text-gray-900 mb-4">
                    <i class="fas fa-sign-in-alt"></i> {{ __('Welcome Back!') }}
                </h2>

                @if ($errors->any())
                    <div class="alert alert-danger border-left-danger" role="alert">
                        <ul class="pl-3 my-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="user">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                             {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <hr>
                @if (Route::has('register'))
                    <div class="text-center">
                        <a class="small" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> {{ __('Create an Account!') }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
