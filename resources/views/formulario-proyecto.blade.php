<!-- formulario-proyecto.blade.php -->

@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav') 
@extends('layouts.head')

@section('content')

<div class="flex justify-center mt-5 mb-5">
    <a href="{{ route('proyecto.formulario') }}" class="p-5 text-white bg-gray-800 rounded-xl font-bold">Registrar nuevo proyecto</a>
</div>

<form action="{{ route('proyecto.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
    @csrf

    <div class="mb-4">
        <label for="costo_total" class="block">Costo Total:</label>
        <input type="text" name="costo_total" id="costo_total" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="horas_total" class="block">Total de Horas para Acabarlo:</label>
        <input type="text" name="horas_total" id="horas_total" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="fecha_creacion" class="block">Fecha de Creación:</label>
        <input type="date" name="fecha_creacion" id="fecha_creacion" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="creador" class="block">Creador:</label>
        <input type="text" name="creador" id="creador" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="estado_trabajo" class="block">Estado del Trabajo:</label>
        <select name="estado_trabajo" id="estado_trabajo" class="border border-gray-300 rounded-md px-3 py-2 w-full">
            <option value="En Proceso">En Proceso</option>
            <option value="Terminado">Terminado</option>
        </select>
    </div>

    <div class="mb-4">
        <label for="titulo" class="block">Título:</label>
        <input type="text" name="titulo" id="titulo" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="descripcion" class="block">Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="4" class="border border-gray-300 rounded-md px-3 py-2 w-full"></textarea>
    </div>

    <div class="mb-4">
        <label for="fecha_limite" class="block">Fecha Límite:</label>
        <input type="date" name="fecha_limite" id="fecha_limite" class="border border-gray-300 rounded-md px-3 py-2 w-full">
    </div>

    <div class="mb-4">
        <label for="colaboradores" class="block">Colaboradores:</label>
        <select name="colaboradores[]" id="colaboradores" multiple class="border border-gray-300 rounded-md px-3 py-2 w-full">
            <!-- Opciones de los colaboradores -->
            <option value="colaborador1">Colaborador 1</option>
            <option value="colaborador2">Colaborador 2</option>
            <!-- Agrega más opciones según tus necesidades -->
        </select>
    </div>

    <div class="mb-4">
        <label for="lideres_proyecto" class="block">Líderes de Proyecto:</label>
        <select name="lideres_proyecto[]" id="lideres_proyecto" multiple class="border border-gray-300 rounded-md px-3 py-2 w-full">
            <!-- Opciones de los líderes de proyecto -->
            <option value="lider1">Líder 1</option>
            <option value="lider2">Líder 2</option>
            <!-- Agrega más opciones según tus necesidades -->
        </select>
    </div>

    <div class="mb-4">
        <label for="equipo" class="block">Equipo:</label>
        <select name="equipo[]" id="equipo" multiple disabled class="border border-gray-300 rounded-md px-3 py-2 w-full">
            <!-- Opciones del equipo -->
            <option value="equipo1">Equipo 1</option>
            <option value="equipo2">Equipo 2</option>
            <!-- Agrega más opciones según tus necesidades -->
        </select>
    </div>

    <div class="mb-4">
        <label for="tareas" class="block">Tareas:</label>
        <textarea name="tareas" id="tareas" rows="4" class="border border-gray-300 rounded-md px-3 py-2 w-full"></textarea>
    </div>

    <div class="mb-4">
        <label for="barra_progreso" class="block">Barra de Progreso:</label>
        <input type="range" name="barra_progreso" id
