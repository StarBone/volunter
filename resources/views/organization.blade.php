<x-app-layout>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <section class="flex flex-col min-h-screen mx-6">  
        <div class="flex flex-col flex-grow">  
            <h1 class="ml-16 text-2xl text-gray-900">Temukan Organisasi Minat Kamu</h1>  
            <div class="mt-5 ml-[3.2rem] flex">   
                <div class="m-3 flex items-center border border-gray-400 rounded-full">  
                    <input type="text" class="ml-2 h-6 w-auto focus:outline-none focus:ring-0 border-none" placeholder="Cari Organisasi">  
                    <div class="px-3 py-2">  
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>  
                    </div>  
                </div>  
                <div class="m-3 flex items-center border border-gray-400 rounded-full">  
                    <h1 class="pl-5 py-2 text-gray-700">Semua Kategori</h1>  
                    <i class="fa-solid fa-chevron-down pl-2 pr-5 text-gray-700"></i>  
                </div>  
                <div class="m-3 flex items-center border border-gray-400 rounded-full">  
                    <h1 class="pl-5 py-2 text-gray-700">Terbaru</h1>  
                    <i class="fa-solid fa-chevron-down pl-2 pr-5 text-gray-700"></i>  
                </div>  
            </div>  
            <div class="my-5 mx-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">  
                <div class="flex flex-col h-auto w-full lg:w-80 bg-white rounded-xl">
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <div class="py-2 px-5">  
                        <h1 class="text-ms text-start font-semibold">Duta Semesta Batch 2</h1>   
                        <div class="mt-1 flex items-center">  
                            <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                            <span class="pl-1 text-sky-800 text-xs">Jakarta</span>  
                        </div>  
                        <div class="mt-2 flex flex-row items-center space-x-3">  
                            <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Lingkungan</span>   
                            <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Pendidikan</span>   
                        </div>  
                        <div class="my-3 flex items-center font-semibold text-blue-800">  
                            <a href="/organization">Lihat Detail<i class="fa-solid fa-chevron-right pl-2"></i></a>  
                        </div>  
                    </div>  
                </div>   
                <div class="flex flex-col h-auto w-full lg:w-80 bg-white rounded-xl">
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <div class="py-2 px-5">  
                        <h1 class="text-ms text-start font-semibold">Duta Semesta Batch 2</h1>   
                        <div class="mt-1 flex items-center">  
                            <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                            <span class="pl-1 text-sky-800 text-xs">Jakarta</span>  
                        </div>  
                        <div class="mt-2 flex flex-row items-center space-x-3">  
                            <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Lingkungan</span>   
                            <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Pendidikan</span>   
                        </div>  
                        <div class="my-3 flex items-center font-semibold text-blue-800">  
                            <a href="/organization">Lihat Detail<i class="fa-solid fa-chevron-right pl-2"></i></a>  
                        </div>  
                    </div>  
                </div>   
                <div class="flex flex-col h-auto w-full lg:w-80 bg-white rounded-xl">
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <div class="py-2 px-5">  
                        <h1 class="text-ms text-start font-semibold">Duta Semesta Batch 2</h1>   
                        <div class="mt-1 flex items-center">  
                            <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                            <span class="pl-1 text-sky-800 text-xs">Jakarta</span>  
                        </div>  
                        <div class="mt-2 flex flex-row items-center space-x-3">  
                            <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Lingkungan</span>   
                            <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Pendidikan</span>   
                        </div>  
                        <div class="my-3 flex items-center font-semibold text-blue-800">  
                            <a href="/organization">Lihat Detail<i class="fa-solid fa-chevron-right pl-2"></i></a>  
                        </div>  
                    </div>  
                </div>   
            </div>
            <div class="flex justify-center items-center">  
                <button class="my-9 mx-6 py-2 w-32 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700"><i class="fa-solid fa-arrows-rotate pr-2"></i>Muat ulang</button>  
            </div>  
        </div>  
    </section>  
</x-app-layout>