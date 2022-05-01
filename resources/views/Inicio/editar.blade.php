@extends('layouts.app')
@section('content_header')
    <x-header titulo="TITULO" />
    @if ($errors->any())
        <div class="alert alert-error shadow-lg" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
@section('content')
    <form action="{{ url('/ruta/' . $datos->codigo) }}" enctype="multipart/form-data" method="post">
        @method('PATCH')
        @csrf
        @include('carpeta.formulario')
    </form>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
