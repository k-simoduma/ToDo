@extends('layouts.app')
@section('title', 'マイページ')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>

<div class="form">
    <form action="{{ route('home') }}" method="POST">
        @csrf
        <div class="form-title"><h4>{{ __('リストに追加') }}</h3></div>
        <div class="form-item">
            <input id="content" type="text" placeholder="What needs to be done?" required autocomplete="content" autofocus>
            <button type="submit">{{ __('追加') }}</button>
        </div>
    </form>
</div>

<div class="list">
    <li>
        <div class="list-check">
            <input type="checkbox" name="is-completed">
        </div>
        <div class="list-content">
            <span>{{ __('この文章はダミーです。') }}</span>
        </div>
        <div class="list-button">
            <button>{{ __('×') }}</button>
        </div>
    </li>
</div>
@endsection
