<body>

<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 k}sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <a href="#" class="flex items-center px-2 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">
                    <!-- Logo o enlace del sitio -->
                </a>
            </div>

            <div class="flex items-center">
            @guest
            <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>   <a href="{{route('register.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a>

                <a href="{{route('login.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Iniciar sesión
                </a>
                @endguest
                @auth
                <a href="{{route('clientes.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Clientes</a>
                <a href="{{route('colaborador.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Colaboradores</a>

                <a href="{{route('proyecto.index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Proyectos</a>
                <a href="{{route('welcome')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Bienvenido {{auth()->user()->name}}</a>

                <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" type="submit">Cerrar sesión</button>
</form>

                @endauth
            </div>
        </div>
    </div>
</nav>
