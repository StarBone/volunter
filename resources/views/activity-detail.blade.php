<link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
<img class="absolute top-0 right-0 z-0" src="{{ asset('images/shape/s-ad.png') }}" alt="">
<x-app-layout>
    @section('title', 'Aktivitas - ' . config('app.name'))  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <section class="flex items-start mx-20">
        <div class="relative w-4/6 flex-grow"> 
            <div class="ml-4 flex space-x-2">  
                <img src="{{ asset('images/icon/home.svg') }}" alt=""> 
                <span>/</span>  
                <a class="text-blue-800 underline underline-offset-[3px]" href="/activity/search">Aktivitas</a>  
                <span>/</span>   
                <span class="text-gray-400">Apa yang kami lakukan</span>
            </div>
            <div class="mt-4">
                <div class="h-96 p-2 bg-white rounded-lg ">  
                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('images/card/card-1-full.png') }}" alt="">  
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Deskripsi</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam fuga magni perferendis amet quaerat nisi quae est ab nulla placeat, excepturi ipsum laborum vero dolor provident! Commodi, minus numquam tenetur ad unde enim rem quae, nobis ea harum tempore vitae beatae molestiae quisquam. Officiis modi pariatur magni sapiente porro voluptatum numquam nisi omnis vitae qui, perferendis earum cupiditate reprehenderit? Tenetur mollitia illum, quae molestiae qui optio temporibus? Laudantium consequuntur, ad nihil dolores deleniti at delectus dolorum fuga minima natus? Totam rem iure veritatis nisi inventore. Necessitatibus beatae hic dolor adipisci veniam? Commodi laboriosam deserunt omnis, earum non iste rem accusantium.</p>  
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Detail Aktivitas</h1>  
                    <p class="mt-5">Breafing akan dilakukan sebelum kegiatan berlangsung.</p>  
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Pekerjaan Yang Dibuka</h1>   
                    <div class="mx-2 my-5 flex flex-col border border-neutral-200 rounded-[0.7rem]">  
                        <div class="flex justify-between items-center p-3">  
                            <h1 class="font-semibold text-sky-700">Desain Grafis</h1>  
                            <img class="mr-3" src="{{ asset('images/icon/arrow-top.svg') }}" alt="">  
                        </div>  
                        <div class="p-3 grid grid-cols-2 gap-4 rounded-b-[0.7rem]">  
                            <h2>Nama Pekerjaan</h2>  
                            <span>Desain Poster</span>  
                            <h2>Relawan Dibutuhkan</h2>  
                            <span>2 Orang</span>  
                            <h2>Total Jam Kerja</h2>  
                            <span>20 Jam</span>  
                            <h2>Tugas Relawan</h2>  
                            <span>Mengkoordinasi relawan dan supervisi</span>  
                            {{-- <textarea class="border border-gray-300 p-2 rounded" rows="4" name="tugas_relawan">{{ $post['tugas_relawan'] }}</textarea> --}}
                            <h2>Tugas Ketua</h2>  
                            <span>Mengkoordinasi relawan dan supervisi</span>  
                            {{-- <textarea class="border border-gray-300 p-2 rounded" rows="4" name="tugas_ketua">{{ $post['tugas_ketua'] }}</textarea> --}}
                            <h2>Domisili</h2>  
                            <span>Jakarta</span>  
                        </div>  
                    </div>  
                    <div class="mx-2 my-5 flex flex-col border border-neutral-200 rounded-[0.7rem]">
                        <div class="flex justify-between items-center p-3">  
                            <h1 class="font-semibold text-sky-700">Desain Grafis</h1>  
                            <img class="mr-3" src="{{ asset('images/icon/arrow-bottom.svg') }}" alt="">  
                        </div>  
                    </div>
                </div>

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Kategori</h1>  
                    <div class="mt-5 flex flex-row items-center space-x-3">  
                        <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Lingkungan</span>   
                        <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Pendidikan</span>   
                    </div>  
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Peserta (25)</h1>  
                    <div class="flex justify-between">
                        <div class="mt-3 p-3 w-1/6 text-center rounded-lg border border-neutral-200 hover:bg-sky-700 text-gray-500 hover:text-white">
                            <img class="w-16 h-16 rounded-full mx-auto" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">
                            <div class="mt-2 break-words text-sm">Muhammad</div>
                        </div>
                        <div class="mt-3 p-3 w-1/6 text-center rounded-lg border border-neutral-200 hover:bg-sky-700 text-gray-500 hover:text-white">
                            <img class="w-16 h-16 rounded-full mx-auto" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">
                            <div class="mt-2 break-words text-sm">Muhammad</div>
                        </div>
                        <div class="mt-3 p-3 w-1/6 text-center rounded-lg border border-neutral-200 hover:bg-sky-700 text-gray-500 hover:text-white">
                            <img class="w-16 h-16 rounded-full mx-auto" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">
                            <div class="mt-2 break-words text-sm">Muhammad</div>
                        </div>
                        <div class="mt-3 p-3 w-1/6 text-center rounded-lg border border-neutral-200 hover:bg-sky-700 text-gray-500 hover:text-white">
                            <img class="w-16 h-16 rounded-full mx-auto" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">
                            <div class="mt-2 break-words text-sm">Muhammad</div>
                        </div>
                        <div class="relative mt-3 p-3 w-1/6 text-center rounded-lg border border-neutral-200 hover:bg-sky-700 text-black hover:text-white">  
                            <div class="relative">  
                                <div class="filter blur-sm">
                                    <img class="w-16 h-16 rounded-full mx-auto" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">  
                                </div>
                                {{-- <img class="w-16 h-16 rounded-full mx-auto filter blur-sm border" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">   --}}
                                <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">  
                                    <span class="text-white text-lg font-bold">+21</span>  
                                </div>  
                            </div>  
                            <div class="mt-2 break-words text-sm font-bold">+21 lainnya</div>  
                        </div>
                    </div>
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Dokumentasi</h1>  
                    <div class="mt-5 grid grid-cols-2 gap-4">
                        <img class="w-auto h-auto object-cover aspect-video rounded-2xl" src="https://images.unsplash.com/photo-1616680214084-22670de1bc82?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <img class="w-auto h-auto object-cover aspect-video rounded-2xl" src="https://images.unsplash.com/photo-1632932693914-89b90ae3d16d?q=80&w=1363&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <img class="w-auto h-auto object-cover aspect-video rounded-2xl" src="https://images.unsplash.com/photo-1656325279375-98dec3aa50b8?q=80&w=1346&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <img class="w-auto h-auto object-cover aspect-video rounded-2xl" src="https://images.unsplash.com/photo-1730328714622-8d30106f03dc?q=80&w=1474&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card Kanan -->  
        <aside class="mt-10 w-2/6 ml-4 sticky top-5">  
            <div class="p-6 relative bg-white rounded-lg ">  
                <h2 class="text-2xl font-semibold">Duta Semesta Batch</h2>  
                <div class="relative py-5 flex flex-col text-sm">
                    <svg class="w-5 absolute fill-gray-500" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                    <h3 class="ml-8">Periode Aktivitas</h3>
                    <span class="ml-8 text-gray-500">5 Januari 2025 - 29 Juni 2025</span>
                    <h3 class="ml-8 mt-2">Jadwal aktivitas</h3>
                    <p class="ml-8 text-gray-500 leading-[20px]">Sabtu, 08:00 - 13:00<br>
                        Minggu, 08:00 - 13:00</p>
                    <svg class="w-5 absolute top-[140px] fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                        <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                        <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                    </svg>
                    <p class="ml-8 mt-3 text-gray-500 leading-[20px]">JL. H. Sanyar, No.11, RT.15 RW.5, Penggilingan, Cakung, Jakarta Timur, 13940 Kota Administrasi Jakarta Timur, DKI Jakarta</p>
                </div>
                <div class="flex items-center text-sm">
                    <div class="h-10 w-[80%] flex gap-1 bg-gray-200 rounded-lg">
                        <img class="ml-2 w-6" src="{{ asset('images/icon/guild.svg') }}" alt="">
                        <span class="mt-2 text-sky-700 font-semibold">Rumah Belajar Duta Semesta</span>
                    </div>
                    <img class="ml-5" src="{{ asset('images/icon/bookmark.svg') }}" alt="">
                </div>
            </div>
            <div class="p-6 mt-4 relative bg-white rounded-lg">  
                <span class="text-xl">Ambil Langkah Sekarang</span> 
                <div class="flex">
                    <button class="mt-4 mr-2 h-12 w-[80%] bg-sky-700 text-white rounded-full" data-modal-target="formRelawan" data-modal-toggle="formRelawan">Gabung Relawan</button>
                    <a class="mt-4 p-3 border border-sky-700 rounded-full" href="#"><img src="{{ asset('images/icon/messenger.svg') }}" alt=""></a>
                </div>
                <div class="flex mt-2">
                    <i class="fa-solid fa-circle-info pt-0.5 flex-none text-red-600"></i>
                    <span class="text-sm pl-2 flex-1 text-red-600">Batas Registrasi : 13 Desember 2024</span>
                </div>
                <hr class="my-6">
                <div class="flex gap-5 text-gray-500">
                    <span>Bagikan :</span>
                    <img src="{{ asset('images/icon/link.svg') }}" alt="">
                    <img src="{{ asset('images/icon/fb.svg') }}" alt="">
                    <img src="{{ asset('images/icon/instagram.svg') }}" alt="">
                    <img src="{{ asset('images/icon/in.svg') }}" alt="">
                </div>
            </div>
        </aside>  
    </section> 
</x-app-layout>
