<!-- views/folder/file -->
@extends('auth.layouts.wrappers')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group" style="margin-bottom: 6px">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control rounded-0 @error('email') is-invalid @enderror" placeholder="Email : email@email.com" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" style="margin-bottom:6px">
                            <input id="password" type="password" name="password" class="form-control rounded-0 @error('password') is-invalid @enderror" placeholder="password ..." required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-flat">
                                {{ __('Login') }}
                            </button>
                            <a href="javascript:void(0)" class="btn btn-default btn-flat">Reset</a>
                            <br/>
                            <br/>
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <br/>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}" class="">Home</a>
                                @else
                                    <!--<a href="{{ route('login') }}" class="">Log in</a> -->
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection