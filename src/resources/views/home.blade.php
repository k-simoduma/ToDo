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
    <form action="{{ route('create') }}" method="POST">
        @csrf
        <div class="form-title"><h4>{{ __('リストに追加') }}</h3></div>
        <div class="form-item">
            <input id="content" type="text" name="content" value="{{ old('content') }}" placeholder="What needs to be done?" required autocomplete="content" autofocus>
            <button id="add" type="submit">{{ __('追加') }}</button>
        </div>
    </form>
</div>

<div class="list">
    @foreach ($data as $item)
    <li class="todo_{{ $item->id }}">
        <div class="list-item">
            <input class="todo-id" type="hidden" name="id" value="{{ $item->id }}">
            <div class="list-check">
                <input class="check" type="checkbox" name="is-completed" @if ($item->is_completed) {{ __('checked') }} @endif>
            </div>
            <div class="list-content">
                <span>{{ $item->content }}</span>
            </div>
            <div class="list-button">
                <button class="delete">{{ __('×') }}</button>
            </div>
        </div>
    </li>
    @endforeach
</div>
@endsection

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>