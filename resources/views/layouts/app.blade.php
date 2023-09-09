<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/mabinilogo.png') }}" />

    <head>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcQ8EgnAAAAAIoCJBLXY_8pzFa0T37jM6vCBuQZ"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @wireUiScripts
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

    </head>

<body class="font-sans antialiased relative">
    <div class="absolute top-0 bg-white left-0  h-full right-0">
        <img src="{{ asset('images/bg-back.jpg') }}" class="object-cover opacity-30  h-full w-full" alt="">
    </div>
    <div class="w-full mx-auto   relative">
        {{-- <div class="absolute h-[13.5rem] left-0 right-0 bg-blue-100 border-b-4 border-blue-500">
            <img src="{{ asset('images/mabini-bg.jpg') }}" class="object-cover w-full h-full opacity-10" alt="">
        </div> --}}
        <div class="mx-auto 2xl:max-w-7xl border-b relative">
            <div x-data="{ open: false }"
                class="relative flex flex-col w-full p-5 h-40 mx-auto  md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between lg:justify-start">
                    <a href="" class="flex items-center space-x-4 justify-center">
                        <img src="{{ asset('images/mabinilogo.png') }}" class="h-32" alt="">
                        <div class="font-bold text-gray-700">
                            <h1 class="text-2xl underline">LGU - MABINI</h1>
                            <h1 class="leading-5">BATANGAS</h1>
                        </div>
                    </a>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col items-center flex-grow hidden md:pb-0 md:flex md:justify-end md:flex-row">


                    <div class="inline-flex  items-center gap-5 list-none lg:ml-auto">
                        <div class="text-sm">
                            {{-- <h1>loyfloro@gmail.com</h1>
                            <span>(043) 757 0882</span> --}}
                        </div>
                        @if (auth()->check())
                            <x-avatar squared xl label="AB" />
                            <form method="POST" action="{{ route('logout') }}" role="none">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                                    class="hover:text-gray-500 hover:fill-gray-500 flex space-x-1 items-center">
                                    <span>Logout</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4">
                                        <path
                                            d="M5 11H13V13H5V16L0 12L5 8V11ZM3.99927 18H6.70835C8.11862 19.2447 9.97111 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.97111 4 8.11862 4.75527 6.70835 6H3.99927C5.82368 3.57111 8.72836 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C8.72836 22 5.82368 20.4289 3.99927 18Z">
                                        </path>
                                    </svg>
                                </a>
                            </form>
                        @else
                            <x-button label="Sign In" href="{{ route('login') }}" class="font-bold w-36" rounded
                                positive />
                        @endif
                    </div>
                </nav>
            </div>
        </div>

        <div class="bg-green-600 sticky top-0  z-50 ">
            @if (auth()->check())
                <div
                    class="mx-auto max-w-4xl flex items-center space-x-10 w-full px-12 overflow-y-auto  whitespace-nowrap scroll-hidden md:px-8">
                    <a class=" {{ request()->routeIs('dashboard') ? 'border-yellow-500' : '' }} py-3 pr-2  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('dashboard') }}">
                        Send SMS
                    </a>
                    <a class=" {{ request()->routeIs('residents') ? 'border-yellow-500' : '' }} py-3 pr-2  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('residents') }}">
                        Residents
                    </a>
                </div>
            @else
                <div
                    class="mx-auto max-w-4xl flex items-center justify-between w-full px-12 overflow-y-auto  whitespace-nowrap scroll-hidden md:px-8">
                    <a class=" {{ request()->routeIs('welcome') ? 'border-yellow-500' : '' }} py-3 pr-2  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('welcome') }}">
                        Home
                    </a>
                    <a class="{{ request()->routeIs('about') ? 'border-yellow-500' : '' }} px-2 py-3  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('about') }}">
                        About Us
                    </a>

                    <a class="{{ request()->routeIs('barangays') ? 'border-yellow-500' : '' }} px-2 py-3  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('barangays') }}">
                        Barangays
                    </a>
                    <a class="{{ request()->routeIs('tourism') ? 'border-yellow-500' : '' }} px-2 py-3  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('tourism') }}">
                        Tourism
                    </a>
                    <a class="{{ request()->routeIs('offices') ? 'border-yellow-500' : '' }} px-2 py-3  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('offices') }}">
                        Office
                    </a>

                    <a class="{{ request()->routeIs('contact-us') ? 'border-yellow-500' : '' }} px-2 py-3  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('contact-us') }}">
                        Contact us
                    </a>
                    <a class="{{ request()->routeIs('registration') ? 'border-yellow-500' : '' }} px-2 py-3  text-white transition ease-in-out transform border-b-4 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-yellow-500 hover:font-medium hover:text-yellow-400"
                        href="{{ route('registration') }}">
                        Registration
                    </a>

                </div>
            @endif
        </div>
        <section class="relative">

            {{ $slot }}
        </section>



    </div>
    <footer class="border-t  relative mt-40 bg-gray-200  border-blue-600 overflow-hidden">
        <div class="absolute top-5">
            <img src="{{ asset('images/mabinilogo.png') }}" class="h-96 opacity-5" alt="">
        </div>
        <div class="px-4 py-12 mx-auto  sm:px-6 lg:px-16">

            <div
                class="flex flex-col items-center pt-8 pb-12  border-gray-200 md:flex-row-reverse md:justify-between md:pt-6">
                <div class="max-w-xl">
                    <div>
                        <p class="mt-6 text-sm font-medium text-gray-500 md:mt-0">
                            Copyright2023; |Web-Based Information System with Data Mining and SMS Notification
                        </p>
                        <p class="mt-6 text-sm font-medium text-gray-500 md:mt-0">
                            {{-- For Educational Use only | AMA - By Sir Loi(Design Project) --}}
                        </p>
                    </div>
                </div>
                <div>

                </div>

            </div>
        </div>
    </footer>
    <x-dialog z-index="z-50" blur="md" align="center" />
    <x-notifications z-index="z-50" />
    @livewireScripts
</body>

</html>
