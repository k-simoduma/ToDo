@extends('layouts.app')
@section('title', 'ログイン')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="form">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-title"><h3>{{ __('ログイン') }}</h3></div>

        <label for="email">{{ __('メールアドレス') }}</label>
        <div class="form-item">
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <label for="password">{{ __('パスワード') }}</label>
        <div class="form-item">
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-check">
            <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">{{ __('Remember Me') }}</label>
        </div>

        <div class="form-button">
            <button type="submit">{{ __('ログイン') }}</button>
        </div>

        @if (Route::has('password.request'))
        <div class="form-link">
            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('パスワードをお忘れの方はこちら') }}</a>
        </div>
        @endif

    </form>
</div>
@endsection
