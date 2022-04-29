<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">Proveedores</h1>
<br>
<div class="absolute top-0 right-16">
    <a href="{{url('/Proveedor/create')}}" style="margin-top: 2ch" class="btn btn-warning" style="margin-r">Agregar Proveedor ➕</a>
</div>

<br>

<div class="overflow-x-auto">
    <table class="table table-zebra w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Producto</th>
          <th>Precio</th>
        </tr>
      </thead>
      
      <tbody>
        
        {{-- @foreach($proveedores as $proveedor)
        <tr>
            <th>{{$proveedor->nombreProducto}}</th>
            <td>{{$proveedor->precio_venta}}</td>
            <td>{{$proveedor->precio_compra}}</td>
            <td>{{$proveedor->estado}}</td>
            <td>{{$proveedor->nombreProveedor}}</td>
            <td>{{$proveedor->descripcion}}</td>
            <th>{{$proveedor->codigo}}</th>
        </tr>
        @endforeach --}}
      </tbody>
    </table>
  </div>