@extends('layouts.footer')
@extends('layouts.content')
@extends('layouts.nav')
@extends('layouts.head')

@section('content')
    @auth
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-4 mb-8">
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6">
                        <div class="text-white text-xl font-bold mb-4">Clientes Registrados</div>
                        <div class="text-white text-4xl font-bold">{{ $clientesCount }}</div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-4 mb-8">
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6">
                        <div class="text-white text-xl font-bold mb-4">Colaboradores Registrados</div>
                        <div class="text-white text-4xl font-bold">{{ $colaboradoresCount }}</div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
