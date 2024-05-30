<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<div class="flex flex-row min-w-screen">
    <div class="w-1/2 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-b  from-blue-700 to-white/55">
        <div>
            <a href="/" wire:navigate>
                <img class="h-[30vh]" src="{{ asset('images/su.png') }}" alt="Imagen">
            </a>
        </div>

       
    </div>
    
    <div class="w-1/2 min-h-screen flex flex-col gap-20 sm:justify-center items-center pt-6 sm:pt-0 bg-orange-100">
        <div>
            <h1 class="font-bold text-4xl">Iniciar Sesión</h1>
        </div>

        <div class="">
            {{ $slot }}
        </div>
    </div>
</div>
</html>
