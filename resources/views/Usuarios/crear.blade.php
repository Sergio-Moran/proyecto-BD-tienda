@extends('layouts.app')
@section('content_header')
    <header>INICIO</header>
    @if (Session::has('message'))
        <div class="alert alert-info shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-current flex-shrink-0 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                    <span>{{ Session::get('message') }} </span>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-info shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-current flex-shrink-0 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}.</span>
                @endforeach
            </div>
        </div>
    @endif
@endsection
@section('content')
    <form method="POST" action="{{ url('/RolUsuarios/') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('Usuarios.formulario')
    </form>

    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
