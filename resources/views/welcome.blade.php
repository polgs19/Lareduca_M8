<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
        <div class="bg-blue-900 p-5 flex flex-row items-center justify-between h-full">
            <div class='text-black font-mono font-bold flex flex-row gap-10 ml-48'>
                <h1 class=' hover:text-blue-500'>MEJORES JUEGOS</h1>
                <h1 class=' hover:text-blue-500'>CATEGORIAS</h1>
                <h1 class=' hover:text-blue-500'>NOVEDADES</h1>
                
            </div>
            <div class="w-24">
             <img src="{{ asset('images/su.png') }}" alt="Imagen">
            </div>
            <div class="text-white  font-medium flex flex-row gap-6 mr-60">
                    <header class="grid grid-cols-2 items-center gap-2 ">
                        
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>        
            </div>
        </div>



        <div class="bg-gray-200 flex flex-col gap-20 px-4 py-8 ">
           <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-2">Bienvenido a EDUCAGAMES</h1>
            <p class="text-gray-600">¡Aprende jugando, crece aprendiendo!</p>
           </div>

            <div class="mb-8  ">
             <h2 class="text-2xl  font-semibold text-center text-gray-800 mb-4">¿QUÉ TE OFRECEMOS?</h2>
              <p class="text-gray-600 text-lg text-center">En Educagames, ofrecemos una amplia variedad de juegos diseñados para educar y entretener a niños y adultos. Nuestros juegos cubren temas como matemáticas, ciencias, idiomas y más. <br></br>¡Aprende mientras juegas!</p>
            </div>

            <div class="flex flex-row justify-center ml-[25vh] items-center w-[150vh] gap-5">
    <img class="h-[30vh] " src="{{ asset('images/educa.jpg') }}" alt="Imagen">
    <div class="mb-8 p-10 w-[90vh] bg-blue-100 shadow-lg rounded-lg flex flex-col justify-center items-center mx-auto">
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
                <p class="text-gray-600">Además de juegos educativos, ofrecemos recursos para padres y educadores, seguimiento del progreso del jugador y actividades extracurriculares relacionadas con el aprendizaje.</p>
            </div>

    
            <div class="text-center">
                 <p class="text-gray-600">Para acceder a nuestros juegos, por favor <a href="{{ route('login') }}" class="text-blue-500">inicia sesión</a> o <a href="{{ route('register') }}" class="text-blue-500">regístrate</a>.</p>
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




   
    
</html>
