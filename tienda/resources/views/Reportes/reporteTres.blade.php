<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Tres</title>
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

        .titulo {
            background-color: rgb(216, 216, 216);
        }
    </style>
</head>
<div align="center">
    <div>
        <h1>Tienda</h1>
        <b>
            <h2 for="">Reporde de los productos más solicitados </h2>
        </b>
    </div>
</div>
<br>

<body class="">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Codigo</th>
            <th>Nombre del Producto</th>
            <th>Descripción</th>
            <th>Cantidad Actual</th>
            <th>Modificaciones</th>
        </tr>
        <br>
        @foreach ($datos as $dato)
            <tr>
                <th>{{ $dato->id }}</th>
                <th>{{ $dato->nombres }}</th>
                <th>{{ $dato->descripcion }}</th>
                <th>{{ $dato->cantidad }} Unidades en Existencia</th>
                @if ($dato->updated_at==null)
                    <td>Sin modificaciones</td>
                @else
                    <td>Con modificaciones</td>
                @endif
            </tr>
        @endforeach
    </table>
</body>
</html>