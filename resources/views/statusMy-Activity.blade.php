<link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
<img class="absolute top-0 right-0 z-0" src="{{ asset('images/shape/s-ad.png') }}" alt="">
<x-app-layout>
    @section('title', 'Status - ' . config('app.name'))
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <section class="flex gap-5 items-start mx-20">
        <aside class="w-2/6 ml-4 sticky top-5">  
            <div class="p-6 relative bg-white rounded-lg ">
                <div class="flex flex-col gap-5">
                    <div class="relative pr-20 flex items-center gap-5">
                        <svg class="ml-4 w-5" version="1.1" id="fi_266033" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                              <circle cx="256" cy="114.526" r="114.526"></circle>
                            </g>
                            <g>
                              <path d="M256,256c-111.619,0-202.105,90.487-202.105,202.105c0,29.765,24.13,53.895,53.895,53.895h296.421
                                c29.765,0,53.895-24.13,53.895-53.895C458.105,346.487,367.619,256,256,256z"></path>
                            </g>
                        </svg>
                        <h2 class="text-lg lg:text-xl font-semibold">Hasan Nasuha</h2>
                        <div class="absolute right-0">                            
                            <button class="flex items-center gap-1 border border-sky-700 py-1 px-3 rounded-full">
                                <svg class="w-4 fill-sky-700" viewBox="0 0 492.49284 492" xmlns="http://www.w3.org/2000/svg" id="fi_1828911"><path d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0"></path><path d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0"></path></svg>
                                <span class="font-semibold text-sky-700">Edit</span>
                            </button>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col gap-3 font-semibold bg-slate-200 rounded-xl border border-slate-300">
                        <span class="text-sky-700 text-sm">Poin saya</span>
                        <div class="flex items-center gap-2">
                            <svg class="w-7" id="fi_15660192" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><circle cx="32" cy="32" fill="#ffb300" r="28"></circle><circle cx="32" cy="32" fill="#ff8f00" r="22"></circle><path d="m32.8416 19.3303 3.5085 7.1091 7.8453 1.14c.7698.1119 1.0771 1.0578.5201 1.6008l-5.6769 5.5336 1.3401 7.8136c.1315.7667-.6732 1.3513-1.3617.9893l-7.0171-3.6891-7.0171 3.6891c-.6885.362-1.4932-.2227-1.3617-.9893l1.3401-7.8136-5.6769-5.5336c-.557-.5429-.2496-1.4889.5201-1.6008l7.8453-1.14 3.5085-7.1091c.3442-.6975 1.3389-.6975 1.6831 0z" fill="#eceff1"></path></svg>
                            <span class="text-md text-sky-700">100 Poin</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 mt-4 flex flex-col gap-4 bg-white text-sm">  
                <a href="/status/my-activity" class="py-4 px-5 flex items-center gap-5 bg-sky-100 border border-sky-700 rounded-xl">
                    <svg class="w-6 fill-sky-700" id="fi_3503786" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g fill=""><path d="m13.1 1a10.927 10.927 0 0 0 -10.534 8.223l-.732-1.107a1 1 0 1 0 -1.668 1.1l2.2 3.334a1.084 1.084 0 0 0 .634.425 1.024 1.024 0 0 0 .756-.145l3.3-2.223a1 1 0 1 0 -1.115-1.659l-1.501 1.012a8.909 8.909 0 1 1 8.66 11.04 8.892 8.892 0 0 1 -7.281-3.822 1 1 0 1 0 -1.64 1.143 10.881 10.881 0 0 0 19.821-6.321 10.963 10.963 0 0 0 -10.9-11z"></path><path d="m13 5.95a1 1 0 0 0 -1 1v5.05a1.04 1.04 0 0 0 .293.707l3 3.027a1.013 1.013 0 0 0 1.414.007 1 1 0 0 0 .006-1.414l-2.713-2.738v-4.639a1 1 0 0 0 -1-1z"></path></g></svg>
                    <span class="text-sky-700 font-semibold">Aktivitas Saya</span>
                </a>
                <a href="/status/testinomy" class="py-4 px-5 flex items-center gap-5 hover:bg-sky-100 hover:border-sky-700 border border-transparent rounded-xl">
                    <svg class="w-6 fill-sky-700" enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" id="fi_11213138"><g id="Grid" display="none"></g><g id="Webinar"></g><g id="Assignment"></g><g id="Article"></g><g id="Audi"></g><g id="Video_Tutorial"></g><g id="Discussion_1_"></g><g id="Resume"></g><g id="Trophy"></g><g id="Encyclopedia"></g><g id="Smartphone"></g><g id="Online_Lesson"></g><g id="Webpage"></g><g id="Search"></g><g id="Registration"></g><g id="Certificate_1_"></g><g id="Review"><path d="m20.03 14.084c0-.497-.403-.9-.9-.9h-9.9c-.497 0-.9.403-.9.9s.403.9.9.9h9.9c.497 0 .9-.403.9-.9z"></path><path d="m9.228 17.729c-.497 0-.9.403-.9.9s.403.9.9.9h5.249c.497 0 .9-.403.9-.9s-.403-.9-.9-.9z"></path><path d="m25.96 14.134c-.497 0-.9.403-.9.9v7.279c0 1.362-1.108 2.47-2.47 2.47h-6.02c-.195 0-.385.063-.541.181l-5.198 3.909c-.132.099-.256.058-.318.024-.063-.032-.167-.111-.163-.272l.1-2.91c.008-.244-.083-.481-.252-.656-.169-.176-.403-.275-.647-.275h-4.181c-1.362 0-2.47-1.107-2.47-2.47v-11.9c0-1.367 1.108-2.479 2.47-2.479h11.09c.497 0 .9-.403.9-.9s-.403-.9-.9-.9h-11.09c-2.354 0-4.27 1.92-4.27 4.28v11.899c0 2.354 1.916 4.271 4.27 4.271h3.249l-.068 1.982c-.024.814.409 1.554 1.132 1.929.309.161.642.24.972.24.443 0 .882-.143 1.256-.422l4.959-3.729h5.719c2.354 0 4.27-1.916 4.27-4.271v-7.279c.001-.498-.402-.901-.899-.901z"></path><path d="m30.825 5.561c-.163-.5-.564-.874-1.073-1l-2.3-.573-1.256-2.01c-.557-.894-2.011-.892-2.567 0l-1.256 2.01-2.3.573c-.509.126-.911.5-1.073 1s-.058 1.039.28 1.442l1.524 1.814-.166 2.364c-.037.524.195 1.021.62 1.33.264.192.574.291.888.291.191 0 .384-.037.569-.112l2.198-.888 2.197.888c.487.198 1.031.13 1.457-.178.425-.309.657-.806.621-1.331l-.166-2.364 1.524-1.815c.337-.402.442-.941.279-1.441zm-3.416 2.377c-.15.179-.225.409-.208.643l.16 2.27-2.11-.853c-.108-.044-.223-.066-.337-.066s-.229.022-.337.066l-2.109.853.159-2.27c.016-.233-.059-.464-.208-.643l-1.463-1.742 2.208-.551c.226-.057.422-.198.545-.396l1.206-1.929 1.206 1.929c.124.198.319.34.545.396l2.208.551z"></path></g><g id="Ebook"></g><g id="Online_Class_1_"></g><g id="Schedule"></g><g id="Idea"></g><g id="Login"></g><g id="Science"></g><g id="Time"></g><g id="Business"></g><g id="Projector"></g></svg>
                    <span class="text-sky-700 font-semibold">Testimoni</span>
                </a>
                <a href="/status/bookmark" class="py-4 px-5 flex items-center gap-5 hover:bg-sky-100 hover:border-sky-700 border border-transparent rounded-xl">
                    <svg class="w-6 fill-sky-700" id="fi_5662990" enable-background="new 0 0 511.958 511.958" viewBox="0 0 511.958 511.958" xmlns="http://www.w3.org/2000/svg"><path d="m400.579 0h-289.2c-25.487 0-47.133 20.556-47.133 47.133v427.63c.075 33.733 41.277 49.561 64.701 25.882l110.235-110.204c8.834-9.216 24.76-9.216 33.594 0l110.235 110.204c23.434 23.688 64.631 7.836 64.701-25.882v-427.63c0-26.577-21.646-47.133-47.133-47.133zm17.133 474.764c-.037 7.142-8.915 9.499-13.508 4.649-22.037-22.071-84.882-84.897-110.195-110.164-19.913-20.826-56.117-20.832-76.021-.04-17.486 17.453-51.714 51.671-78.696 78.645l-31.39 31.376c-4.523 4.799-13.512 3.197-13.657-4.194v-427.903c0-9.582 7.767-17.133 17.134-17.133h289.199c9.353 0 17.134 7.539 17.134 17.133z"></path></svg>
                    <span class="text-sky-700 font-semibold">Aktivitas Tersimpan</span>
                </a>
                <a class="py-4 px-5 flex items-center gap-5 hover:bg-sky-100 hover:border-sky-700 border border-transparent rounded-xl">
                    <svg class="w-6 fill-sky-700" viewBox="0 0 511 512" xmlns="http://www.w3.org/2000/svg" id="fi_1286853"><path d="m361.5 392v40c0 44.113281-35.886719 80-80 80h-201c-44.113281 0-80-35.886719-80-80v-352c0-44.113281 35.886719-80 80-80h201c44.113281 0 80 35.886719 80 80v40c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-40c0-22.054688-17.945312-40-40-40h-201c-22.054688 0-40 17.945312-40 40v352c0 22.054688 17.945312 40 40 40h201c22.054688 0 40-17.945312 40-40v-40c0-11.046875 8.953125-20 20-20s20 8.953125 20 20zm136.355469-170.355469-44.785157-44.785156c-7.8125-7.8125-20.476562-7.8125-28.285156 0-7.8125 7.808594-7.8125 20.472656 0 28.28125l31.855469 31.859375h-240.140625c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20h240.140625l-31.855469 31.859375c-7.8125 7.808594-7.8125 20.472656 0 28.28125 3.90625 3.90625 9.023438 5.859375 14.140625 5.859375 5.121094 0 10.238281-1.953125 14.144531-5.859375l44.785157-44.785156c19.496093-19.496094 19.496093-51.214844 0-70.710938zm0 0"></path></svg>
                    <span class="text-sky-700 font-semibold">Logout</span>
                </a>
            </div>
        </aside>  
        <div class="relative w-4/6 flex-grow"> 
            <div class="flex">
                <span class="text-2xl font-bold">Aktivitas Saya</span>
            </div>
            <div class="mt-4">
                <div class="mt-6 p-6 bg-white rounded-lg">  
                    <div class="flex gap-2">
                        <button class="py-2 px-5 border bg-sky-100 border-sky-700 rounded-full text-md text-sky-700 font-bold">Semua</button>
                        <button class="py-2 px-5 border border-neutral-200 rounded-full text-md">Dalam Review</button>
                        <button class="py-2 px-5 border border-neutral-200 rounded-full text-md">Diterima</button>
                        <button class="py-2 px-5 border border-neutral-200 rounded-full text-md">Sedang Berlangsung</button>
                    </div>
                    <div class="mt-5 flex items-center gap-3">
                        <div class="p-px relative bg-neutral-200 rounded-full">
                            <input type="text" class="pr-10 h-9 w-60 text-sm placeholder:text-neutral-200 focus:outline-none focus:ring-0 border-none rounded-full" placeholder="Cari Aktivitas">
                            <svg class="w-5 fill-gray-500 absolute right-4 top-1/2 transform -translate-y-1/2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                                <path d="M505.749,475.587l-145.6-145.6c28.203-34.837,45.184-79.104,45.184-127.317c0-111.744-90.923-202.667-202.667-202.667
                                    S0,90.925,0,202.669s90.923,202.667,202.667,202.667c48.213,0,92.48-16.981,127.317-45.184l145.6,145.6
                                    c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251C514.091,497.411,514.091,483.928,505.749,475.587z
                                     M202.667,362.669c-88.235,0-160-71.765-160-160s71.765-160,160-160s160,71.765,160,160S290.901,362.669,202.667,362.669z"/>
                            </svg>
                        </div>
                        <div class="h-5 w-px bg-neutral-200"></div>
                        <button class="flex items-center border border-neutral-200 rounded-full">  
                            <h1 class="pl-5 py-1.5 text-gray-500">Terbaru</h1>
                            <i class="fa-solid fa-chevron-down pl-2 pr-5 text-gray-500"></i>
                        </button>
                    </div>
                    <div class="mx-2 my-5 flex flex-col border border-neutral-200 rounded-[0.7rem]">  
                        <div class="flex items-center p-3 gap-3">
                            <div class="flex items-center gap-1">
                                <img class="ml-2 w-4" src="{{ asset('images/icon/guild.svg') }}" alt="">
                                <span class="text-sky-700 text-xs font-semibold">Rumah Belajar Duta Semesta</span>
                            </div>
                            <div class="h-4 w-0 border border-neutral-200"></div>
                            <svg class="w-4 fill-gray-500" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                            <span class="text-xs text-gray-500">5 Januari 2025 - 29 Juni 2025</span>
                            <div class="ml-auto px-2 py-1.5 flex justify-center items-center gap-1 bg-yellow-400 rounded-lg">
                                <div class="size-1.5 bg-white rounded-full"></div>
                                <span class="text-xs text-white">Dalam Review</span>
                            </div>
                        </div>
                        <div class="pb-3 flex border-dashed border-b-2">
                            <img class="mx-4 w-32 aspect-square object-cover rounded-lg" src="{{ asset('images/card/card-1.png') }}" alt="">
                            <div class="flex flex-col">
                                <span class="text-lg font-semibold">Duta Semesta Batch 2</span>
                                <div class="flex relative">
                                    <svg class="w-5 absolute top-1 fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                        <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                                        <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                                    </svg>
                                    <p class="ml-8 text-sm text-gray-500">JL. H. Sanyar, No.11, RT.15 RW.5, Penggilingan, Cakung, Jakarta Timur, 13940 Kota Administrasi Jakarta Timur, DKI Jakarta</p>
                                </div>
                                <div class="mt-3 flex gap-3">
                                    <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Lingkungan</span>   
                                    <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Pendidikan</span>   
                                </div>
                            </div>
                        </div>
                        <div class="m-3 flex justify-end items-center">                      
                            <button class="px-5 py-2 text-neutral-600 bg-neutral-400 text-xs rounded-full">
                                Bocil Klaim
                            </button>
                        </div>
                    </div>
                    <div class="mx-2 my-5 flex flex-col border border-neutral-200 rounded-[0.7rem]">  
                        <div class="flex items-center p-3 gap-3">  
                            <div class="flex items-center gap-1">
                                <img class="ml-2 w-4" src="{{ asset('images/icon/guild.svg') }}" alt="">
                                <span class="text-sky-700 text-xs font-semibold">Rumah Belajar Duta Semesta</span>
                            </div>
                            <div class="h-4 w-0 border border-neutral-200"></div>
                            <svg class="w-4 fill-gray-500" id="fi_2948088" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm-380 32h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16v-16h46c18.748 0 34 15.252 34 34v38h-448v-38c0-18.748 15.252-34 34-34zm380 408h-380c-18.748 0-34-15.252-34-34v-270h448v270c0 18.748-15.252 34-34 34z"></path></g></svg>
                            <span class="text-xs text-gray-500">5 Januari 2025 - 29 Juni 2025</span>
                            <div class="ml-auto px-2 py-1.5 flex justify-center items-center gap-1 bg-green-500 rounded-lg">
                                <div class="size-1.5 bg-white rounded-full"></div>
                                <span class="text-xs text-white">Selesai</span>
                            </div>
                        </div>
                        <div class="pb-3 flex border-dashed border-b-2">
                            <img class="mx-4 w-32 aspect-square object-cover rounded-lg" src="{{ asset('images/card/card-1.png') }}" alt="">
                            <div class="flex flex-col">
                                <span class="text-lg font-semibold">Duta Semesta Batch 2</span>
                                <div class="flex relative">
                                    <svg class="w-5 absolute top-1 fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                        <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z"/>  
                                        <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z"/>  
                                    </svg>
                                    <p class="ml-8 text-sm text-gray-500">JL. H. Sanyar, No.11, RT.15 RW.5, Penggilingan, Cakung, Jakarta Timur, 13940 Kota Administrasi Jakarta Timur, DKI Jakarta</p>
                                </div>
                                <div class="mt-3 flex gap-3">
                                    <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Lingkungan</span>   
                                    <span class="px-2 py-1 bg-amber-100 text-yellow-700 text-xs rounded-lg">Pendidikan</span>   
                                </div>
                            </div>
                        </div>
                        <div class="m-3 flex justify-between items-center">       
                            <div class="px-3 py-2 bg-sky-100 rounded-xl border border-sky-300 justify-center items-center gap-2 inline-flex">
                                <i class="fa-solid fa-circle-info flex-none text-sky-700"></i>
                                <div class="text-[#142f37] text-xs font-normal leading-normal">Klaim sertifikat membutuhkan Poin</div>
                            </div>                       
                            <button type="button" data-modal-target="warningSertificate" data-modal-toggle="warningSertificate" class="px-5 py-2 flex gap-1 text-white bg-sky-700 text-xs rounded-full">
                                <svg class="w-4 fill-white" id="fi_3502477"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m21 19h-18a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2z"></path><path d="m12 2a1 1 0 0 0 -1 1v10.59l-3.29-3.3a1 1 0 0 0 -1.42 1.42l5 5a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 -1.42-1.42l-3.29 3.3v-10.59a1 1 0 0 0 -1-1z"><
                                <span>            
                                    Unduh Sertifikat Ceunah
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</x-app-layout>
