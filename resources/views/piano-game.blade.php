<!-- resources/views/piano-game.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Juego de Piano</h1>
    <!-- Aquí puedes agregar el contenido de tu juego de piano -->
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
