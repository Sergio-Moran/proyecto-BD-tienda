<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="flex bg-auto">
    <div class="flex w-2/3 md:w-1/4 h-screen bg-auto">
        <div class="mx-auto py-10">
            <a href="{{ url('/Inicio/index') }}" style="margin-left: 20%"
                class="text-2xl font-bold mb-2 cursor-pointer text-[#EC5252] duration-150">TIENDA</a>
            <ul>
                <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                    <a class="btn btn-primary" name="btn-" id="btn-" type="button" href="{{ url('/Productos/Show') }}">
                        <i class="">📦 Productos</i>
                    </a>
                </li>
                <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                    <a class="btn bg-info" style="padding-right: 44px" style="padd" name="btn-" id="btn-"
                        type="button" href="{{ url('/Cliente/Show') }}">
                        <i class="">🧑‍🔧 Cuenta</i>
                    </a>
                </li>
                <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                    <a class="btn bg-info" style="padding-right: 44px" style="padd" name="btn-" id="btn-"
                        type="button" href="{{ url('/Proveedor') }}">
                        <i class="">🧑‍🔧 Proveedores</i>
                    </a>
                </li>
                <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                    <a class="btn btn-ghost form-control" style="padding-right: 17px; border-color: black;" name="btn-"
                        id="btn-" type="button" href="{{ url('/Inventario/Show') }}">
                        <i class="">📘 Inventario</i>
                    </a>
                </li>
                <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                    <a class="btn bg-secondary-focus form-control" style="padding-right: 48px" name="btn-" id="btn-"
                        type="button" href="{{ url('/Ventas/Show') }}">
                        <i class="">💵 Ventas</i>
                    </a>
                </li>
                <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                    <a class="btn bg-success form-control" style="padding-right: 34px" name="btn-" id="btn-"
                        type="button" href="{{ url('/Cliente/Reportes') }}">
                        <i class="">📄 Reportes</i>
                    </a>
                </li>
                @if (request()->user()->rol == 'Administrador')
                    <li class="flex space-x-2 mt-2 cursor-pointer hover:text-[#EC5252] duration-150">
                        <a class="btn bg-success form-control" style="padding-right: 34px" name="btn-" id="btn-"
                            type="button" href="{{ url('/RolUsuarios/create') }}">
                            <i class="">➕Usuarios</i>
                        </a>
                    </li>
                @endif
                <button class="mt-2 bg-[#EC5252] rounded-full">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-jet-dropdown-link style="padding-right: 30px; padding-left: 30px; "
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-jet-dropdown-link>
                    </form>
                </button>
            </ul>
        </div>
    </div>
    <main class="min-h-screen w-full">
        @yield('content')
    </main>
</div>
{{-- <header class="pb-6 pt-8 h-full contenedor">
    @yield('content_header')
</header> --}}

</html>
