@extends('layouts.app')
@section('title', 'メールアドレス確認')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="form">
    @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
    @endif

    <form action="{{ route('verification.resend') }}" method="POST">
        @csrf

        <div class="form-messege">{{ __('メールを送信しました。') }}</div>
        <div class="form-messege">{{ __('あなたのメールアドレスを確認してください。') }}</div>
        <div class="form-messege">{{ __('メールが届かない場合は') }}</div>

        <div class="form-button">
            <button type="submit">{{ __('ここをクリックして別のものをリクエスト') }}</button>.
        </div>
    </form>
</div>
@endsection
