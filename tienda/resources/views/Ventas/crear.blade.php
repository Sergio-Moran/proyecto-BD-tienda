@extends('layouts.app')
@section('content_header')
    <header>INICIO</header>
    @if ($errors->any())
        <div class="alert alert-error shadow-lg" role="alert">
            <ul>
                @if (session('alert'))
                    <div class="alert alert-success">
                        {{ session('alert') }}
                    </div>
                @endif
            </ul>
        </div>
    @endif
@endsection
@section('content')
    <form method="POST" action="{{ url('/Ventas/Carrito') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('Ventas.formulario')
    </form>

    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
