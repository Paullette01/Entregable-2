<!-- formulario-colaborador.blade.php -->

@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav')
@extends('layouts.head')

@section('content')

<div class="flex justify-center mt-5 mb-5">
    <a href="{{ route('colaborador.formulario') }}" class="p-5 text-white bg-gray-800 rounded-xl font-bold">Registrar nuevo colaborador</a>
</div>

<form id="formulario" action="{{ route('colaborador.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
    @csrf

    <div class="mb-4">
        <label for="nombre" class="block">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="especialidad" class="block">Especialidad:</label>
        <input type="text" name="especialidad" id="especialidad" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="numero_empleado" class="block">Employee ID:</label>
        <input type="text" name="numero_empleado" id="numero_empleado" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="fecha_ingreso" class="block">Fecha de Ingreso:</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="telefono" class="block">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="correo" class="block">Email:</label>
        <input type="email" name="correo" id="correo" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="fecha_nacimiento" class="block">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="direccion" class="block">Dirección:</label>
        <input type="text" name="direccion" id="direccion" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="genero" class="block">Género:</label>
        <select name="genero" id="genero" class="border border-gray-300 rounded-md px-3 py-2 w-full">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>
    </div>

    <input type="hidden" name="imagen" id="imagen" class="border border-gray-300 rounded-md px-3 py-2 w-full">


</form>

<div class="flex items-center flex-col" >
    <form action ="{{route('imagenes.store')}}"   method="POST" class="dropzone mt-5 flex justify-center items-start flex-col" enctype="multipart/form-data" id="dropzone" >
        @csrf
    </form>

    <button id="btnEnviar" style="width: fit-content;" type="submit" class="block w-full px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">Guardar</button>

</div>

<script>
document.getElementById("btnEnviar").addEventListener("click", function(event) {
event.preventDefault(); // Evita que se realice la acción por defecto del botón (enviar el formulario)
document.getElementById("formulario").submit(); // Envía el formulario con el id "formularioCrearProducto"
});
</script>

@endsection
