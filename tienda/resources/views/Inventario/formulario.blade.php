<div>
    <header class="pb-6 pt-8">
        <div class="navbar bg-base-100">
            <div class="navbar-start">

                <div class="navbar-center">
                    <a class="btn btn-ghost normal-case text-xl">Registro de Productos al Inventario</a>
                </div>

            </div>
        </div>
    </header>
    <div class="form-row form-row shadow-md bg-auto rounded-lg" style="margin: 2ch; padding: 3ch">
        <div class="grid grid-cols-2 gap-4">
            <label for="Nombre">Descripcion</label>
            <input type="text" placeholder="Descripcion" name="descripcion" class="input input-bordered"
                value="{{ $datos->descripcion ?? old('descripcion') }}">

            <label for="Nombre">Cantidad</label>
            <input type="text" placeholder="Cantidad" name="cantidad" class="input input-bordered"
                value="{{ $datos->cantidad ?? old('cantidad') }}">

            <label for="Nombre">Nombre del Producto</label>
            <select class="input input-bordered" name="cod_producto_fk" id="" option="Medida">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombres }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-outline btn-error" href="{{ url('/Inventario/Show') }}" class="mb-10">Cancelar</a>
    </div>
</div>
