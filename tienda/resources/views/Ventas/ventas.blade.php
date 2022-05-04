<form method="POST" action="{{ url('/Ventas/') }}"  role="form" enctype="multipart/form-data" style="margin: 2ch;  padding: 3ch">
  @csrf
  <h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 35%; font-size: 2rem">Datos de la Factura</h1>
  <br>
  <div class="form-row form-row shadow-md bg-auto rounded-lg" style="margin: 2ch; padding: 2ch">
    <div class="grid grid-cols-2 gap-4">
        <label for="Nombre">Cliente</label>
        <select class="input input-bordered" name="cod_cliente_fk" id="" option="Medida">
          @foreach ($clientes as $cliente)
          <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>    
          @endforeach     
        </select>

        <label for="Nombre">Ciudad</label>
        <input type="text" placeholder="Ciudad" name="ciudad" class="input input-bordered">

        <label for="Producto">Descripcion</label>  
        <input type="text" placeholder="Descripcion" name="descripcion" class="input input-bordered">
</div>
  <div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
    <button class="btn btn-primary" type="submit">Confirmar Datos</button>
  </div>
</form>