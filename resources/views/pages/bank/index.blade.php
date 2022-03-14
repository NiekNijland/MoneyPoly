@extends('layouts.main')

@section('content')
    @livewire('bank.bank-component', ['players' => $players, 'game' => $game])
@endsection

@push('scripts')
    @include('pages.bank.index-js')
@endpush
