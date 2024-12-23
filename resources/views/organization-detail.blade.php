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
                    <img class="h-full w-full object-cover rounded-lg" src="{{ asset('images/card/card-2.png') }}" alt="">  
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg ">  
                    <h1 class="text-3xl font-semibold">Deskripsi</h1>  
                    <p class="mt-5">Lingkar Daerah Belajar (LDB)mendukung dan mendorong praktik baik serta kebijakan pendidikan daerah yang Berpihak Kepada Anak. Kolaborasi ini diinisiasi untuk menciptakan pemerataan kualitas pendidikan yang menjadi kunci terwujudnya masyarakat sejahtera.</p>  
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
                    <h1 class="text-3xl font-semibold">Aktvitas</h1>  
                    <div class="mt-4 flex gap-3">
                        <div class="p-1 w-[30%] flex flex-col border border-neutral-200 rounded-xl">  
                            <img class="w-56 rounded-xl object-cover" src="{{ asset('images/card/card-3.png') }}" alt="">
                            <div class="p-2 flex flex-col">
                                <span class="truncate text-sm">Konfrensi Pendidikan Indonesia shajhsjah</span>
                                <p class="pr-1 pt-3 line-clamp-2 text-xs text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum aspernatur tempore eligendi officiis aliquam eum nam consectetur nesciunt laboriosam ad alias explicabo libero, sint in laudantium vitae? Commodi, veritatis dicta.</p>
                                <div class="my-4 flex items-center">
                                    <svg class="w-4 fill-sky-700" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                                    <span class="pt-0.5 pl-1 text-[11px] text-sky-700">12 Desember 2024</span>
                                    <div class="mt-[2px] mx-1 size-[5px] rounded-full bg-neutral-200"></div>
                                    <svg class="w-4 fill-sky-700" version="1.1" id="fi_1008001" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 5   11.999 511.999;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426
                                                    c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849
                                                    c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849
                                                    c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654
                                                    c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452
                                                    c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557
                                                    c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43
                                                    S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438
                                                    s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"></path>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g></svg>
                                    <span class="pt-0.5 pl-1 text-[11px] text-sky-700">Jakarta</span>
                                </div>
                                <div class="flex gap-7">
                                    <button class="py-2 px-10 text-xs font-semibold border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700">Gabung</button>
                                    <svg class="w-4 fill-sky-700" version="1.1" id="fi_25667" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 431.972 431.972" style="enable-background:new 0 0 431.972 431.972;" xml:space="preserve">
                                        <g>
                                            <path d="M393.146,14.279c-3.713-5.333-8.713-9.233-14.989-11.707c-3.997-1.711-8.186-2.568-12.565-2.568V0H66.378
                                                c-4.377,0-8.562,0.857-12.56,2.568c-6.28,2.472-11.278,6.377-14.989,11.707c-3.71,5.33-5.568,11.228-5.568,17.701v368.019
                                                c0,6.475,1.858,12.371,5.568,17.706c3.711,5.329,8.709,9.233,14.989,11.704c3.994,1.711,8.183,2.566,12.56,2.566
                                                c8.949,0,16.844-3.142,23.698-9.418l125.91-121.062l125.91,121.065c6.663,6.081,14.562,9.127,23.695,9.127
                                                c4.76,0,8.948-0.756,12.565-2.279c6.276-2.471,11.276-6.375,14.989-11.711c3.71-5.328,5.564-11.225,5.564-17.699V31.98
                                                C398.71,25.507,396.852,19.609,393.146,14.279z M362.166,391.139L241.397,275.224l-25.411-24.264l-25.409,24.264L69.809,391.139
                                                V36.549h292.357V391.139L362.166,391.139z"></path>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                </div>
                            </div>
                        </div>  
                        <div class="p-1 w-[30%] flex flex-col border border-neutral-200 rounded-xl">  
                            <img class="w-56 rounded-xl object-cover" src="{{ asset('images/card/card-3.png') }}" alt="">
                            <div class="p-2 flex flex-col">
                                <span class="truncate text-sm">Konfrensi Pendidikan Indonesia shajhsjah</span>
                                <p class="pr-1 pt-3 line-clamp-2 text-xs text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum aspernatur tempore eligendi officiis aliquam eum nam consectetur nesciunt laboriosam ad alias explicabo libero, sint in laudantium vitae? Commodi, veritatis dicta.</p>
                                <div class="my-4 flex items-center">
                                    <svg class="w-4 fill-sky-700" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                                    <span class="pt-0.5 pl-1 text-[11px] text-sky-700">12 Desember 2024</span>
                                    <div class="mt-[2px] mx-1 size-[5px] rounded-full bg-neutral-200"></div>
                                    <svg class="w-4 fill-sky-700" version="1.1" id="fi_1008001" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 5   11.999 511.999;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426
                                                    c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849
                                                    c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849
                                                    c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654
                                                    c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452
                                                    c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557
                                                    c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43
                                                    S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438
                                                    s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"></path>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g></svg>
                                    <span class="pt-0.5 pl-1 text-[11px] text-sky-700">Jakarta</span>
                                </div>
                                <div class="flex gap-7">
                                    <button class="py-2 px-10 text-xs font-semibold border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700">Gabung</button>
                                    <svg class="w-4 fill-sky-700" version="1.1" id="fi_25667" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 431.972 431.972" style="enable-background:new 0 0 431.972 431.972;" xml:space="preserve">
                                        <g>
                                            <path d="M393.146,14.279c-3.713-5.333-8.713-9.233-14.989-11.707c-3.997-1.711-8.186-2.568-12.565-2.568V0H66.378
                                                c-4.377,0-8.562,0.857-12.56,2.568c-6.28,2.472-11.278,6.377-14.989,11.707c-3.71,5.33-5.568,11.228-5.568,17.701v368.019
                                                c0,6.475,1.858,12.371,5.568,17.706c3.711,5.329,8.709,9.233,14.989,11.704c3.994,1.711,8.183,2.566,12.56,2.566
                                                c8.949,0,16.844-3.142,23.698-9.418l125.91-121.062l125.91,121.065c6.663,6.081,14.562,9.127,23.695,9.127
                                                c4.76,0,8.948-0.756,12.565-2.279c6.276-2.471,11.276-6.375,14.989-11.711c3.71-5.328,5.564-11.225,5.564-17.699V31.98
                                                C398.71,25.507,396.852,19.609,393.146,14.279z M362.166,391.139L241.397,275.224l-25.411-24.264l-25.409,24.264L69.809,391.139
                                                V36.549h292.357V391.139L362.166,391.139z"></path>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                </div>
                            </div>
                        </div>  
                    </div>  
                </div>  

                <div class="mt-6 p-6 bg-white rounded-lg">  
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
        
        <aside class="mt-10 w-2/6 ml-4 sticky top-5">  
            <div class="p-6 relative bg-white rounded-lg ">  
                <h2 class="text-2xl font-semibold">Lingkar Daerah Belajar</h2>  
                <div class="relative py-5 flex flex-col text-sm gap-3.5">
                    <svg class="w-5 absolute fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                        <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                        <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                    </svg>
                    <span class="ml-7">Kota Administrasi Jakarta Selatan, DKI Jakarta</span>
                    <svg class="w-5 absolute top-14 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                        <path d="M437,268.152h-50.118c-6.821,0-13.425,0.932-19.71,2.646c-12.398-24.372-37.71-41.118-66.877-41.118h-88.59  
                            c-29.167,0-54.479,16.746-66.877,41.118c-6.285-1.714-12.889-2.646-19.71-2.646H75c-41.355,0-75,33.645-75,75v80.118  
                            c0,24.813,20.187,45,45,45h422c24.813,0,45-20.187,45-45v-80.118C512,301.797,478.355,268.152,437,268.152z M136.705,304.682  
                            v133.589H45c-8.271,0-15-6.729-15-15v-80.118c0-24.813,20.187-45,45-45h50.118c4.072,0,8.015,0.553,11.769,1.572  
                            C136.779,301.366,136.705,303.016,136.705,304.682z M345.295,438.271h-178.59V304.681c0-24.813,20.187-45,45-45h88.59  
                            c24.813,0,45,20.187,45,45V438.271z M482,423.271c0,8.271-6.729,15-15,15h-91.705v-133.59c0-1.667-0.074-3.317-0.182-4.957  
                            c3.754-1.018,7.697-1.572,11.769-1.572H437c24.813,0,45,20.187,45,45V423.271z"></path>  
                        <path d="M100.06,126.504c-36.749,0-66.646,29.897-66.646,66.646c-0.001,36.749,29.897,66.646,66.646,66.646  
                            c36.748,0,66.646-29.897,66.646-66.646C166.706,156.401,136.809,126.504,100.06,126.504z M100.059,229.796  
                            c-20.207,0-36.646-16.439-36.646-36.646c0-20.207,16.439-36.646,36.646-36.646c20.207,0,36.646,16.439,36.646,36.646  
                            C136.705,213.357,120.266,229.796,100.059,229.796z"></path>  
                        <path d="M256,43.729c-49.096,0-89.038,39.942-89.038,89.038c0,49.096,39.942,89.038,89.038,89.038s89.038-39.942,89.038-89.038  
                            C345.038,83.672,305.096,43.729,256,43.729z M256,191.805c-32.554,0-59.038-26.484-59.038-59.038  
                            c0-32.553,26.484-59.038,59.038-59.038s59.038,26.484,59.038,59.038C315.038,165.321,288.554,191.805,256,191.805z"></path>  
                        <path d="M411.94,126.504c-36.748,0-66.646,29.897-66.646,66.646c0.001,36.749,29.898,66.646,66.646,66.646  
                            c36.749,0,66.646-29.897,66.646-66.646C478.586,156.401,448.689,126.504,411.94,126.504z M411.94,229.796  
                            c-20.206,0-36.646-16.439-36.646-36.646c0.001-20.207,16.44-36.646,36.646-36.646c20.207,0,36.646,16.439,36.646,36.646  
                            C448.586,213.357,432.147,229.796,411.94,229.796z"></path>  
                    </svg>
                    <span class="ml-7">group</span>

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