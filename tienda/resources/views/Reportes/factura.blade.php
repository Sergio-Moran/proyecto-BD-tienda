<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturas</title>
    <style>
        @page {
            margin: 0.3cm;
            line-height: 1.3;
            font-size: 15;
        }

        body {
            border: 4px solid #000;
        }

        table {
            width: 100%;
            text-align: center;
        }

        td {
            border: 1px solid black;
            margin: 0;
            height: 50px;
        }

        .titulo {
            background-color: rgb(216, 216, 216);
        }

    </style>
</head>

<body class="">
    <h1>Factura</h1>
    <div class="overflow-x-auto" style="margin: 2ch;  padding: 3ch">
        <table class="table table-zebra w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Nit</th>
                    <th>DPI</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>contendido</th>
                </tr>
                {{-- @foreach ($clientes as $cliente)
                <tr>
                    <th>{{ $cliente->id }}</th>
                    <th>{{ $cliente->nombre }} {{ $cliente->apellido }}</th>
                    <td>{{ $cliente->correo }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->nit }}</td>
                    <td>{{ $cliente->dpi }}</td>
                    <td>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
                            <a class="btn btn-outline btn-error"
                                href="{{ url('/Cliente/' . $cliente->id . '/edit') }}"
                                class="mb-10">Editar</a>
                            <a class="btn btn-outline btn-error" onclick="return confirm('¿Desea eliminar el registro?')"
                                type="submit" href="{{ url('/Cliente/' . $cliente->id . '/destroy') }}"
                                class="mb-10">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach --}}
            </tbody>
        </table>
    </div>
</body>
