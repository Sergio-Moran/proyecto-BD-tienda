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

        .titulo {
            background-color: rgb(216, 216, 216);
        }

    </style>
</head>
<div align="center">
    <div>
        <h1>Tienda</h1>
        <b>
            <label for="">Generado por: </label>
        </b>
        <label for="">{{ $facturas[0]->name }}</label>
    </div>
    <div>
        <b>
            <label for="">Nombre del cliente: </label>
        </b>
        <label for="">{{ $facturas[0]->nombre }} {{ $facturas[0]->apellido }} </label>
    </div>
    <div>
        <b>
            <label for="">Nit: </label>
        </b>
        <label for="">{{ $facturas[0]->nit }}</label>
    </div>
    <div>
        <b>
            <label for="">Ciudad: </label>
        </b>
        <label for="">{{ $facturas[0]->ciudad }}</label>
    </div>
    <div>
        <b>
            <label for="">Descripción: </label>
        </b>
        <label for="">{{ $facturas[0]->descripcion }}</label>
    </div>
</div>
<br>

<body class="">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <br>
        @foreach ($facturas as $factura)
            <tr>
                <th>{{ $factura->idProductos }}</th>
                <th>{{ $factura->nombres }}</th>
                <th>Q. {{ $factura->precio_venta }}</th>
                <td>{{ $factura->cantidad }}</td>
                <td>Q. {{ $factura->subtotal }}</td>
            </tr>
        @endforeach
    </table>
    <div align="center">
        <h3>Total: Q. {{$facturas[0]->total}}</h3>
    </div>
</body>
