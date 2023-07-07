@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav') 
@extends('layouts.head')

@section('content')

<div class="flex justify-center mt-5 mb-5">
    <a href="{{route('cliente.formulario')}}" class="p-5 text-white bg-gray-800 rounded-xl font-bold" >Registrar nuevo cliente</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($clientes as $cliente)
            <div class="bg-white rounded-lg shadow-lg">
                <img src="{{ asset('uploads/' . $cliente->imagen) }}" alt="Imagen del cliente" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-medium mb-2">{{ $cliente->nombre }}</h3>
                    <p class="text-gray-600 mb-2">{{ $cliente->empresa }}</p>
                    <p class="text-gray-600 mb-4">{{ $cliente->rol }}</p>
                    <div class="flex justify-end">
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-md mr-2">Enviar mensaje</a>
                        <a href="#" class="px-4 py-2 bg-gray-500 text-white rounded-md">Ver perfil</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection