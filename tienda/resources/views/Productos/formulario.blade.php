@extends('layouts.app')

@section('content_header')
    <header>INICIO</header>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div>
        <header class="pb-6 pt-8">
            <div class="navbar bg-base-100">
                <div class="navbar-start">
                </div>
                <div class="navbar-center">
                    <a class="btn btn-ghost normal-case text-xl">Registro de Productos</a>
                </div>
            </div>
        </header>
        <div class="form-row form-row shadow-md bg-white rounded-lg ">
            <div class="grid grid-cols-3 gap-6">
                <input type="text" placeholder="Type here" class="input input-bordered">
                <input type="text" placeholder="Type here" class="input input-bordered">
                <input type="text" placeholder="Type here" class="input input-bordered">

                <input type="text" placeholder="Type here" class="input input-bordered">
                <input type="text" placeholder="Type here" class="input input-bordered">
                <input type="text" placeholder="Type here" class="input input-bordered">

                <input type="text" placeholder="Type here" class="input input-bordered">
                <input type="text" placeholder="Type here" class="input input-bordered">
                <input type="text" placeholder="Type here" class="input input-bordered">
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <a type="submit">Guardar</a>
            <a href="{{ url('/Productos/Show') }}" class="mb-10">Cancelar</a>

        </div>
    </div>
@endsection

@section('footer')
@endsection
