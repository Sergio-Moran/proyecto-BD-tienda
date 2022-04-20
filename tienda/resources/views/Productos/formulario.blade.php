<div>
    <header class="pb-6 pt-8">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
            
            <div class="navbar-center">
                <a class="btn btn-ghost normal-case text-xl">Registro de Productos</a>
            </div>
        
        </div>
        </div>
    </header>
    <div class="form-row form-row shadow-md bg-auto rounded-lg " style="margin: 2ch;  padding: 3ch">
        <div class="grid grid-cols-2 gap-4">
            <label for="Nombre">Nombre Producto</label>
            <input type="text" placeholder="Nombre Producto" name="nombres" class="input input-bordered">
            
            <label for="Nombre">Precio de Venta</label>
            <input type="text" placeholder="Q" name="precio_venta" class="input input-bordered">
            
            <label for="Nombre">Precio de Compra</label>
            <input type="text" placeholder="Q" name="precio_compra" class="input input-bordered">
            
            <label for="Nombre">Proveedor</label>
            <select class="input input-bordered" name="cod_proveedor_fk" id="cod_proveedor_fk" option="Medida">
                @foreach ($proveedores as $proveedor)
                <option value="{{$proveedor->codigo}}">{{$proveedor->nombres}}</option>    
                @endforeach
            </select>

            <label for="Nombre">Unidad de Medida</label>
            <select class="input input-bordered" name="cod_unidad_medida_fk" id="cod_unidad_medida_fk" option="Medida">
                @foreach ($unidad_medidas as $unidad)
                <option value="{{$unidad->codigo}}">{{$unidad->descripcion}}</option>    
                @endforeach
            </select>
        </div>

    </div>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-outline btn-error" href="{{ url('/Productos/Show') }}" class="mb-10">Cancelar</a>

    </div>
</div>