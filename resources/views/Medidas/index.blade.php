@extends('layouts.app')

@section('content_header')
    <header>Agregar Medidas</header>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <livewire:medidas.index />
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

@section('footer')
@endsection