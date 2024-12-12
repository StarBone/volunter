<x-app-layout>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <main class="flex flex-col min-h-screen mx-6">  <!-- Added min-h-screen -->  
        <div class="flex flex-col flex-grow">  <!-- Added flex-grow -->  
            <h1 class="ml-16 text-2xl text-gray-900">Aktivitas Membutuhkan Bantuan Kamu</h1>  
            <div class="mt-5 ml-[3.2rem] flex">   
                <div class="m-3 flex items-center border border-gray-400 rounded-full">  
                    <input type="text" class="ml-2 h-6 w-auto bg-gray-100 focus:outline-none focus:ring-0 border-none" placeholder="Cari Aktivitas">  
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
                <div class="flex flex-col h-auto w-80 bg-white rounded-xl">  
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>   
                    <p class="mt-2 px-5 text-xs text-start">  
                        {{ \Illuminate\Support\Str::limit('Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan', 70, '...') }}  
                    </p>  
                    <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                    <div class="mt-2 flex flex-row items-center">  
                        <img class="h-5 pl-5 pr-1" src="{{ asset('images/icon/calender.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                        <div class="mx-2 size-2 rounded-full bg-gray-600"></div>  
                        <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                    </div>  
                    <a class="my-3 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700 text-center" href="/activity">Gabung</a>  
                </div>
                <div class="flex flex-col h-auto w-80 bg-white rounded-xl">  
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>   
                    <p class="mt-2 px-5 text-xs text-start">  
                        {{ \Illuminate\Support\Str::limit('Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan', 70, '...') }}  
                    </p>  
                    <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                    <div class="mt-2 flex flex-row items-center">  
                        <img class="h-5 pl-5 pr-1" src="{{ asset('images/icon/calender.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                        <div class="mx-2 size-2 rounded-full bg-gray-600"></div>  
                        <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                    </div>  
                    <button class="my-3 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700" href="/activity">Gabung</button>  
                </div>
                <div class="flex flex-col h-auto w-80 bg-white rounded-xl">  
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>   
                    <p class="mt-2 px-5 text-xs text-start">  
                        {{ \Illuminate\Support\Str::limit('Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan', 70, '...') }}  
                    </p>  
                    <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                    <div class="mt-2 flex flex-row items-center">  
                        <img class="h-5 pl-5 pr-1" src="{{ asset('images/icon/calender.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                        <div class="mx-2 size-2 rounded-full bg-gray-600"></div>  
                        <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                    </div>  
                    <button class="my-3 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700" href="/activity">Gabung</button>  
                </div>
                <div class="flex flex-col h-auto w-80 bg-white rounded-xl">  
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>   
                    <p class="mt-2 px-5 text-xs text-start">  
                        {{ \Illuminate\Support\Str::limit('Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan', 70, '...') }}  
                    </p>  
                    <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                    <div class="mt-2 flex flex-row items-center">  
                        <img class="h-5 pl-5 pr-1" src="{{ asset('images/icon/calender.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                        <div class="mx-2 size-2 rounded-full bg-gray-600"></div>  
                        <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                    </div>  
                    <button class="my-3 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700" href="/activity">Gabung</button>  
                </div>
                <div class="flex flex-col h-auto w-80 bg-white rounded-xl">  
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>   
                    <p class="mt-2 px-5 text-xs text-start">  
                        {{ \Illuminate\Support\Str::limit('Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan', 70, '...') }}  
                    </p>  
                    <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                    <div class="mt-2 flex flex-row items-center">  
                        <img class="h-5 pl-5 pr-1" src="{{ asset('images/icon/calender.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                        <div class="mx-2 size-2 rounded-full bg-gray-600"></div>  
                        <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                    </div>  
                    <button class="my-3 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700" href="/activity"Gabung</button>  
                </div>
                <div class="flex flex-col h-auto w-80 bg-white rounded-xl">  
                    <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                    <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>   
                    <p class="mt-2 px-5 text-xs text-start">  
                        {{ \Illuminate\Support\Str::limit('Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan', 70, '...') }}  
                    </p>  
                    <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                    <div class="mt-2 flex flex-row items-center">  
                        <img class="h-5 pl-5 pr-1" src="{{ asset('images/icon/calender.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                        <div class="mx-2 size-2 rounded-full bg-gray-600"></div>  
                        <img class="h-5" src="{{ asset('images/icon/location.svg') }}" alt="">  
                        <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                    </div>  
                    <button class="my-3 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700" >Gabung</button>  
                </div>
            </div>
            <div class="flex justify-center items-center">
                <button class="my-9 mx-6 py-2 w-32 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700"><i class="fa-solid fa-arrows-rotate pr-2"></i>Muat ulang</button>
            </div>
        </div>  
    </main>  
    <footer>
        <h1 class="py-10 text-center text-white bg-slate-500">copyright 2024 Hasan Nasuha</h1>
    </footer>
</x-app-layout>