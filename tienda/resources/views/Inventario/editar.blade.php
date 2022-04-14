@extends('layouts.app')
@section('content_header')
    <x-header titulo="EDITAR" />
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
    <form action="{{ url('/Inventario/' . $datos->codigo) }}" enctype="multipart/form-data" method="post">
        @method('PATCH')
        @csrf
        @include('Inventario.formulario')
    </form>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
