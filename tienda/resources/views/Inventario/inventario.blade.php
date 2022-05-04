<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">Inventario
</h1>
<br>
<div class="absolute top-0 right-16">
    <a href="{{ url('/Inventario/create') }}" style="margin-top: 2ch" class="btn btn-warning" style="margin-r">Agregar
        Producto ➕</a>
</div>

<br>

<div class="overflow-x-auto" style="margin: 2ch;  padding: 3ch">
    <table class="table table-zebra w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Nombre del Producto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventario_productos as $inventario)
                <tr>
                    <th>{{ $inventario->id }}</th>
                    <th>{{ $inventario->descripcion }}</th>
                    <td>{{ $inventario->cantidad }}</td>
                    <td>{{ $inventario->nombres }}</td>
                    <td>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
                            <a class="btn btn-outline btn-error"
                                href="{{ url('/Inventario/' . $inventario->id . '/edit') }}"
                                class="mb-10">Editar</a>
                            <a class="btn btn-outline btn-error" onclick="return confirm('¿Desea eliminar el registro?')"
                                type="submit" href="{{ url('/Inventario/' . $inventario->id . '/destroy') }}"
                                class="mb-10">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
