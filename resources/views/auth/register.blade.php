<!-- views/folder/file -->
@extends('auth.layouts.wrappers')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group" style="margin-bottom:6px">
                            <label class="control-label">{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control rounded-0 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama ..." required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="from-group" style="margin-bottom:6px">
                            <label class="control-label">{{ __('Email Address') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control rounded-0 @error('email') is-invalid @enderror" placeholder="contoh : email@email.com" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" style="margin-bottom:6px">
                            <label class="control-label">{{ __('Password') }}</label>
                            <input type="password"name="password" class="form-control rounded-0 @error('password') is-invalid @enderror" placeholder="password ..." required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" style="margin-bottom:6px">
                            <label class="control-label">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control rounded-0" name="password_confirmation" placeholder="password ..." required autocomplete="new-password">
                        </div>
                        <div class="form-group" style="margin-bottom:6px">
                            <button type="submit" class="btn btn-primary btn-flat">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection