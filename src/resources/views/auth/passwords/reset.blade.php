@extends('layouts.app')
@section('title', 'パスワードリセット')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="form">
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <div class="form-title"><h3>{{ __('パスワードリセット') }}</h3></div>

        <input type="hidden" name="token" value="{{ $token }}">

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

        <label for="password-confilm">{{ __('パスワードの確認') }}</label>
        <div class="form-item">
            <input id="password-confilm" type="password" name="password_confirmation" required autocomplete="current-password">
        </div>

        <div class="form-button">
            <button type="submit">{{ __('パスワードリセット') }}</button>
        </div>

    </form>
</div>
@endsection
