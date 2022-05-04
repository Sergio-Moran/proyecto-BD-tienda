<div class="place-self-auto grid justify-items-center " style="margin: 2ch;  padding: 3ch">
    <div class="card w-96 bg-base-100 shadow-xl flex flex-col space-y-4 ">
        <div class="card-actions justify-center">
            <a href="{{ url('Facturas/index') }}" class="btn btn-primary">Reporte de Facturas</a>
        </div>
        <div class="card-actions justify-center">
            <a href="{{ url('Cliente/Reportes/datos') }}" target="blank" class="btn btn-primary">Venta de productos por
                periodo de tiempo</a>
        </div>
        <div class="card-actions justify-center">
            <a href="{{ url('/ReporteDos') }}" target="blank" class="btn btn-primary">Reporde de los productos más
                solicitados</a>
        </div>
        <div class="card-actions justify-center">
            <a href="{{ url('/ReporteTres') }}" target="blank" class="btn btn-primary">Disponibilidad de Inventario
                actual</a>
        </div>
        <div class="card-actions justify-center">
            <a href="{{ url('/ReporteCuatro') }}" target="blank" class="btn btn-primary">Reporte de clientes con
                mayores compras</a>
        </div>
    </div>
</div>
