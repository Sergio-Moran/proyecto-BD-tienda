<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">PERFIL</h1>
<br>

<div class="form-row form-row shadow-md bg-auto rounded-lg " style="margin: 2ch;  padding: 8ch">
    <div class="grid grid-cols-2 gap-4">
        <div class="avatar grid justify-items-center">
            <div class="w-29 rounded">
                <img src="https://api.lorem.space/image/face?hash=92048" />
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div class="grid justify-items-center">
                @foreach ($usuarios as $usuario)
                    <label for="Nombre" class="input-group input-group-lg">Nombre</label>
                    <input type="text" placeholder="Nombre" value="{{ $usuario->nombres }}"
                        class="input input-bordered" readonly>

                    <label for="apellidos" class="input-group input-group-lg">Apellidos</label>
                    <input type="text" value="{{ $usuario->apellidos }}" class="input input-bordered" readonly>

                    <label for="Puesto" class="input-group input-group-lg">Puesto</label>
                    <input type="text" value="{{ $usuario->rol }}" class="input input-bordered" readonly>

                    <label for="Puesto" class="input-group input-group-lg">Correo</label>
                    <input type="text" value="{{ $usuario->email }}" class="input input-bordered" readonly>

                    <label for="dpi" class="input-group input-group-lg">DPI</label>
                    <input type="text" value="{{ $usuario->dpi }}" class="input input-bordered" readonly>

                    <label for="telefono" class="input-group input-group-lg">Teléfono</label>
                    <input type="text" value="{{ $usuario->telefono }}" class="input input-bordered" readonly>
                @endforeach
            </div>
        </div>
    </div>
</div>
