@extends('layouts.app')
@section('title', 'パスワード確認')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="form">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="form-title"><h3>{{ __('パスワード確認') }}</h3></div>

        <label for="email">{{ __('メールアドレス') }}</label>
        <div class="form-item">
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-button">
            <button type="submit">{{ __('メール送信') }}</button>
        </div>
    </form>
</div>
@endsection
