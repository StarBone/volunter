<img class="absolute top-0 right-0 z-0" src="{{ asset('images/shape/s-ad.png') }}" alt="">
<x-app-layout>
    @section('title', 'Organisasi - ' . config('app.name'))  
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
                                    <svg class="w-4 fill-sky-700" id="fi_3239948" enable-background="new 0 0 323.358 323.358" viewBox="0 0 323.358 323.358" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m48.863 323.358h225.632c23.653 0 42.875-19.222 42.875-42.875v-213.656c0-23.653-19.222-42.875-42.875-42.875h-17.006v-11.976c0-6.587-5.39-11.976-11.977-11.976s-11.976 5.389-11.976 11.976v11.976h-143.714v-11.976c0-6.587-5.39-11.976-11.977-11.976s-11.976 5.389-11.976 11.976v11.976h-17.006c-23.653 0-42.875 19.222-42.875 42.875v213.656c0 23.653 19.222 42.875 42.875 42.875zm-18.922-256.531c0-10.419 8.503-18.922 18.922-18.922h17.006v11.976c0 6.587 5.389 11.976 11.976 11.976s11.976-5.389 11.976-11.976v-11.976h143.715v11.976c0 6.587 5.389 11.976 11.976 11.976s11.976-5.389 11.976-11.976v-11.976h17.006c10.419 0 18.922 8.503 18.922 18.922v34.971h-263.475zm0 58.923h263.477v154.733c0 10.419-8.503 18.922-18.922 18.922h-225.633c-10.419 0-18.922-8.503-18.922-18.922z"></path></g></g></svg>
                                    <span class="pt-0.5 pl-1 text-[10px] text-sky-700">12 Desember 2024</span>
                                    <div class="mt-[2px] mx-1 size-[5px] rounded-full bg-neutral-200"></div>
                                    <svg class="w-4 fill-sky-700" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                                        <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426
                                            c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849
                                            c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849
                                            c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654
                                            c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452
                                            c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557
                                            c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>
                                        <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43
                                            S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438
                                            s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>
                                    </svg>                                    
                                    <span class="pt-0.5 pl-1 text-[10px] text-sky-700">Jakarta</span>
                                </div>
                                <div class="flex items-center gap-7">
                                    <button class="py-2 px-10 text-xs font-semibold border rounded-full text-sky-700 border-sky-700 hover:text-white hover:bg-sky-700">Gabung</button>
                                    <a href="#">
                                        <svg class="w-4 fill-sky-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 431.972 431.972">
                                            <path d="M393.146,14.279c-3.713-5.333-8.713-9.233-14.989-11.707c-3.997-1.711-8.186-2.568-12.565-2.568V0H66.378c-4.377,0-8.562,0.857-12.56,2.568c-6.28,2.472-11.278,6.377-14.989,11.707c-3.71,5.33-5.568,11.228-5.568,17.701v368.019c0,6.475,1.858,12.371,5.568,17.706c3.711,5.329,8.709,9.233,14.989,11.704c3.994,1.711,8.183,2.566,12.56,2.566c8.949,0,16.844-3.142,23.698-9.418l125.91-121.062l125.91,121.065c6.663,6.081,14.562,9.127,23.695,9.127c4.76,0,8.948-0.756,12.565-2.279c6.276-2.471,11.276-6.375,14.989-11.711c3.71-5.328,5.564-11.225,5.564-17.699V31.98C398.71,25.507,396.852,19.609,393.146,14.279z M362.166,391.139L241.397,275.224l-25.411-24.264l-25.409,24.264L69.809,391.139V36.549h292.357V391.139L362.166,391.139z"/>
                                        </svg> 
                                    </a>                         
                                </div>
                            </div>
                        </div>  {{-- card --}}
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
                <div class="relative pt-5 flex flex-col text-sm gap-4 fill-gray-500 text-gray-500">
                    <div class="relative flex items-center">
                        <svg class="w-5 -mt-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                            <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                            <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                        </svg>
                        <span class="ml-2">Kota Administrasi Jakarta Selatan, DKI Jakarta</span>
                    </div>

                    <div class="relative flex items-center">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
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
                        <span class="ml-2">group</span>
                   </div>

                   <div class="relative flex items-center">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                            <path d="M467,76H45C20.238,76,0,96.149,0,121v270c0,24.86,20.251,45,45,45h422c24.762,0,45-20.149,45-45V121  
                                C512,96.143,491.752,76,467,76z M460.09,106c-14.549,14.597-185.445,186.05-192.466,193.094c-5.864,5.882-17.381,5.886-23.248,0  
                                L51.91,106H460.09z M30,385.485v-258.97L159.065,256L30,385.485z M51.91,406l128.334-128.752l42.885,43.025  
                                c17.574,17.631,48.175,17.624,65.743,0l42.885-43.024L460.09,406H51.91z M482,385.485L352.935,256L482,126.515V385.485z"></path>  
                        </svg>
                        <span class="ml-2">johndoe@gmail.com</span>
                    </div>

                    <div class="relative flex items-center">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.6 482.6">  
                            <path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2c2.3,0.1,4.5,0.2,6.8,0.2  
                                c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14  
                                c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8  
                                c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8  
                                c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8  
                                c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4  
                                c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2  
                                c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6  
                                c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4  
                                c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8  
                                c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6  
                                c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2  
                                c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2  
                                c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5  
                                C28.039,146.4,24.139,124.3,25.739,104.2z"></path>  
                        </svg>
                        <span class="ml-2">+62 123 456 789</span>
                    </div>
                    
                    <div class="relative flex items-center">
                        <svg class="w-[22px]" viewBox="0 0 512.0015 512" xmlns="http://www.w3.org/2000/svg" id="fi_1946422"><path d="m456.882812 0h-194.308593c-3.976563 0-7.792969 1.582031-10.605469 4.394531l-235.855469 235.847657c-21.484375 21.492187-21.484375 56.457031 0 77.941406l177.699219 177.695312c10.375 10.375 24.214844 16.089844 38.964844 16.09375h.003906c14.753906 0 28.59375-5.71875 38.972656-16.097656l235.847656-235.851562c2.8125-2.8125 4.394532-6.628907 4.394532-10.605469l.003906-194.308594c-.003906-30.386719-24.730469-55.109375-55.117188-55.109375zm25.113282 243.207031-231.457032 231.457031c-4.710937 4.714844-11.019531 7.308594-17.757812 7.308594-6.742188 0-13.046875-2.59375-17.757812-7.304687l-177.699219-177.695313c-9.789063-9.789062-9.789063-25.726562 0-35.519531l231.460937-231.453125h188.097656c13.847657 0 25.117188 11.265625 25.117188 25.113281zm0 0"></path><path d="m379.785156 85.078125c-12.589844 0-24.425781 4.90625-33.328125 13.808594-8.902343 8.898437-13.804687 20.734375-13.804687 33.324219 0 12.589843 4.902344 24.425781 13.804687 33.328124 8.902344 8.902344 20.738281 13.804688 33.328125 13.804688 12.585938 0 24.421875-4.902344 33.324219-13.804688 8.902344-8.902343 13.804687-20.738281 13.804687-33.328124 0-12.589844-4.902343-24.425782-13.800781-33.324219-8.902343-8.902344-20.738281-13.808594-33.328125-13.808594zm12.113282 59.246094c-3.234376 3.238281-7.539063 5.019531-12.113282 5.019531-4.578125 0-8.878906-1.78125-12.113281-5.019531-3.238281-3.234375-5.019531-7.539063-5.019531-12.113281 0-4.574219 1.78125-8.878907 5.019531-12.113282 3.234375-3.238281 7.539063-5.019531 12.113281-5.019531 4.574219 0 8.875 1.78125 12.113282 5.019531 3.238281 3.234375 5.019531 7.539063 5.019531 12.113282 0 4.574218-1.785157 8.878906-5.019531 12.113281zm0 0"></path></svg>
                        <span class="ml-2">Kategori</span>
                    </div>
                </div>
                    <div class="mt-5 flex flex-col lg:flex-row items-start lg:items-center gap-2 lg:gap-3">  
                        <span class="w-fit inline-flex overflow-hidden rounded-2xl bg-amber-100 text-xs font-medium text-amber-500">
                            <span class="px-2 py-1 bg-amber-100">Pengembangan Masyarakat</span>
                        </span>
                        <span class="w-fit inline-flex overflow-hidden rounded-2xl bg-amber-100 text-xs font-medium text-amber-500">
                            <span class="px-2 py-1 bg-amber-100">Pendidikan</span>
                        </span>
                    </div>  
                <hr class="my-6">
                <div class="flex gap-5 text-gray-500">
                    <span>Temukan Kami di :</span>
                    <img src="{{ asset('images/icon/instagram.svg') }}" alt="">
                    <img src="{{ asset('images/icon/in.svg') }}" alt="">
                </div>
            </div>
        </aside>  
    </section> 
</x-app-layout>