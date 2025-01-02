<x-app-layout>
    @section('title', 'Aktivitas - ' . config('app.name'))   
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
            @foreach ($relawans as $data)                
            <div class="flex flex-col h-auto w-full lg:w-80 bg-white rounded-xl">
                <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                <h1 class="mt-3 px-5 text-lg text-start font-semibold">{{ $data->title }}</h1>  
                <p class="mt-2 px-5 text-xs text-start line-clamp-2">  
                    {{ $data->description }}  
                </p>  
                <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                <div class="mt-2 mx-5 flex flex-row items-center gap-1">   
                    <svg class="w-4 fill-sky-700" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                    <span class="py-1 text-sky-800 text-xs">{{ $data->period }}</span>  
                    <div class="mx-2 size-2 rounded-full bg-neutral-200"></div>  
                    <svg class="w-4 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                        <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                        <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                    </svg>
                    <span class="py-1 text-sky-800 text-xs">{{ $data->location }}</span>  
                </div>
                <div class="mx-5 my-3 flex items-center">
                    <a class="pt-2.5 w-full h-10 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700 text-center" href="/activity">Gabung</a>
                    <a class="mx-5 md:mx-4 lg:mx-7" href="#">
                        <svg class="w-6 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="fi_3106777"><g id="Layer_21" data-name="Layer 21"><path d="M18.21,2H6.79A2.83,2.83,0,0,0,4,4.86V21.2a1.67,1.67,0,0,0,1,1.54,1.57,1.57,0,0,0,1.74-.27l5.35-4.74a.69.69,0,0,1,.86,0l5.35,4.74a1.59,1.59,0,0,0,1.74.27,1.67,1.67,0,0,0,1-1.54V4.86A2.83,2.83,0,0,0,18.21,2ZM20,21.2a.67.67,0,0,1-.39.63.61.61,0,0,1-.67-.1L13.59,17a1.69,1.69,0,0,0-2.18,0L6.06,21.73a.61.61,0,0,1-.67.1A.67.67,0,0,1,5,21.2V4.86A1.83,1.83,0,0,1,6.79,3H18.21A1.83,1.83,0,0,1,20,4.86Z"></path></g></svg>
                    </a>       
                </div>
            </div> {{-- Card --}}
            @endforeach
            </div>
            <div class="flex justify-center items-center">
                <button class="my-9 mx-6 py-2 w-32 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700"><i class="fa-solid fa-arrows-rotate pr-2"></i>Muat ulang</button>
            </div>
        </div>  
    </main>  
</x-app-layout>