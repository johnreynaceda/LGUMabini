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

<body class="font-sans text-gray-900 antialiased">
    <div class="absolute top-0 bottom-0 right-0 left-0">
        <img src="{{ asset('images/mabini-bg.jpg') }}" class="object-cover opacity-30 w-full h-full" alt="">
    </div>
    <div
        class="min-h-screen relative flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-600 bg-opacity-50">
        <div>
            <a href="" class="flex items-center space-x-4 justify-center">
                <img src="{{ asset('images/mabinilogo.png') }}" class="h-20" alt="">
                <div class="font-bold text-white">
                    <h1 class="text-2xl underline">LGU - MABINI</h1>
                    <h1 class="leading-5">BATANGAS</h1>
                </div>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
