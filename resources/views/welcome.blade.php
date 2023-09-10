<x-app-layout>
    <div class=" relative mx-auto max-w-7xl">


        <div class="mt-10 grid grid-cols-1 lg:grid-cols-3  gap-12">
            <div class="col-span-2">
                <div class=" ">
                    <h1 class="text-6xl font-rowdies text-gray-600">Welcome to Mabini Batangas</h1>

                    <div class="mt-2">
                        <span class="text-gray-500">Mabini, Batangas</span>
                    </div>
                    <div class="mt-2">
                        <span class="text-gray-500 text-2xl">We are Happy to SERVE you..</span>
                    </div>
                </div>
                <div class="pt-23">
                    <img src="{{ asset('images/mayor.png') }}"
                        class="h-64 w-64 shadow-xl shadow-green-50 rounded-full object-cover" alt="">
                    <h1 class="text-xl mt-2">Message from the Mayor</h1>
                    <h1 class="font-bold mt-2">Source:<a href="https://www.facebook.com/MabiniBatangas"
                            class="underline">https://www.facebook.com/MabiniBatangas</a></h1>
                    <p class="indent-12 text-justify mt-8">The According to legend, the first Malay settlers to inhabit the
                        vast fertile land
                        bordering the two bodies of water now known as Batangas Bay and Balayan Bay first
                        found
                        anchor along the shores of the land protruding down southwestward, known as the
                        Calumpan
                        Peninsula.

                        The Malay settlers found the land fertile and agriculturally appropriate and the sea
                        rich in marine resources, and they established their settlement in this once vast
                        unknown land. As more Malay settlers arrived from distant lands, more settlements
                        were
                        founded until even the upland regions of the peninsula were settled. The inhabitants
                        had
                        their own form of village government. They were ruled by a headman, a datu, or a
                        sultan,
                        in case of big settlements.

                        Malay civilization began to take roots. Rapid increase of population meant that it
                        did
                        not take long before several nearby regions were inhabited to comprise the whole
                        province of Kumintang, better known later as Batangas.</p>

                    <center class= "mt-5">
                        <h1 class="font-bold">Nilo Villanueva</h1>
                        <span class="border-t border-gray-700">Municipal Mayor</span>
                    </center>
                </div>
            </div>
            <div class="space-y-10">
                {{-- <div>
                    <div class="bg-green-600 text-white fill-white flex space-x-2 items-center font-bold px-4 py-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
                            <path
                                d="M21 10.063V4C21 3.44772 20.5523 3 20 3H19C17.0214 4.97864 13.3027 6.08728 11 6.61281V17.3872C13.3027 17.9127 17.0214 19.0214 19 21H20C20.5523 21 21 20.5523 21 20V13.937C21.8626 13.715 22.5 12.9319 22.5 12 22.5 11.0681 21.8626 10.285 21 10.063ZM5 7C3.89543 7 3 7.89543 3 9V15C3 16.1046 3.89543 17 5 17H6L7 22H9V7H5Z">
                            </path>
                        </svg>
                        <span class="text-lg">Announcements</span>
                    </div>
                    <div class="mt-2">
                        <div class="border-b border-green-700 py-2">
                            <h1 class="font-bold">Local Jobs</h1>
                            <p class="indent-5 text-sm"> LIMA Tech Park SM Batangas Manila </p>
                        </div>
                        <div class="border-b border-green-700 py-2">
                            <h1 class="font-bold">Local Jobs</h1>
                            <p class="indent-5 text-sm"> LIMA Tech Park SM Batangas Manila </p>
                        </div>
                        <div class="border-b border-green-700 py-2">
                            <h1 class="font-bold">Local Jobs</h1>
                            <p class="indent-5 text-sm"> LIMA Tech Park SM Batangas Manila </p>
                        </div>
                    </div>
                </div> --}}
                <div>
                    <div class="bg-green-600 text-white fill-white flex space-x-2 items-center font-bold px-4 py-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
                            <path
                                d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 11H8V13H6V11ZM6 15H8V17H6V15ZM10 11H18V13H10V11ZM10 15H15V17H10V15Z">
                            </path>
                        </svg>
                        <span class="text-lg">Announce & Incoming Events</span>
                    </div>
                    <div class="mt-2">
                        <div class="border-b border-green-700 py-2">
                            <div class="flex space-x-2 items-center font-bold px-4 py-1 5">
                                <div class="h-12 w-10 px-1 bg-blue-800 text-right">
                                    <p class="text-white text-sm">22 Sep</p>
                                </div>
                                <h1 class="uppercase text-gray-800">Job Fair</h1>
                            </div>
                            <div class="t-2 px-4 text-sm">
                                <p>WHERE: MUNICIPALITY GYMNASIUM</p>
                                <p>WHENE: OCTOBER 1, 2023</p>
                                <p>TIME: 1 PM </p>
                            </div>
                        </div>
                        <div class="border-b border-green-700 py-2">
                            <div class="flex space-x-2 items-center font-bold px-4 py-1 5">
                                <div class="h-12 w-10 px-1 bg-blue-800 text-right">
                                    <p class="text-white text-sm">30 Sept</p>
                                </div>
                                <h1 class="uppercase text-gray-800">Bayanihan Sa Mabini - Job Fair</h1>
                            </div>
                            <div class="t-2 px-4 text-sm">
                                <p>Batangas Covered Court - August 28, 2023</p>
                            </div>
                        </div>
                        <div class="border-b border-green-700 py-2">
                            <div class="flex space-x-2 items-center font-bold px-4 py-1 5">
                                <div class="h-12 w-10 px-1 bg-blue-800 text-right">
                                    <p class="text-white text-sm">22 Jan</p>
                                </div>
                                <h1 class="uppercase text-gray-800">Mabini LGU JOB Fair</h1>
                            </div>
                            <div class="t-2 px-4 text-sm">
                                <p>September 30 , 2023</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-20">
            <header class="flex space-x-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-gray-700">
                    <path
                        d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V10H22V19C22 20.6569 20.6569 22 19 22ZM18 12V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V12H18ZM5 6V12H11V6H5ZM5 13V15H15V13H5ZM5 16V18H15V16H5ZM7 8H9V10H7V8Z">
                    </path>
                </svg>
                <div class="h-10 w-1 bg-green-600"></div>
                <h1 class="font-bold text-xl text-gray-800">NEWS AND UPDATES</h1>
            </header>
            <div class="mt-2">
            <p class="indent-12 text-justify mt-2">For the Latest News and Updates please always visit our Official Website</p>
                </div>
            <div class="mt-10 ml-8">

                <section class="flex items-center w-full ">
                    <div class="relative items-center w-full  max-w-7xl">
                        <div class="grid grid-cols-2 gap-6 py-5 md:grid-cols-3 lg:grid-cols-2">
                            <figure class="h-[40rem]">
                                <img class="w-full bg-gray-200 h-full object-cover"
                                    src="{{ asset('images/news1.jpg') }}" alt="">


                                <p class="mt-3 text-xl text-gray-800">
                                    Hon. Mayor Atty. Nilo M. Villanueva, delivering his opening remarks.
                                </p>
                            </figure>
                            <figure class="h-[40rem]">
                                <img class="w-full h-full bg-gray-200 object-cover"
                                    src="{{ asset('images/news2.jpg') }}" alt="">

                                    <p class="mt-3 text-xl text-gray-800">
                                    BatStateU and Mabini LGU/MDRRMO staff.
                                </p>
                                
                            </figure>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</x-app-layout>
