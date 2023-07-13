@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav') 
@extends('layouts.head')

@section('content')
<!-- project-form.blade.php -->
<!-- project-form.blade.php -->

<form action="{{ route('proyecto.store') }}" method="POST">
    @csrf

    <label for="costo_total">Costo Total:</label>
    <input type="text" name="costo_total" id="costo_total">

    <label for="horas_total">Total de Horas para Acabarlo:</label>
    <input type="text" name="horas_total" id="horas_total">

    <label for="fecha_creacion">Fecha de Creación:</label>
    <input type="date" name="fecha_creacion" id="fecha_creacion">

    <label for="creador">Creador:</label>
    <input type="text" name="creador" id="creador">

    <label for="estado_trabajo">Estado del Trabajo:</label>
    <select name="estado_trabajo" id="estado_trabajo">
        <option value="En Proceso">En Proceso</option>
        <option value="Terminado">Terminado</option>
    </select>

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo">

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" rows="4"></textarea>

    <label for="fecha_limite">Fecha Límite:</label>
    <input type="date" name="fecha_limite" id="fecha_limite">

    <label for="colaboradores">Colaboradores:</label>
    <select name="colaboradores[]" id="colaboradores" multiple>
        <!-- Opciones de los colaboradores -->
        <option value="colaborador1">Colaborador 1</option>
        <option value="colaborador2">Colaborador 2</option>
        <!-- Agrega más opciones según tus necesidades -->
    </select>

    <label for="lideres_proyecto">Líderes de Proyecto:</label>
    <select name="lideres_proyecto[]" id="lideres_proyecto" multiple>
        <!-- Opciones de los líderes de proyecto -->
        <option value="lider1">Líder 1</option>
        <option value="lider2">Líder 2</option>
        <!-- Agrega más opciones según tus necesidades -->
    </select>

    <label for="equipo">Equipo:</label>
    <select name="equipo[]" id="equipo" multiple disabled>
        <!-- Opciones del equipo -->
        <option value="equipo1">Equipo 1</option>
        <option value="equipo2">Equipo 2</option>
        <!-- Agrega más opciones según tus necesidades -->
    </select>

    <label for="tareas">Tareas:</label>
    <textarea name="tareas" id="tareas" rows="4"></textarea>

    <label for="barra_progreso">Barra de Progreso:</label>
    <input type="range" name="barra_progreso" id="barra_progreso" min="0" max="100">

    <label for="imagenes">Imágenes:</label>
    <input type="file" name="imagenes[]" id="imagenes" multiple accept="image/*">

    <label for="archivos">Archivos:</label>
    <input type="file" name="archivos[]" id="archivos" multiple>

    <button type="submit">Crear Proyecto</button>
</form>
