@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <h1>products</h1> <hr>
        @livewire('product-table')
    </div>
@endsection