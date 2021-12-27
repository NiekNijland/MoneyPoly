@extends('layouts.join')

@section('content')
    @livewire('join.join-component')
@endsection

@push('scripts')
    @include('join.index-js')
@endpush
