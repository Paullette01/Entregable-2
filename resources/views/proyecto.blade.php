@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav') 
@extends('layouts.head')

@section('content')
<!-- proyectos.blade.php -->

<h1>Proyectos</h1>

<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Creador</th>
            <th>Fecha de Creación</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyecto as $proyecto)
        <tr>
            <td>{{ $proyecto->titulo }}</td>
            <td>{{ $proyecto->creador }}</td>
            <td>{{ $proyecto->fecha_creacion }}</td>
            <td>{{ $proyecto->estado_trabajo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
