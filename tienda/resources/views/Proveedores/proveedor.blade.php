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
          <th>Correo</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Editar</th>
        </tr>
      </thead>
      
      <tbody>
        
        @foreach($proveedores as $proveedor)
        <tr>
            <th>{{$proveedor->codigo}}</th>
            <td>{{$proveedor->nombres}} {{$proveedor->apellidos}}</td>
            <td>{{$proveedor->correo}}</td>
            <td>{{$proveedor->telefono}}</td>
            <td>{{$proveedor->direccion}}</td>
            <td></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>