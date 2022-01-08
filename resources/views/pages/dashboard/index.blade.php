@extends('layouts.main')

@push('styles')
    {{-- styles to remove the default - + buttons from the number input fields --}}
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endpush

@section('content')
    @livewire('dashboard.dashboard-component')
@endsection

@push('scripts')
    @include('pages.dashboard.index-js')
@endpush
