<header class="pb-6 pt-8">
    <div class="navbar bg-base-100">
        <div class="navbar-start">
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost normal-case text-xl">Inicio</a>
        </div>
    </div>
</header>
{{-- <div class="alert alert-info shadow-lg">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            class="stroke-current flex-shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>New software update available.</span>
    </div>
</div> --}}
<input hidden {{-- wire:model="valor" --}} id="valor" class="input input-bordered w-full mb-5 shadow-lg" type="text"
    placeholder="Busqueda...">

{{-- Tarjetas de ventas --}}
<div class="grid grid-cols-3 gap-2">
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src=https://st2.depositphotos.com/1010142/6593/i/450/depositphotos_65939199-stock-photo-traditional-bolivian-api-with-pastel.jpg"
                alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Comida!</h2>
            <p>Comida</p>
            <div class="card-actions">
                <a href="{{ url('/Ventas/Show') }}" class="btn btn-primary">Vender</a>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://st4.depositphotos.com/19645534/29499/i/450/depositphotos_294990468-stock-photo-bekasi-indonesia-august-13th-2019.jpg"
                alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Papas!</h2>
            <p>Papas</p>
            <div class="card-actions">
                <a href="{{ url('/Ventas/Show') }}" class="btn btn-primary">Vender</a>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://st.depositphotos.com/1005573/2928/i/450/depositphotos_29285229-stock-photo-super-food.jpg"
                alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Platillos!</h2>
            <p>Platillos</p>
            <div class="card-actions">
                <a href="{{ url('/Ventas/Show') }}" class="btn btn-primary">Vender</a>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://static6.depositphotos.com/1014511/575/i/450/depositphotos_5755752-stock-photo-healthy-eating.jpg"
                alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Vegetales!</h2>
            <p>Vegetales</p>
            <div class="card-actions">
                <a href="{{ url('/Ventas/Show') }}" class="btn btn-primary">Vender</a>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://st4.depositphotos.com/13349494/31092/i/600/depositphotos_310925738-stock-photo-fresh-clean-water-transparent-glass.jpg"
                alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Agua!</h2>
            <p>Agua</p>
            <div class="card-actions">
                <a href="{{ url('/Ventas/Show') }}" class="btn btn-primary">Vender</a>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://st.depositphotos.com/1006597/1623/i/450/depositphotos_16234965-stock-photo-fresh-citrus-juices.jpg"
                alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Jugos!</h2>
            <p>Jugos naturales</p>
            <div class="card-actions">
                <a href="{{ url('/Ventas/Show') }}" class="btn btn-primary">Vender</a>
            </div>
        </div>
    </div>
</div>
