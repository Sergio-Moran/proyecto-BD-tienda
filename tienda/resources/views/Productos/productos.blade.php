<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">Productos</h1>
<br>
<div class="absolute top-0 right-16">
    <a href="{{ url('/Productos/create') }}" style="margin-top: 2ch" class="btn btn-warning" style="margin-r">Agregar
        Producto ➕</a>
</div>

<br>

<div class="overflow-x-auto">
    <table class="table table-zebra w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio de Venta</th>
                <th>Precio de Compra</th>
                <th>Estado</th>
                <th>Proveedor</th>
                <th>Unidad de Medida</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($productos as $producto)
                <tr>
                    <th>{{ $producto->codigo }}</th>
                    <th>{{ $producto->nombreProducto }}</th>
                    <td>{{ $producto->precio_venta }}</td>
                    <td>{{ $producto->precio_compra }}</td>
                    <td>{{ $producto->estado }}</td>
                    <td>{{ $producto->nombreProveedor }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
                            <a class="btn btn-outline btn-error"
                                href="{{ url('/Productos/' . $producto->codigo . '/edit') }}"
                                class="mb-10">Editar</a>
                            <a class="btn btn-outline btn-error" onclick="return confirm('¿Desea eliminar el registro?')"
                                type="submit" href="{{ url('/Productos/' . $producto->codigo . '/destroy') }}"
                                class="mb-10">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
