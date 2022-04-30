<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">Cliente</h1>
<br>
<div class="absolute top-0 right-16">
    <a href="{{url('/Cliente/create')}}" style="margin-top: 2ch" class="btn btn-warning" style="margin-r">Agregar Cliente ➕</a>
</div>

<br>

<div class="overflow-x-auto">
    <table class="table table-zebra w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Nombres</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Nit</th>
          <th>DPI</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clientes as $cliente)
        <tr>
          <th>{{$cliente->codigo}}</th>
          <th>{{$cliente->nombre}} {{$cliente->apellido}}</th>
          <td>{{$cliente->correo}}</td>
          <td>{{$cliente->telefono}}</td>
          <td>{{$cliente->direccion}}</td>
          <td>{{$cliente->nit}}</td>
          <td>{{$cliente->dpi}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>