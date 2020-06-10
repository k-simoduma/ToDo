@extends('layouts.app')
@section('title', '登録')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="form">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-title"><h3>{{ __('登録') }}</h3></div>

        <label for="name">{{ __('ユーザー名') }}</label>
        <div class="form-item">
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <label for="email">{{ __('メールアドレス') }}</label>
        <div class="form-item">
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <label for="password">{{ __('パスワード') }}</label>
        <div class="form-item">
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <label for="password-confilm">{{ __('パスワード(確認のため再度入力してください)') }}</label>
        <div class="form-item">
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-button">
            <button type="submit">{{ __('OK') }}</button>
        </div>
    </form>
</div>
@endsection
