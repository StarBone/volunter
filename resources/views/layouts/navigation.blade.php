<nav x-data="{ open: false, dropdownOpen: false }" class="relative bg-white w-[97%] opacity-85 shadow-md rounded-2xl mt-3 mb-4 mx-auto z-30">  
    <!-- Primary Navigation Menu -->  
    <div class="px-4 sm:px-6 lg:px-2">  
        <div class="flex justify-between h-14 w-auto">  
            <div class="flex">  
                <!-- Navigation Links -->  
                <div class="hidden sm:-my-px sm:ms-10 sm:flex space-x-5">  
                    <x-nav-link :href="route('activity.search')" :active="request()->routeIs('activity.search')">  
                        {{ __('Cari Aktivitas') }}  
                    </x-nav-link>
                    <x-nav-link :href="route('organization.search')" :active="request()->routeIs('organization.search')">  
                        {{ __('Cari Organisasi') }}  
                    </x-nav-link>
                </div>  
            </div> 
            
            <div class="shrink-0 flex items-center justify-center transform">  
                <a href="{{ route('home') }}">  
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />  
                </a>  
            </div>  

            @auth            
            <!-- Settings Dropdown -->  
            <div class="hidden sm:flex sm:items-center sm:ms-20">  
                <x-dropdown align="right" width="custom">  
                    <x-slot name="trigger">  
                        <button type="button" class="mr-5 relative flex gap-2 max-w-xs items-center rounded-full text-sm" id="user-menu-button" aria-expanded="dropdownOpen" aria-haspopup="true" @click="dropdownOpen = !dropdownOpen">  
                            <img class="size-8 rounded-full" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">  
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-5 fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content"> 
                        <div class="mx-3 pb-2 border-b-2 border-dashed border-neutral-500">
                            <div class="py-2 px-3 flex justify-between items-center bg-neutral-100 rounded-lg">
                                <div class="flex items-center gap-1">
                                    <img class="size-7 rounded-full" src="https://media.tenor.com/HGVnQynHnmQAAAAe/alya-kujou.png" alt="">  
                                    <span class="text-xs font-semibold">{{ \Illuminate\Support\Str::before(Auth::user()->name, ' ') }}</span>

                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="w-5" id="fi_15660192" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><circle cx="32" cy="32" fill="#ffb300" r="28"></circle><circle cx="32" cy="32" fill="#ff8f00" r="22"></circle><path d="m32.8416 19.3303 3.5085 7.1091 7.8453 1.14c.7698.1119 1.0771 1.0578.5201 1.6008l-5.6769 5.5336 1.3401 7.8136c.1315.7667-.6732 1.3513-1.3617.9893l-7.0171-3.6891-7.0171 3.6891c-.6885.362-1.4932-.2227-1.3617-.9893l1.3401-7.8136-5.6769-5.5336c-.557-.5429-.2496-1.4889.5201-1.6008l7.8453-1.14 3.5085-7.1091c.3442-.6975 1.3389-.6975 1.6831 0z" fill="#eceff1"></path></svg>
                                    <span class="text-xs font-bold text-sky-700"><span class="text-xs font-bold text-sky-700">100</span>Poin</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-1.5 flex flex-col">
                            <a href="{{ route('status.my-activity') }}" class="flex mx-3 my-1 p-2 items-center gap-2 border border-neutral-200 rounded-lg">
                                <svg class="w-4 fill-gray-500" id="fi_3503786" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g fill=""><path d="m13.1 1a10.927 10.927 0 0 0 -10.534 8.223l-.732-1.107a1 1 0 1 0 -1.668 1.1l2.2 3.334a1.084 1.084 0 0 0 .634.425 1.024 1.024 0 0 0 .756-.145l3.3-2.223a1 1 0 1 0 -1.115-1.659l-1.501 1.012a8.909 8.909 0 1 1 8.66 11.04 8.892 8.892 0 0 1 -7.281-3.822 1 1 0 1 0 -1.64 1.143 10.881 10.881 0 0 0 19.821-6.321 10.963 10.963 0 0 0 -10.9-11z"></path><path d="m13 5.95a1 1 0 0 0 -1 1v5.05a1.04 1.04 0 0 0 .293.707l3 3.027a1.013 1.013 0 0 0 1.414.007 1 1 0 0 0 .006-1.414l-2.713-2.738v-4.639a1 1 0 0 0 -1-1z"></path></g></svg>
                                <span class="text-xs text-gray-500">Profile</span>
                            </a>
                            <a href="{{ route('status.testimony') }}" class="flex mx-3 my-1 p-2 items-center gap-2 border border-neutral-200 rounded-lg">
                                <svg class="w-4 fill-gray-500" enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" id="fi_11213138"><g id="Grid" display="none"></g><g id="Webinar"></g><g id="Assignment"></g><g id="Article"></g><g id="Audi"></g><g id="Video_Tutorial"></g><g id="Discussion_1_"></g><g id="Resume"></g><g id="Trophy"></g><g id="Encyclopedia"></g><g id="Smartphone"></g><g id="Online_Lesson"></g><g id="Webpage"></g><g id="Search"></g><g id="Registration"></g><g id="Certificate_1_"></g><g id="Review"><path d="m20.03 14.084c0-.497-.403-.9-.9-.9h-9.9c-.497 0-.9.403-.9.9s.403.9.9.9h9.9c.497 0 .9-.403.9-.9z"></path><path d="m9.228 17.729c-.497 0-.9.403-.9.9s.403.9.9.9h5.249c.497 0 .9-.403.9-.9s-.403-.9-.9-.9z"></path><path d="m25.96 14.134c-.497 0-.9.403-.9.9v7.279c0 1.362-1.108 2.47-2.47 2.47h-6.02c-.195 0-.385.063-.541.181l-5.198 3.909c-.132.099-.256.058-.318.024-.063-.032-.167-.111-.163-.272l.1-2.91c.008-.244-.083-.481-.252-.656-.169-.176-.403-.275-.647-.275h-4.181c-1.362 0-2.47-1.107-2.47-2.47v-11.9c0-1.367 1.108-2.479 2.47-2.479h11.09c.497 0 .9-.403.9-.9s-.403-.9-.9-.9h-11.09c-2.354 0-4.27 1.92-4.27 4.28v11.899c0 2.354 1.916 4.271 4.27 4.271h3.249l-.068 1.982c-.024.814.409 1.554 1.132 1.929.309.161.642.24.972.24.443 0 .882-.143 1.256-.422l4.959-3.729h5.719c2.354 0 4.27-1.916 4.27-4.271v-7.279c.001-.498-.402-.901-.899-.901z"></path><path d="m30.825 5.561c-.163-.5-.564-.874-1.073-1l-2.3-.573-1.256-2.01c-.557-.894-2.011-.892-2.567 0l-1.256 2.01-2.3.573c-.509.126-.911.5-1.073 1s-.058 1.039.28 1.442l1.524 1.814-.166 2.364c-.037.524.195 1.021.62 1.33.264.192.574.291.888.291.191 0 .384-.037.569-.112l2.198-.888 2.197.888c.487.198 1.031.13 1.457-.178.425-.309.657-.806.621-1.331l-.166-2.364 1.524-1.815c.337-.402.442-.941.279-1.441zm-3.416 2.377c-.15.179-.225.409-.208.643l.16 2.27-2.11-.853c-.108-.044-.223-.066-.337-.066s-.229.022-.337.066l-2.109.853.159-2.27c.016-.233-.059-.464-.208-.643l-1.463-1.742 2.208-.551c.226-.057.422-.198.545-.396l1.206-1.929 1.206 1.929c.124.198.319.34.545.396l2.208.551z"></path></g><g id="Ebook"></g><g id="Online_Class_1_"></g><g id="Schedule"></g><g id="Idea"></g><g id="Login"></g><g id="Science"></g><g id="Time"></g><g id="Business"></g><g id="Projector"></g></svg>
                                <span class="text-xs text-gray-500">Testimony</span>
                            </a>
                            <a href="{{ route('status.bookmark') }}" class="flex mx-3 my-1 p-2 items-center gap-2 border border-neutral-200 rounded-lg">
                                <svg class="w-4 fill-gray-500" id="fi_5462990" enable-background="new 0 0 511.958 511.958" viewBox="0 0 511.958 511.958" xmlns="http://www.w3.org/2000/svg"><path d="m400.579 0h-289.2c-25.487 0-47.133 20.556-47.133 47.133v427.63c.075 33.733 41.277 49.561 64.701 25.882l110.235-110.204c8.834-9.216 24.76-9.216 33.594 0l110.235 110.204c23.434 23.688 64.631 7.836 64.701-25.882v-427.63c0-26.577-21.646-47.133-47.133-47.133zm17.133 474.764c-.037 7.142-8.915 9.499-13.508 4.649-22.037-22.071-84.882-84.897-110.195-110.164-19.913-20.826-56.117-20.832-76.021-.04-17.486 17.453-51.714 51.671-78.696 78.645l-31.39 31.376c-4.523 4.799-13.512 3.197-13.657-4.194v-427.903c0-9.582 7.767-17.133 17.134-17.133h289.199c9.353 0 17.134 7.539 17.134 17.133z"></path></svg>
                                <span class="text-xs text-gray-500">Aktivitas Tersimpan</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">  
                                @csrf  
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex mx-3 my-1 p-2 items-center gap-2 border border-neutral-200 rounded-lg">
                                        <svg class="w-4 fill-gray-500" viewBox="0 0 511 512" xmlns="http://www.w3.org/2000/svg" id="fi_1286853"><path d="m361.5 392v40c0 44.113281-35.886719 80-80 80h-201c-44.113281 0-80-35.886719-80-80v-352c0-44.113281 35.886719-80 80-80h201c44.113281 0 80 35.886719 80 80v40c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-40c0-22.054688-17.945312-40-40-40h-201c-22.054688 0-40 17.945312-40 40v352c0 22.054688 17.945312 40 40 40h201c22.054688 0 40-17.945312 40-40v-40c0-11.046875 8.953125-20 20-20s20 8.953125 20 20zm136.355469-170.355469-44.785157-44.785156c-7.8125-7.8125-20.476562-7.8125-28.285156 0-7.8125 7.808594-7.8125 20.472656 0 28.28125l31.855469 31.859375h-240.140625c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20h240.140625l-31.855469 31.859375c-7.8125 7.808594-7.8125 20.472656 0 28.28125 3.90625 3.90625 9.023438 5.859375 14.140625 5.859375 5.121094 0 10.238281-1.953125 14.144531-5.859375l44.785157-44.785156c19.496093-19.496094 19.496093-51.214844 0-70.710938zm0 0"></path></svg>
                                        <span class="text-xs text-gray-500">Logout</span>
                                    </a>
                            </form>
                        </div>
                    </x-slot>  
                </x-dropdown>  
            </div>  
            @else  
            <div class="hidden sm:flex sm:items-center sm:me-10">  
                <div class="flex items-center space-x-4">  
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" @click="dropdownOpen = false">  
                        {{ __('Masuk') }}  
                    </x-nav-link>  
                    <x-dropdown align="right" width="48">  
                        <x-slot name="trigger">  
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-full text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-700 transition ease-in-out duration-150" @click="dropdownOpen = !dropdownOpen">  
                                {{ __('Daftar') }}  
                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">  
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />  
                                </svg>  
                            </button> 
                        </x-slot>  
                    
                        <x-slot name="content">
                            <div class="mt-1.5 flex flex-col">
                                <a href="{{ route('register') }}" class="flex mx-3 my-1 p-2 items-center justify-between gap-2 border border-neutral-200 rounded-lg">
                                    <span class="text-xs text-sky-700">Daftar Relawan</span>
                                    <svg class="w-3 fill-sky-700" id="fi_14440636" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2_00000103972821825980288310000012755641873027120305_"><g id="Layer_2_copy_13"><g id="_113"><path d="m479 0h-386.9c-18.2 0-33 14.8-33 33s14.8 33 33 33h307.1l-389.5 389.6c-12.9 12.9-12.9 33.8 0 46.7s33.8 12.9 46.7 0l389.5-389.6v307.1c0 18.2 14.8 33 33 33s33-14.8 33-33v-386.8c.1-18.2-14.7-33-32.9-33z"></path></g></g></g></svg>
                                </a>
                                <a href="{{ route('register.organization') }}" class="flex mx-3 my-1 p-2 justify-between items-center gap-2 border border-neutral-200 rounded-lg">
                                    <span class="text-xs text-sky-700">Daftar Organisasi</span>
                                    <svg class="w-3 fill-sky-700" id="fi_14440636" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2_00000103972821825980288310000012755641873027120305_"><g id="Layer_2_copy_13"><g id="_113"><path d="m479 0h-386.9c-18.2 0-33 14.8-33 33s14.8 33 33 33h307.1l-389.5 389.6c-12.9 12.9-12.9 33.8 0 46.7s33.8 12.9 46.7 0l389.5-389.6v307.1c0 18.2 14.8 33 33 33s33-14.8 33-33v-386.8c.1-18.2-14.7-33-32.9-33z"></path></g></g></g></svg>
                                </a>
                            </div> 
                        </x-slot>  
                    </x-dropdown>  
                </div>  
            </div>  
            @endauth  
        
            <!-- Hamburger -->  
            <div class="-me-2 flex items-center sm:hidden">  
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">  
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">  
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />  
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />  
                    </svg>  
                </button>  
            </div>  
        </div>  
    </div>  

    <!-- Responsive Navigation Menu -->  
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">  
        <div class="pt-2 pb-3 space-y-1">  
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">  
                {{ __('Home') }}  
            </x-responsive-nav-link>  
            <x-responsive-nav-link :href="route('activity.search')" :active="request()->routeIs('activity.search')">  
                {{ __('Activity/Search') }}  
            </x-responsive-nav-link>  
            <x-responsive-nav-link :href="route('organization.search')" :active="request()->routeIs('organization.search')">  
                {{ __('Organization/Search') }}  
            </x-responsive-nav-link>  
        </div>  

        <!-- Responsive Settings Options -->  
        <div class="pt-4 pb-1 border-t border-gray-200">  
            @auth  
            <div class="px-4">  
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>  
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>  
            </div>  

            <div class="mt-3 space-y-1">  
                <x-responsive-nav-link :href="route('profile.edit')">  
                    {{ __('Profile') }}  
                </x-responsive-nav-link>  

                <!-- Authentication -->  
                <form method="POST" action="{{ route('logout') }}">  
                    @csrf  

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">  
                        {{ __('Log Out') }}  
                    </x-responsive-nav-link>  
                </form>  
            </div>  
            @endauth  
        </div>  
    </div>  
</nav>