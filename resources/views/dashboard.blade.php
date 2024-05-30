@extends('layouts.app')

@section('content')
<div class="bg-gray-200 flex flex-col gap-20 px-4 py-8 ">
    <div class="py-12 h-full ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Has iniciado sesion!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 flex flex-col gap-20 px-4 py-8 ">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-2">Bienvenido a EDUCAGAMES</h1>
            <p class="text-gray-600">¡Aprende jugando, crece aprendiendo!</p>
        </div>

        <div class="mb-8  ">
            <h2 class="text-2xl  font-semibold text-center text-gray-800 mb-4">¿QUÉ TE OFRECEMOS?</h2>
            <p class="text-gray-600 text-lg text-center">En Educagames, ofrecemos una amplia variedad de juegos
                diseñados para educar y entretener a niños y adultos. Nuestros juegos cubren temas como matemáticas,
                ciencias, idiomas y más. <br></br>¡Aprende mientras juegas!</p>
        </div>

        <div class="flex flex-row justify-center ml-[25vh] items-center w-[150vh] gap-5">
            <img class="h-[30vh] " src="{{ asset('images/educa.jpg') }}" alt="Imagen">
            <div
                class="mb-8 p-10 w-[90vh] bg-blue-100 shadow-lg rounded-lg flex flex-col justify-center items-center mx-auto">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Nuestras Ventajas</h2>
                <ul class="list-disc text-gray-600">
                    <li>Contenido educativo de alta calidad.</li>
                    <li>Variedad de juegos para todas las edades.</li>
                    <li>Experiencia de juego divertida e interactiva.</li>
                    <li>Seguridad y privacidad para nuestros usuarios.</li>
                </ul>
            </div>
            <img class="h-[30vh] " src="{{ asset('images/edu.jpg') }}" alt="Imagen">
        </div>





        <div class="mb-8 pl-20">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Más sobre nosotros</h2>
            <p class="text-gray-600">Además de juegos educativos, ofrecemos recursos para padres y educadores,
                seguimiento del progreso del jugador y actividades extracurriculares relacionadas con el aprendizaje.
            </p>
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