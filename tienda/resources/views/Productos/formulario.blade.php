{{-- 
<form action="{{ $url }}" enctype="multipart/form-data" method="POST" id="formulario-accionista">
    @method($method)
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <x-inputs.general titulo="DPI" id="dpi_pasaporte_greenCard" type="number" required min="0" pattern="\d*"
                value="{{ isset($accionista->dpi_pasaporte_greenCard)? $accionista->dpi_pasaporte_greenCard: old('dpi_pasaporte_greenCard') }}" />
        </div>
        <div class="form-group col-md-4">
            <x-inputs.general titulo="Nombres" id="nombres" required type="text"
                value="{{ isset($accionista->nombres) ? $accionista->nombres : old('nombres') }}" />
        </div>
        <div class="form-group col-md-4">
            <x-inputs.general titulo="Apellidos" id="apellidos" required
                value="{{ isset($accionista->apellidos) ? $accionista->apellidos : old('apellidos') }}" />
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <x-inputs.general titulo="Correo" id="correo_electronico" type="email" required
                value="{{ isset($accionista->correo_electronico) ? $accionista->correo_electronico : old('') }}" />
        </div>
        <div class="form-group col-md-4">
            <x-inputs.general titulo="No. Cuenta" id="no_cuenta" type="text" required min="0"
                value="{{ isset($accionista->no_cuenta) ? $accionista->no_cuenta : old('no_cuenta') }}" />
        </div>
        <div class="form-group col-md-4">
            <x-inputs.general titulo="Alias del Accionista" id="alias" type="text" required
                value="{{ isset($accionista->alias) ? $accionista->alias : old('alias') }}" />
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2 tw-flex tw-flex-col tw-justify-end">
            <x-button type="submit" id="btnAceptar"
                class="tw-enform-control tw-btn tw-bg-blue-600 hover:tw-bg-blue-800">Guardar
            </x-button>
        </div>
        <div class="form-group col-md-2 tw-flex tw-flex-col tw-justify-end">
            <x-button-link href="{{ url('/Accionistas') }}" class="form-control" type="button">Cancelar
            </x-button-link>
        </div>
    </div>
    <div>
        <p class="tw-mt-3 tw-text-sm">Los campos con * son obligatorios</p>
    </div>
</form>
 --}}
 @extends('layouts.app')

 @section('content_header')
     <header>INICIO</header>
 @endsection
 
 @section('content')
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     @livewireStyles
     <h1>Formulario</h1>

     <script src="{{ asset('js/app.js') }}"></script>
     @livewireScripts
 @endsection
 
 @section('footer')
 @endsection
