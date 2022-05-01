@extends('layouts.app')

@section('content_header')
    <header>Crear Usuario</header>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <livewire:usuarios.index />
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

@section('footer')
@endsection