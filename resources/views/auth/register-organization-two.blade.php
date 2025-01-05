<x-guest-layout>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
        @section('title', 'Register - ' . config('app.name'))
        <form method="POST" action="{{ route('register.organization.step.two.post') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-row justify-around items-center">
                <div class="relative h-screen md:w-1/2" id="card-1">
                    <div class="mt-10 m-6 lg:mr-20 lg:ml-20 xl:mr-36">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="block h-9 w-auto fill-current"/>
                        </a>
                        <h1 class="mt-5 text-2xl">Buat Organisasi baru atau daftarkan Organisasi kamu</h1>
                        <div class="flex mt-4 py-2 px-4 w-full bg-blue-200 border border-blue-400 rounded-xl">
                            <i class="fa-solid fa-circle-info pt-0.5 flex-none text-sky-700"></i>
                            <span class="text-sm pl-2 flex-1">Ingin menjadi relawan?</span>
                            <a href="{{ route('register') }}" class="text-sm text-sky-700 underline font-semibold">Daftar Sekarang</a>
                        </div>

                        <div>
                            <ol class="mt-4 flex w-full items-center gap-2" aria-label="registration progress">
                                <!-- completed step -->
                                <li class="text-sm" aria-label="create an account">
                                    <div class="flex items-center gap-2">
                                        <span class="flex size-6 items-center justify-center rounded-full bg-[#0DB900] text-slate-100">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                                            </svg>
                                            <span class="sr-only">completed</span>
                                        </span>
                                        <span class="hidden w-max text-black font-semibold sm:inline">Detail Organisasi</span>
                                    </div>
                                </li>
                                <!-- current step -->
                                <li class="flex w-full items-center text-sm" aria-current="step" aria-label="choose a plan">
                                    <span class="mt-1 h-1 w-14 bg-neutral-200 rounded-full" aria-hidden="true"></span>
                                    <div class="flex items-center gap-2 pl-2">
                                        <span class="mt-0.5 pb-0.5 flex size-6 flex-shrink-0 items-center justify-center rounded-full bg-sky-700 font-bold text-slate-100 outline outline-2 outline-offset-2 outline-sky-700">2</span>
                                        <span class="hidden w-max font-bold text-sky-700 sm:inline">Detail Kontak Organisasi</span>
                                    </div>
                                </li>
                            </ol>
    
                            <div class="flex flex-col space-y-2 mt-3">
                                <x-input-label for="category" :value="__('Kategori')" />
                                <x-text-input id="category" class="block w-full" type="text" name="category" :value="old('category')" required placeholder="Masukkan kategori" />
                                <x-input-error :messages="$errors->get('category')" class="mt-2" />
                            </div>
    
                            <div class="flex flex-col space-y-2 mt-3">
                                <x-input-label for="website" :value="__('Website Organisasi (opsional)')" />
                                <x-text-input id="website" class="block w-full" type="text" name="website" :value="old('website')" placeholder="Masukkan website organisasi" />
                                <x-input-error :messages="$errors->get('website')" class="mt-2" />
                            </div>
    
                            <div class="mt-5 flex justify-between">
                                <a href="{{ route('register.organization.step.one') }}" class='inline-flex items-center px-4 py-2 bg-sky-700  border border-transparent rounded-full font-semibold text-sm text-white tracking-thight hover:bg-sky-900 focus:bg-sky-700 active:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>Kembali</a>
                                <x-primary-button>
                                    {{ __('Buat Akun') }}
                                </x-primary-button>
                            </div>
                        </div>
                        <div class="mt-5">
                            <span class="text-sm">Sudah punya akun?</span>
                            <a href="{{ route('login') }}" class="text-sm text-sky-700 underline font-semibold">Masuk Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="h-screen px-6 py-4 hidden lg:block" id="card-2">
                    <div class="w-[450px]">
                        <img src="{{ asset('images/Image.png') }}" class="w-[28.1rem] fixed object-cover" alt="">
                    </div>
                </div>
            </div>
        </form>
</x-guest-layout>