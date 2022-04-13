@extends('layouts.app')

@section('content_header')
    <header>INICIO</header>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <x-module>
        <x-errors :errors="$errors" />
        @include('Productos.formulario',[
        'requerido'=>'required',
        'url'=>url('/Productos'),
        'method'=>'POST'
        ])
    </x-module>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
@endsection

@section('footer')
@endsection