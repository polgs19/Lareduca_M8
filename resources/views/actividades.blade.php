<!-- resources/views/piano-game.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Actividades</h1>
    
    <!-- Actividad 1 -->
    <div class="flex items-center mb-8 p-4 border rounded-lg shadow-lg gap-5">
           <img src="{{ asset('images/mu.png') }}" alt="Imagen" class="w-20" >
        <div>
            <h2 class="text-xl font-semibold">Práctica 1: Introducción al Piano</h2>
            <p class="mt-2 text-gray-600">En esta práctica aprenderás los conceptos básicos del piano, incluyendo la identificación de teclas y acordes simples.</p>
        </div>
    </div>

    <!-- Actividad 2 -->
    <div class="flex items-center mb-8 p-4 border rounded-lg shadow-lg gap-5">
     <img src="{{ asset('images/gym.png') }}" alt="Imagen" class="w-20" >
        <div>
            <h2 class="text-xl font-semibold">Práctica 2: Fisico Avanzado</h2>
            <p class="mt-2 text-gray-600">Aprenderás a mejorar tus habitos fisicos, y potenciar tus aptitudes.</p>
        </div>
    </div>

    <!-- Actividad 3 -->
    <div class="flex items-center mb-8 p-4 border rounded-lg shadow-lg gap-5">
    <img src="{{ asset('images/ido.png') }}" alt="Imagen" class="w-20" >
        <div>
            <h2 class="text-xl font-semibold">Práctica 3: Analisis de Idiomas</h2>
            <p class="mt-2 text-gray-600">Explora diferentes tipos de lenguas y cómo combinarlos en progresiones para crear armonías ricas y variadas.</p>
        </div>
    </div>

    <!-- Actividad 4 -->
    <div class="flex items-center mb-8 p-4 border rounded-lg shadow-lg gap-5">
    <img src="{{ asset('images/pro.png') }}" alt="Imagen" class="w-20" >
        <div>
            <h2 class="text-xl font-semibold">Práctica 4: Programacion Avanzada</h2>
            <p class="mt-2 text-gray-600">Desarrolla tu sentido del ritmo practicando diferentes lenguajes.</p>
        </div>
    </div>

    <!-- Actividad 5 -->
    <div class="flex items-center mb-8 p-4 border rounded-lg shadow-lg gap-5">
    <img src="{{ asset('images/hard.png') }}" alt="Imagen" class="w-20" >
        <div>
            <h2 class="text-xl font-semibold">Práctica 5: Montaje de equipos</h2>
            <p class="mt-2 text-gray-600">Aprende a improvisar montajes de equipos mas anticuados.</p>
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
