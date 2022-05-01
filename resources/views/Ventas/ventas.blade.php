<form method="POST" action="{{ url('/Ventas/') }}"  role="form" enctype="multipart/form-data">
@csrf
<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 40%; font-size: 2rem">Ventas</h1>
<br>

<div class="form-row form-row shadow-md bg-auto rounded-lg" style="margin: 2ch; padding: 2ch">
    <div class="grid grid-cols-2 gap-4">
        <label for="Nombre">Cliente</label>
        <select class="input input-bordered" name="cliente" id="" option="Medida">
            <option value="1">Juan Rodriguez</option>    
        </select>

        <label for="Nombre">Ciudad</label>
        <input type="text" placeholder="Cantidad" name="ciudad" class="input input-bordered">

        <label for="Nombre">Descripcion</label>  
        <select class="input input-bordered" name="descripcion" id="" option="Medida">
        @foreach ($productos as $producto)
        <option value="{{$producto->codigo}}">{{$producto->nombres}}</option>    
        @endforeach    
        </select>          
        
        <label for="Nombre">Cantidad</label>
        <input type="text" placeholder="Cantidad" name="cantidad" class="input input-bordered">
</div>

</div>

<div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
    <button class="btn btn-primary" type="submit">Agregar</button>
</div>
<div class="overflow-x-auto" style="padding: 10%; padding-top: 0%">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Job</th>
          <th>Favorite Color</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        <tr>
          <th>1</th>
          <td>Cy Ganderton</td>
          <td>Quality Control Specialist</td>
          <td>Blue</td>
        </tr>
        <!-- row 2 -->
        <tr class="active">
          <th>2</th>
          <td>Hart Hagerty</td>
          <td>Desktop Support Technician</td>
          <td>Purple</td>
        </tr>
        <!-- row 3 -->
        <tr>
          <th>3</th>
          <td>Brice Swyre</td>
          <td>Tax Accountant</td>
          <td>Red</td>
        </tr>
      </tbody>
    </table>
  </div>

<div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
    <button class="btn btn-primary" type="button" id="confirmar">Confirmar</button>
</div>
  </form>
