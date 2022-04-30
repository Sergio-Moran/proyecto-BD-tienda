@extends('layouts.app')
@section('content_header')
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
    <form action="{{ url('/Cliente/' . $datos->id) }}" enctype="multipart/form-data" method="post">
        @method('PATCH')
        @csrf
        @include('Clientes.formulario')
    </form>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
