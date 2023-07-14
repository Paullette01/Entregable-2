@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav') 
@extends('layouts.head')

@section('content')

<div class="flex justify-center mt-5 mb-5">
    <a href="{{ route('proyecto.formulario') }}" class="p-5 text-white bg-gray-800 rounded-xl font-bold">Registrar nuevo proyecto</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($proyectos as $proyecto)
        <div class="bg-white rounded-lg shadow-lg">
            <img src="{{ asset('uploads/' . $proyecto->imagen) }}" alt="Imagen del proyecto" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-medium mb-2">{{ $proyecto->titulo }}</h3>
                <p class="text-gray-600 mb-2">{{ $proyecto->estado_trabajo }}</p>
                <p class="text-gray-600 mb-4">{{ $proyecto->fecha_limite }}</p>
                <div class="flex justify-end">
                    <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-md mr-2">Editar</a>
                    <a href="#" class="px-4 py-2 bg-gray-500 text-white rounded-md">Ver detalles</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
