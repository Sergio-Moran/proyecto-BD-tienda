<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">Inventario</h1>
<br>
<div class="absolute top-0 right-16">
    <a href="{{url('/Inventario/create')}}" style="margin-top: 2ch" class="btn btn-warning" style="margin-r">Agregar Producto ➕</a>
</div>

<br>

<div class="overflow-x-auto">
    <table class="table table-zebra w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Descripcion</th>
          <th>Cantidad</th>
          <th>Nombre del Producto</th>
        </tr>
      </thead>
      <tbody>
        @foreach($inventario_productos as $inventario)
        <tr>
          <th>{{$inventario->codigo}}</th>
          <th>{{$inventario->descripcion}}</th>
          <td>{{$inventario->cantidad}}</td>
          <td>{{$inventario->nombres}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>