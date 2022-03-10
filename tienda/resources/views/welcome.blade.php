@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

@section('title', 'Dashboard')

@section('content_header')
    <h1>HOLA</h1>
@endsection

@section('content')
    <h1>Barra</h1>
    <input type="range" min="0" max="100" value="40" class="tw-range">
    <div class="form-row">
        <div class="form-group">
            <label class="tw-cursor-pointer tw-label">
                <span class="tw-label-text">Remember me</span>
                <input type="checkbox" class="tw-toggle tw-toggle-primary" checked>
            </label>
        </div>
        <div class="form-group">
            <button class="tw-btn tw-btn-primary">Button</button>
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log('Hi!');
    </script>
@endsection
