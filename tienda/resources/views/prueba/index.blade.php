
    <a class="navbar-brand rounded-lg p-2 hover:bg-green-600 text-white" href="{{ url('prueba/index') }}">
        Prueba
    </a>
    <div>hola</div>
    <div class="order-2 md:order-3">
        <a class="dropdown-item rounded-lg p-2 hover:bg-red-600 text-white" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar Sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <div>
        <button class="btn">Button</button>
        <button class="btn btn-primary">Button</button>
        <button class="btn btn-secondary">Button</button>
        <button class="btn btn-accent">Button</button>
        <button class="btn btn-ghost">Button</button>
        <button class="btn btn-link">Button</button>
    </div>
