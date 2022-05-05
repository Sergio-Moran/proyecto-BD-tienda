@extends('layouts.app')

@section('content_header')
    <header>Lista Facturas</header>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <livewire:reportes.facturas>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

@section('footer')
@endsection