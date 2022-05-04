    <h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 35%; font-size: 2rem">
            Datos Reporte Uno</h1>
    <br>
    <div class="form-row form-row shadow-md bg-auto rounded-lg" style="margin: 2ch; padding: 2ch">
      <div class="grid grid-cols-2 gap-4">
          <label for="Nombre">Fecha Inicial</label>
          <input type="date" placeholder="Fecha Inicial" name="inicio" class="input input-bordered">
         
          <label for="Nombre">Fecha Final</label>
          <input type="date" placeholder="Fecha Final" name="final" class="input input-bordered">
  
  </div>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-3 mt-5" style="margin: 2ch">
      <button href="{{ url('/ReporteUno') }}" class="btn btn-primary" type="submit">Confirmar Datos</button>
    </div>