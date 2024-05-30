<!-- resources/views/mejores-juegos.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Mejores Juegos</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-blue-300 p-4 shadow rounded-lg text-center">
             <img src="{{ asset('images/piano.jpg') }}" alt="Imagen" class="w-[50vh]" >
             <a href="{{ route('piano-game') }}" target="_blank" class="inline-block bg-blue-500 text-white px-4 py-2 mt-6 rounded">Jugar</a>
        </div>
        <div class="bg-red-300 p-4 shadow rounded-lg text-center">
        <img src="{{ asset('images/calc.png') }}" alt="Imagen" class="w-[50vh]">
        <a href="{{ route('math-game') }}" target="_blank" class="inline-block bg-blue-500 text-white px-4 py-2 mt-12 rounded">Jugar</a>
        </div>
        <div class="bg-yellow-300 p-4 shadow rounded-lg text-center">
        <img src="{{ asset('images/aje.png') }}" alt="Imagen" class="w-[50vh]">
            <button class="bg-blue-500 text-white px-4 py-2 mt-12 rounded">Jugar</button>
        </div>
        <div class="bg-green-200 p-4 shadow rounded-lg text-center">
             <img src="{{ asset('images/tierra.jpg') }}" alt="Imagen" class="w-[50vh]" >
            <button class="bg-blue-500 text-white px-4 py-2 mt-12 rounded">Jugar</button>
        </div>
        <div class="bg-purple-300 p-4 shadow rounded-lg text-center">
        <img src="{{ asset('images/ci.png') }}" alt="Imagen" class="w-[50vh]">
            <button class="bg-red-500 text-white px-4 py-2 mt-12 rounded">Jugar</button>
        </div>
        <div class="bg-gray-800 p-4 shadow rounded-lg text-center">
        <img src="{{ asset('images/lon.jpg') }}" alt="Imagen" class="w-[50vh]">
            <button class="bg-blue-500 text-white px-4 py-2 mt-12 rounded">Jugar</button>
        </div>
    </div>
</div>
<footer class="bg-gray-800 text-white py-6 flex flex-row gap-52">
    

    <div class="w-96">
         <img src="{{ asset('images/su.png') }}" alt="Imagen">
        </div>
        <div class="flex flex-row flex-1 items-center justify-between">
        <div>
            <h3 class="text-lg font-semibold mb-2">Contacto</h3>
            <p class="text-sm">Dirección: Calle Ejemplo, Ciudad, País</p>
            <p class="text-sm">Teléfono: +123456789</p>
            <p class="text-sm">Correo electrónico: info@educagames.com</p>
        </div>
        
        <!-- Enlaces de navegación -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Enlaces</h3>
            <ul class="list-none">
                <li><a href="#" class="text-sm">Inicio</a></li>
                <li><a href="#" class="text-sm">Acerca de nosotros</a></li>
                <li><a href="#" class="text-sm">Juegos</a></li>
                <li><a href="#" class="text-sm">Contacto</a></li>
            </ul>
        </div>

        <!-- Redes sociales -->
        <div>
            <h3 class="text-lg font-semibold mb-2 pr-10">Redes Sociales</h3>
            <div class="flex space-x-4">
                <a href="#" class="text-sm"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-sm"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-sm"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
</div>
    

</footer>
@endsection
