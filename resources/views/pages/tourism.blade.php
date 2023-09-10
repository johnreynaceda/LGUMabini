<x-app-layout>
    <div class=" relative mx-auto max-w-7xl">

        <div class="py-12">
            <header class="flex space-x-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-gray-700">
                    <path
                        d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V10H22V19C22 20.6569 20.6569 22 19 22ZM18 12V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V12H18ZM5 6V12H11V6H5ZM5 13V15H15V13H5ZM5 16V18H15V16H5ZM7 8H9V10H7V8Z">
                    </path>
                </svg>
                <div class="h-10 w-1 bg-green-600"></div>
                <h1 class="font-bold text-xl text-gray-800">TOURIST SPOTS</h1>
            </header>
            <section class="flex items-center w-full ">
                <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
                    <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-3 lg:grid-cols-3">
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('images/pic1.jpg') }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Anilao Awari Bay Resort
                            </p>
                            <p class="mt-3 text-sm text-gray-500">
                            <h1 class="text-sm">Location: Brgy. Solo, Anilao Mabini, Batangas, Mabini, Philippines </h1>
                            <h1 class="text-sm">Office Hours: Always Open </h1>
                            <h1 class="text-sm">Telephone Number: 0917 720 3915</h1>
                            <h1 class="text-sm">Email Address: inquiry@anilaoawaribay.com</h1>
                            <h1 class="text-sm">About: Discover the best resort in Anilao Batangas. Stress-free vacation
                                guaranteed!
                                Free yourself from hust.</h1>
                            </p>
                        </figure>
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('images/pic2.jpg') }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Lavender ender
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Your design portfolio website shouldn’t just be a portfolio, it
                                should also be a sales tool.
                            </p>
                        </figure>
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('images/pic3.jpg') }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Smurf life
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Your design portfolio website shouldn’t just be a portfolio, it
                                should also be a sales tool.
                            </p>
                        </figure>
                        <figure class="mt-10 lg:col-span-3">
                            <img class="object-cover w-full bg-gray-200 lg:h-96" src="{{ asset('images/pic4.jpg') }}"
                                alt="" width="1310" height="873">
                        </figure>
                    </div>
                </div>
            </section>
            <section class="flex items-center w-full ">
                <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
                    <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-3 lg:grid-cols-3">
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('images/pic5.jpg') }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Anilao Awari Bay Resort
                            </p>
                            <p class="mt-3 text-sm text-gray-500">
                            <h1 class="text-sm">Location: Brgy. Solo, Anilao Mabini, Batangas, Mabini, Philippines </h1>
                            <h1 class="text-sm">Office Hours: Always Open </h1>
                            <h1 class="text-sm">Telephone Number: 0917 720 3915</h1>
                            <h1 class="text-sm">Email Address: inquiry@anilaoawaribay.com</h1>
                            <h1 class="text-sm">About: Discover the best resort in Anilao Batangas. Stress-free vacation
                                guaranteed!
                                Free yourself from hust.</h1>
                            </p>
                        </figure>
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('images/pic6.jpg') }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Lavender ender
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Your design portfolio website shouldn’t just be a portfolio, it
                                should also be a sales tool.
                            </p>
                        </figure>
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('images/pic7.jpg') }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Smurf life
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Your design portfolio website shouldn’t just be a portfolio, it
                                should also be a sales tool.
                            </p>
                        </figure>
                        <figure class="mt-10 lg:col-span-3">
                            <img class="object-cover w-full bg-gray-200 lg:h-96" src="{{ asset('images/pic8.jpg') }}"
                                alt="" width="1310" height="873">
                        </figure>
                    </div>
                </div>
            </section>
        </div>
    </div>


</x-app-layout>
