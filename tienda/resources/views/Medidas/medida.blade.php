<h1 class="btn btn-ghost normal-case text-xl" style="margin-top: 0.5ch; margin-left: 30%; font-size: 2rem">Unidades de
    Medida
</h1>
<br>
<div class="absolute top-0 right-16">
    <a href="{{ url('/Medida/create') }}" style="margin-top: 2ch" class="btn btn-warning" style="margin-r">Agregar
        Medidas ➕</a>
</div>

<br>

<div class="overflow-x-auto" style="margin: 2ch;  padding: 3ch">
    <table class="table table-zebra w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>Editar</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($medidas as $medida)
                <tr>
                    <th>{{ $medida->id }}</th>
                    <td>{{ $medida->descripcion }}</td>
                    <td>
                        <div class="grid justify-items-center mt-5" style="margin: 2ch">
                            <a class="btn btn-outline btn-error"
                                href="{{ url('/Medida/' . $medida->id . '/edit') }}"
                                class="mb-10">Editar</a>
                            {{-- <a class="btn btn-outline btn-error" onclick="return confirm('¿Desea eliminar el registro?')"
                                type="submit" href="{{ url('/Medida/' . $medida->id . '/destroy') }}"
                                class="mb-10">Eliminar</a> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
