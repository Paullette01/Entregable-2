@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav') 
@extends('layouts.head')

@section('content')
<form action="{{ route('clientes.store') }}" method="POST" class="max-w-md mx-auto" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="empresa" class="block mb-2 font-medium">Empresa:</label>
        <input type="text" id="empresa" name="empresa" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('empresa') border-red-500 @enderror">
        @error('empresa')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="rol" class="block mb-2 font-medium">Rol:</label>
        <input type="text" id="rol" name="rol" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('rol') border-red-500 @enderror">
        @error('rol')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="nombre" class="block mb-2 font-medium">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('nombre') border-red-500 @enderror">
        @error('nombre')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="imagen" class="block mb-2 font-medium">Imagen:</label>
        <input type="file" id="imagen" name="imagen" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('imagen') border-red-500 @enderror">
        @error('imagen')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="employee_id" class="block mb-2 font-medium">ID de empleado:</label>
        <input type="text" id="employee_id" name="employee_id" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('employee_id') border-red-500 @enderror">
        @error('employee_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="telefono" class="block mb-2 font-medium">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('telefono') border-red-500 @enderror">
        @error('telefono')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block mb-2 font-medium">Email:</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('email') border-red-500 @enderror">
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="fecha_nacimiento" class="block mb-2 font-medium">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('fecha_nacimiento') border-red-500 @enderror">
        @error('fecha_nacimiento')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="direccion" class="block mb-2 font-medium">Dirección:</label>
        <textarea id="direccion" name="direccion" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('direccion') border-red-500 @enderror"></textarea>
        @error('direccion')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="genero" class="block mb-2 font-medium">Género:</label>
        <select id="genero" name="genero" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500 @error('genero') border-red-500 @enderror">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        @error('genero')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="block w-full px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">Guardar</button>
</form>




@endsection