<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 35%; font-size: 2rem" style="margin: 2ch;  padding: 3ch">
    Agregar Producto</h1>
<br>


<div class="form-row form-row shadow-md bg-auto rounded-lg" style="margin: 2ch; padding: 3ch" >
    <div class="grid grid-cols-2 gap-4">

        <label for="Nombre">Factura No</label>
        <input readonly type="text" name="cod_factura_fk" value="{{ $id }}" class="input input-bordered">

        <label for="Producto">Producto</label>
        <select wire:change="$emit('producto-cambiado')" class="input input-bordered" name="cod_producto_fk"
            id="descripcion" option="Medida">
            @foreach ($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombres }}</option>
            @endforeach
        </select>

        <label for="Nombre">Cantidad</label>
        <input wire:model="cantidad" type="text" placeholder="Cantidad" name="cantidad" class="input input-bordered">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
        <button class="btn btn-primary" type="submit">Agregar al carrito</button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
        <a class="btn btn-outline btn-success" href="{{ url('/Ventas/' . $id . '/vendido') }}"
            class="mb-10">Confirmar Compra</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
        <a class="btn btn-outline btn-error" href="{{ url('/Ventas/' . $id . '/destroy') }}"
            class="mb-10">Eliminar Compra</a>
    </div>
</div>

<div class="overflow-x-auto" style="margin: 2ch;  padding: 3ch">
    <table class="table table-zebra w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>No.</th>
                <th>Nombre Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tabProductos as $producto)
                <tr>
                    <th>{{ $producto->id }}</th>
                    <th>{{ $producto->nombres }}</th>
                    <td>Q. {{ $producto->precio_venta }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>Q. {{ $producto->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
