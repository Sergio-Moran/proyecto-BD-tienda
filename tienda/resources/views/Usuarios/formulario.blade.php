<div>
    <header class="pb-6 pt-8">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="navbar-center">
                    <a class="btn btn-ghost normal-case text-xl">Registro de Usuarios</a>
                </div>

            </div>
        </div>
    </header>
    <div class="form-row form-row shadow-md bg-auto rounded-lg " style="margin: 2ch;  padding: 3ch">
        <div class="grid grid-cols-2 gap-4">
            <label for="Nombre">Nombre Usuario</label>
            <input type="text" name="name" class="input input-bordered" required>

            <label for="Apellidos">Apellidos</label>
            <input type="text" name="apellidos" class="input input-bordered" required>

            <label for="Telefono">Telefono</label>
            <input type="number" name="telefono" class="input input-bordered" required>

            <label for="Direccion">Dirección</label>
            <input type="text" name="direccion" class="input input-bordered" required>

            <label for="dpi">DPI</label>
            <input type="number" name="dpi" class="input input-bordered" required>

            <label for="Correo">Correo</label>
            <input type="email" name="email" class="input input-bordered" required>
            
            <label for="Nombre">Contraseña</label>
            <input type="password" name="password" class="input input-bordered" required>

            <label for="Nombre">Confirmar la Contraseña</label>
            <input type="password" name="password" class="input input-bordered" required>

            <label for="rol">Rol</label>
            <select class="input input-bordered" name="rol" id="rol">
                <option value="Administrador">Administrador</option>
                <option value="Trabajador">Trabajador</option>
                <option value="Cliente">Cliente</option>
            </select>
        </div>

    </div>
    <br>
    <div class="grid justify-items-center mt-5" style="margin: 2ch">
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</div>
