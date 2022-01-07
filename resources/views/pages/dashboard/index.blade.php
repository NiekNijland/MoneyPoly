@extends('layouts.main')

@section('content')
    @livewire('dashboard.dashboard-component')
@endsection

@push('scripts')
    @include('pages.dashboard.index-js')
@endpush
