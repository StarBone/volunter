<x-app-layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Home - ' . config('app.name'))

    <main class="max-w-[1440px] mx-auto bg-gray-100 font-jakarta overflow-hidden">
        <section id="hero" class="h-[75vh]">
            <div class="pt-20 mx-16 text-white z-10 w-5/12 relative">
                <h1 class="text-4xl leading-normal">Ambil Aksi Perubahan untuk berdampak menjadi baik</h1>
                <p class="mt-5">Ubah niat baik menjadi aksi nyata hari ini—karena setiap langkah kecil bisa membawa perubahan besar bagi lainnya.</p>
                <button class="px-4 py-2 mt-10 rounded-full bg-blue-600">Mulai Ambil Langkah</button>
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
            <img class="absolute object-cover bg-no-repeat top-0 z-0 w-full h-full" src="{{ asset('images/Background-Landing-Page.png') }}" alt="">
        </section>
        

        <section id="service" class="relative h-screen bg-slate-50 rounded-t-3xl">
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
                
                <div class="mt-5 flex flex-row space-x-5" id="button-group">
                    <button type="button" class="px-5 py-2 bg-sky-100 text-blue-800 border border-blue-800 font-bold text-sm rounded-2xl">Pendidikan</button>
                    <button type="button" class="px-5 py-2 font-bold text-sm rounded-2xl">Lingkungan</button>
                    <button type="button" class="px-6 py-2 font-bold text-sm rounded-2xl">Traveling</button>
                </div>

                <div class="mt-8 flex flex-row space-x-14">
                    <div class="flex flex-col h-auto w-60 bg-white rounded-xl">
                        <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                        <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>  
                        <p class="mt-2 px-5 text-xs text-start line-clamp-2">  
                            Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan  
                        </p>  
                        <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                        <div class="mt-2 mx-5 flex flex-row items-center gap-1">   
                            <svg class="w-4 fill-sky-700" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                            <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                            <div class="mx-2 size-2 rounded-full bg-neutral-200"></div>  
                            <svg class="w-4 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                                <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                            </svg>
                            <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                        </div>
                        <div class="mx-5 my-3 flex items-center">
                            <a class="pt-2.5 w-full h-10 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700 text-center" href="/activity">Gabung</a>
                            <a class="mx-3 md:mx-4" href="#">
                                <svg class="w-6 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="fi_3106777"><g id="Layer_21" data-name="Layer 21"><path d="M18.21,2H6.79A2.83,2.83,0,0,0,4,4.86V21.2a1.67,1.67,0,0,0,1,1.54,1.57,1.57,0,0,0,1.74-.27l5.35-4.74a.69.69,0,0,1,.86,0l5.35,4.74a1.59,1.59,0,0,0,1.74.27,1.67,1.67,0,0,0,1-1.54V4.86A2.83,2.83,0,0,0,18.21,2ZM20,21.2a.67.67,0,0,1-.39.63.61.61,0,0,1-.67-.1L13.59,17a1.69,1.69,0,0,0-2.18,0L6.06,21.73a.61.61,0,0,1-.67.1A.67.67,0,0,1,5,21.2V4.86A1.83,1.83,0,0,1,6.79,3H18.21A1.83,1.83,0,0,1,20,4.86Z"></path></g></svg>
                            </a>       
                        </div>
                    </div> {{-- Card --}}
                    <div class="flex flex-col h-auto w-60 bg-white rounded-xl">
                        <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                        <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>  
                        <p class="mt-2 px-5 text-xs text-start line-clamp-2">  
                            Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan  
                        </p>  
                        <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                        <div class="mt-2 mx-5 flex flex-row items-center gap-1">   
                            <svg class="w-4 fill-sky-700" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                            <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                            <div class="mx-2 size-2 rounded-full bg-neutral-200"></div>  
                            <svg class="w-4 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                                <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                            </svg>
                            <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                        </div>
                        <div class="mx-5 my-3 flex items-center">
                            <a class="pt-2.5 w-full h-10 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700 text-center" href="/activity">Gabung</a>
                            <a class="mx-3 md:mx-4" href="#">
                                <svg class="w-6 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="fi_3106777"><g id="Layer_21" data-name="Layer 21"><path d="M18.21,2H6.79A2.83,2.83,0,0,0,4,4.86V21.2a1.67,1.67,0,0,0,1,1.54,1.57,1.57,0,0,0,1.74-.27l5.35-4.74a.69.69,0,0,1,.86,0l5.35,4.74a1.59,1.59,0,0,0,1.74.27,1.67,1.67,0,0,0,1-1.54V4.86A2.83,2.83,0,0,0,18.21,2ZM20,21.2a.67.67,0,0,1-.39.63.61.61,0,0,1-.67-.1L13.59,17a1.69,1.69,0,0,0-2.18,0L6.06,21.73a.61.61,0,0,1-.67.1A.67.67,0,0,1,5,21.2V4.86A1.83,1.83,0,0,1,6.79,3H18.21A1.83,1.83,0,0,1,20,4.86Z"></path></g></svg>
                            </a>       
                        </div>
                    </div> {{-- Card --}}
                    <div class="flex flex-col h-auto w-60 bg-white rounded-xl">
                        <img class="p-2 h-fit rounded-xl" src="{{ asset('images/card/card-1.png') }}" alt="">  
                        <h1 class="mt-3 px-5 text-lg text-start font-semibold">Duta Semesta Batch 2</h1>  
                        <p class="mt-2 px-5 text-xs text-start line-clamp-2">  
                            Buat kamu yang tertarik dengan isu Pendidikan dan kegiatan sosial Dan buat Kamu juga ingin menjadi pejuang kebaikan  
                        </p>  
                        <span class="px-5 mt-2 text-xs">Bersama : Rumah Belajar</span>  
                        <div class="mt-2 mx-5 flex flex-row items-center gap-1">   
                            <svg class="w-4 fill-sky-700" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                            <span class="py-1 text-sky-800 text-xs">20 Mei 2023</span>  
                            <div class="mx-2 size-2 rounded-full bg-neutral-200"></div>  
                            <svg class="w-4 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                                <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                            </svg>
                            <span class="py-1 text-sky-800 text-xs">Jakarta</span>  
                        </div>
                        <div class="mx-5 my-3 flex items-center">
                            <a class="pt-2.5 w-full h-10 text-xs border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700 text-center" href="/activity">Gabung</a>
                            <a class="mx-3 md:mx-4" href="#">
                                <svg class="w-6 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="fi_3106777"><g id="Layer_21" data-name="Layer 21"><path d="M18.21,2H6.79A2.83,2.83,0,0,0,4,4.86V21.2a1.67,1.67,0,0,0,1,1.54,1.57,1.57,0,0,0,1.74-.27l5.35-4.74a.69.69,0,0,1,.86,0l5.35,4.74a1.59,1.59,0,0,0,1.74.27,1.67,1.67,0,0,0,1-1.54V4.86A2.83,2.83,0,0,0,18.21,2ZM20,21.2a.67.67,0,0,1-.39.63.61.61,0,0,1-.67-.1L13.59,17a1.69,1.69,0,0,0-2.18,0L6.06,21.73a.61.61,0,0,1-.67.1A.67.67,0,0,1,5,21.2V4.86A1.83,1.83,0,0,1,6.79,3H18.21A1.83,1.83,0,0,1,20,4.86Z"></path></g></svg>
                            </a>       
                        </div>
                    </div> {{-- Card --}}
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
<script>
    // Ambil grup tombol
    const buttonGroup = document.getElementById('button-group');
    const buttons = buttonGroup.querySelectorAll('button');

    // Tambahkan event listener pada setiap tombol
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Hapus kelas aktif dari semua tombol
            buttons.forEach(btn => {
                btn.classList.remove('bg-sky-100', 'text-blue-800', 'border', 'border-blue-800');
            });
            // Tambahkan kelas aktif pada tombol yang diklik
            button.classList.add('bg-sky-100', 'text-blue-800', 'border', 'border-blue-800');
        });
    });
</script>