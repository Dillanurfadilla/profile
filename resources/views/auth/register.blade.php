@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="mb-3">
                            <img src="{{ asset('/img/logo_disdukcapil.png') }}" alt="Logo" class="img-fluid" style="width: 80px;">
                        </div>
                        <h1 class="h4 text-gray-900 mb-4">
                            <i class="fas fa-user-plus"></i> {{ __('Register') }}
                        </h1>
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger border-left-danger" role="alert">
                            <ul class="pl-4 my-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="{{ __('First Name') }}" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="last_name" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-block" style="max-width: 300px; margin: auto;">
                                <i class="fas fa-user-check"></i> {{ __('Register') }}
                            </button>
                        </div>
                    </form>

                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> {{ __('Already have an account? Login!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
