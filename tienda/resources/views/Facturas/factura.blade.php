<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">REPORTE FACTURAS</h1>
<br>
<br>

<div class="overflow-x-auto" style="margin: 2ch;  padding: 3ch">
    <table class="table table-zebra w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>Codigo Factura</th>
                <th>Cliente</th>
                <th>Ciudad</th>
                <th>Descripcion</th>
                <th>Total</th>
                <th>Emitida Por</th>
                {{-- <th>Estado</th> --}}
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($facturas as $factura)
                <tr>
                    <th>{{ $factura->idFactura }}</th>
                    <th>{{ $factura->nombre}} {{$factura->apellido}}</th>
                    <td>{{ $factura->ciudad }}</td>
                    <td>{{ $factura->descripcion }}</td>
                    <td>Q. {{ $factura->total }}</td>
                    <td>{{ $factura->name }}</td>
                    {{-- <td>{{ $factura->estado_pagado }}</td> --}}
                    <td>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
                            <a target="blank" class="btn btn-outline btn-primary"
                                href="{{ url('/Factura/'.$factura->idFactura) }}"
                                class="mb-10">Imprimir</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
