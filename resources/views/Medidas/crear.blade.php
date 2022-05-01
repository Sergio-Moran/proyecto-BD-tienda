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
    <form method="POST" action="{{ url('/Medida/') }}"  role="form" enctype="multipart/form-data">
        @csrf
        @include('Medidas.formulario')
    </form>

    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
