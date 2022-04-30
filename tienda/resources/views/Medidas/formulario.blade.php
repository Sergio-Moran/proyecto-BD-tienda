<div>
    <header class="pb-6 pt-8">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="navbar-center">
                    <a class="btn btn-ghost normal-case text-xl">Registro de Medidas</a>
                </div>

            </div>
        </div>
    </header>
    <div class="form-row form-row shadow-md bg-auto rounded-lg " style="margin: 2ch;  padding: 3ch">
        <div class="grid grid-cols-2 gap-4">
            <label for="Nombre">Nombres</label>
            <input type="text" name="nombres" class="input input-bordered"
                value="{{ $datos->nombres ?? old('nombres') }}" required>

            <label for="Apellidos">Apellidos</label>
            <input type="text" name="apellidos" class="input input-bordered"
                value="{{ $datos->apellidos ?? old('apellidos') }}" required>

            <label for="Telefono">Teléfono</label>
            <input type="number" name="telefono" class="input input-bordered"
                value="{{ $datos->telefono ?? old('telefono') }}" required>

            <label for="Direccion">Dirección</label>
            <input type="text" name="direccion" class="input input-bordered"
                value="{{ $datos->direccion ?? old('direccion') }}" required>

            <label for="Correo">Correo</label>
            <input type="email" name="correo" class="input input-bordered"
                value="{{ $datos->correo ?? old('correo') }}" required>

        </div>

    </div>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5" style="margin: 2ch">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-outline btn-error" href="{{ url('/Medida') }}" class="mb-10">Cancelar</a>
    </div>
</div>
