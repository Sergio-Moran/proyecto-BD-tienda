@extends('layouts.app')

@section('content_header')
    <header>Agregar Proveedores</header>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <livewire:proveedores.index />
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

@section('footer')
@endsection