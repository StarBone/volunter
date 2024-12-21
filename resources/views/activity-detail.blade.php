<img class="absolute top-0 right-0 z-0" src="{{ asset('images/shape/s-ad.png') }}" alt="">
<x-app-layout>  
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
                    <img class="w-6 absolute" src="{{ asset('images/icon/calender.svg') }}" alt="">
                    <h3 class="ml-8">Periode Aktivitas</h3>
                    <span class="ml-8 text-gray-500">5 Januari 2025 - 29 Juni 2025</span>
                    <h3 class="ml-8 mt-2">Jadwal aktivitas</h3>
                    <p class="ml-8 text-gray-500 leading-[20px]">Sabtu, 08:00 - 13:00<br>
                        Minggu, 08:00 - 13:00</p>
                    <img class="w-6 absolute bottom-[3.5rem]" src="{{ asset('images/icon/location.svg') }}" alt="">
                    <p class="ml-8 mt-3 text-gray-500 leading-[20px]">JL. H. Sanyar, No.11, RT.15 RW.5, Penggilingan, Cakung, Jakarta Timur, 13940 Kota Administrasi Jakarta Timur, DKI Jakarta</p>
                </div>
                <div class="flex items-center text-sm">
                    <div class="py-2 pl-2 pr-14 flex gap-1 bg-gray-200 rounded-lg">
                        <img src="{{ asset('images/icon/guild.svg') }}" alt="">
                        <span class=" text-sky-700 font-semibold">Rumah Belajar Duta Semesta</span>
                    </div>
                    <img class="ml-5" src="{{ asset('images/icon/bookmark.svg') }}" alt="">
                </div>
            </div>
            <div class="p-6 mt-6 relative bg-white rounded-lg">  
                <span class="text-xl">Ambil Langkah Sekarang</span> 
                <div class="flex">
                    <button class="mt-4 px-[4.8rem] py-3 bg-sky-700 text-white rounded-full">Gabung Relawan</button>
                    <button class="mt-4 ml-3 p-3 bg-white border border-sky-700 text-sky-700 rounded-full"><img class="w-5" src="{{ asset('images/icon/messenger.svg') }}" alt=""></button>
                </div> 
            </div>  

        </aside>  
    </section> 
</x-app-layout>