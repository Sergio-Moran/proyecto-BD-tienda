@extends('layouts.app')
@section('content_header')
    <header>INICIO</header>
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
{{--     <form action="{{ url('productos.store') }}" method="post" enctype="multipart/form-data" class="mb-16">
        @csrf
        @include('Productos.formulario')
    </form> --}}
    <form method="POST" action="{{ url('/Productos/') }}"  role="form" enctype="multipart/form-data">
        @csrf
        @include('Productos.formulario')
    </form>

    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
