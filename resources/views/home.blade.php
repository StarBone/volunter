<x-app-layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Home - ' . config('app.name'))

    <main class="max-w-[1440px] mx-auto bg-gray-100 font-jakarta overflow-hidden">
        <section id="hero" class="h-screen bg-center lg:bg-cover bg-no-repeat" style="background-image: url({{ asset('images/Background-Landing-Page.png') }})">
            <div class="pt-20 mx-16 text-white w-5/12">
                <h1 class="text-4xl leading-normal">Ambil Aksi Perubahan untuk berdampak menjadi baik</h1>
                <p class="mt-5">Ubah niat baik menjadi aksi nyata hari ini—karena setiap langkah kecil bisa membawa perubahan besar bagi lainnya.</p>
                <button class="px-4 py-2 mt-10 rounded-full bg-blue-600 ">Mulai Ambil Langkah</button>

                <div class="mt-16 flex space-x-5">
                    <div class="p-3">
                        <h1 class="text-2xl font-bold">100+</h1>
                       <span class="text-sm">Aktivitas</span>
                    </div>
                    <div class="p-3">
                        <h1 class="text-2xl font-bold">1000+</h1>
                       <span class="text-sm">Relawan</span>
                    </div>
                    <div class="p-3">
                        <h1 class="text-2xl font-bold">500+</h1>
                       <span class="text-sm">Organisasi</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="service" class="h-screen">
            <div class="h-8 mt-[-30px] bg-gray-100 rounded-t-2xl"/>
            <div class="px-5 py-10 flex flex-col items-center">
                <span class="px-5 py-2 bg-sky-100 text-blue-800 font-bold text-sm rounded-2xl">Kenali Layanan Kami</span>
                <h1 class="mt-5 text-3xl text-center w-7/12">Lebih Banyak Relawan, Lebih Besar Dampaknya. Ada Beragam Pilihan Aktivitas Yang Dapat Diikuti Untuk Membuat Perubahan Besar</h1>
                <div class="mt-14 flex flex-row space-x-5">
                    <div class="w-1/2 flex flex-col justify-center items-center">
                        <img class="size-16" src="{{ asset('images/icon/team.svg') }}" alt="">
                        <h1 class="text-2xl mt-5">Jadi Relawan</h1>
                        <p class="mt-2 px-14 text-sm text-center">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                    </div>
                    <div class="mb-28 w-1/2 flex flex-col justify-center items-center">
                        <img class="size-16" src="{{ asset('images/icon/rocket.svg') }}" alt="">
                        <h1 class="text-2xl mt-5">Jadi Relawan</h1>
                        <p class="mt-2 px-14 text-sm text-center">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                    </div>
                    <div class="w-1/2 flex flex-col justify-center items-center">
                        <img class="size-16" src="{{ asset('images/icon/shake.svg') }}" alt="">
                        <h1 class="text-2xl mt-5">Jadi Relawan</h1>
                        <p class="mt-2 px-14 text-sm text-center">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="activity" class="h-[105vh] overflow-hidden">
            <div class="px-5 py-14 flex flex-col items-center">
                <span class="px-5 py-2 bg-sky-100 text-blue-800 font-bold text-sm rounded-2xl">Aktivitas Relawan</span>
                <h1 class="mt-10 text-3xl text-center w-7/12">Temukan Aktivitas Kerelawanan Sesuai Minat Dan Isu Yang Kamu Sukai</h1>
                
                <div class="mt-5 flex flex-row space-x-5">
                    <span class="px-5 py-2 bg-sky-100 text-blue-800 border border-blue-800 font-bold text-sm rounded-2xl">Pendidikan</span>
                    <span class="px-5 py-2 font-bold text-sm rounded-2xl">Lingkungan</span>
                    <span class="px-6 py-2 font-bold text-sm rounded-2xl">Traveling</span>
                </div>

                <div class="mt-8 flex flex-row space-x-14">  
                    <div class="flex flex-col h-96 w-64 bg-white rounded-xl">  
                        <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                        <h1 class="px-5 text-sm text-start font-semibold">Duta Semesta Batch 2</h1>   
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
                        <button class="mt-2 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700">Gabung</button>
                    </div>  
                    <div class="flex flex-col h-96 w-64 bg-white rounded-xl">  
                        <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                        <h1 class="px-5 text-sm text-start font-semibold">Duta Semesta Batch 2</h1>   
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
                        <button class="mt-2 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700">Gabung</button>
                    </div>  
                    <div class="flex flex-col h-96 w-64 bg-white rounded-xl">  
                        <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                        <h1 class="px-5 text-sm text-start font-semibold">Duta Semesta Batch 2</h1>   
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
                        <button class="mt-2 mx-6 py-2 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700">Gabung</button>
                    </div>  
                </div>
            </div>
        </section>

        <section class="h-screen">
            <div class="px-5 py-14 flex flex-col items-center">
                <span class="px-5 py-2 bg-sky-100 text-blue-800 font-bold text-sm rounded-2xl">Testimoni</span>
                <h1 class="mt-10 text-3xl text-center w-7/12">Apa Kata Mereka Yang Pernah Gabung Relawan</h1>
                <div class="flex flex-row mt-10 space-x-5">
                    <i class="fa-solid fa-chevron-left px-3 py-2 rounded-full border border-sky-500 text-sky-500"></i>
                    <i class="fa-solid fa-chevron-right px-3 py-2 rounded-full border border-sky-500 text-sky-500"></i>
                </div>
                <div class="flex flex-row mt-10 space-x-5">
                    <div class="p-7 h-56 w-96 bg-white rounded-xl">
                        <div class="flex items-center space-x-3">
                            <div class="block size-10 bg-gray-600 rounded-md"></div>
                            <h1 class="">John Doe</h1>
                        </div>
                        <p class="mt-5 text-xs leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sapiente qui voluptatibus velit magni veniam sequi omnis earum eligendi corrupti quo fugiat, ducimus nesciunt magnam quos sit! Laboriosam, incidunt dicta.</p>
                    </div>
                    <div class="p-7 h-56 w-96 bg-white rounded-xl">
                        <div class="flex items-center space-x-3">
                            <div class="block size-10 bg-gray-600 rounded-md"></div>
                            <h1 class="">John Doe</h1>
                        </div>
                        <p class="mt-5 text-xs leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sapiente qui voluptatibus velit magni veniam sequi omnis earum eligendi corrupti quo fugiat, ducimus nesciunt magnam quos sit! Laboriosam, incidunt dicta.</p>
                    </div>
                    <div class="p-7 h-56 w-96 bg-white rounded-xl">
                        <div class="flex items-center space-x-3">
                            <div class="block size-10 bg-gray-600 rounded-md"></div>
                            <h1 class="">John Doe</h1>
                        </div>
                        <p class="mt-5 text-xs leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sapiente qui voluptatibus velit magni veniam sequi omnis earum eligendi corrupti quo fugiat, ducimus nesciunt magnam quos sit! Laboriosam, incidunt dicta.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>