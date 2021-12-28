@extends('layouts.main')

@section('content')
    @switch (Auth::user()->game->status)
        @case (\App\Enums\GameStatus::Waiting())
            @include('pages.dashboard.waiting')
            @break
        @case (\App\Enums\GameStatus::Active())
            @include('pages.dashboard.active')
            @break
        @case (\App\Enums\GameStatus::Closed())
            @include('pages.dashboard.closed')
            @break
    @endswitch
@endsection
