<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Register - ' . config('app.name'))
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div x-data="{ step: 1 }" class="flex flex-row justify-around items-center">
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

                    <div x-show="step === 1">
                        <ol class="flex items-center w-full mt-5 gap-2">
                            <li class="flex items-center text-blue-600">
                                <span class="flex items-center justify-center size-8 bg-sky-700 rounded-full shrink-0">
                                    <span class="text-sm text-white">1</span>
                                </span>
                            </li>
                            <li>
                                <span class="text-sm">Detail Organisasi</span>
                            </li>
                            <li>
                                <div class="mt-1 w-14 h-1 bg-neutral-400 rounded-full"></div>
                            </li>
                            <li class="flex items-center text-neutral-400">
                                <span class="flex items-center justify-center size-8 bg-white border border-neutral-200 rounded-full shrink-0">
                                    <span class="text-sm text-black">2</span>
                                </span>
                            </li>
                            <li>
                                <span class="text-sm text-neutral-400">Detail Kontak</span>
                            </li>
                        </ol>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="organization_name" :value="__('Nama Organisasi')" />
                            <x-text-input id="organization_name" class="block w-full" type="text" name="organization_name" :value="old('organization_name')" required autofocus autocomplete="organization_name" />
                            <x-input-error :messages="$errors->get('organization_name')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="category" :value="__('Kategori Organisasi')" />
                            <x-text-input id="category" class="block w-full" type="text" name="category" :value="old('category')" required />
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="description" :value="__('Deskripsi Organisasi')" />
                            <x-textarea-input id="description" class="block w-full" name="description" rows="4" required>{{ old('description') }}</x-textarea-input>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">  
                            <x-input-label for="upload" :value="__('Upload file jpg, png')" />  
                            <label for="upload" class="flex flex-col items-center block w-1/2 cursor-pointer border border-dashed border-gray-300 rounded-lg p-5 text-gray-500">  
                                <svg class="w-7 fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                    <path d="M472,312.642v139c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20v-139H0v139c0,33.084,26.916,60,60,60h392c33.084,0,60-26.916,60-60v-139H472z"/>  
                                    <polygon points="256,0.358 131.716,124.642 160,152.926 236,76.926 236,388.642 276,388.642 276,76.926 352,152.926 380.284,124.642"/>  
                                </svg>
                                <span class="mt-2 text-sm">Upload file jpg, png</span>  
                                <input id="upload" class="hidden" type="file" name="upload" accept=".jpg,.png" required />  
                            </label>  
                            <x-input-error :messages="$errors->get('upload')" class="mt-2" />  
                        </div>

                        <div class="mt-5">
                            <x-primary-button @click="if(validateStep1()) step = 2">
                                {{ __('Next') }}
                            </x-primary-button>
                        </div>
                    </div>

                    <div x-show="step === 2">
                        <ol class="flex items-center w-full mt-5 gap-2">
                            <li class="flex items-center text-neutral-400">
                                <svg class="size-8" clip-rule="evenodd" fill-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 21.0001 21.0001" xmlns="http://www.w3.org/2000/svg" id="fi_14090371"><g id="图层_x0020_1"><path d="m0 0h21v21h-21z" fill="none"></path><path d="m10.5038 1.31775c5.07328 0 9.1876 4.11432 9.1876 9.1876s-4.11432 9.1876-9.1876 9.1876-9.1876-4.11432-9.1876-9.1876 4.11432-9.1876 9.1876-9.1876zm-1.90792 12.1718-2.24935-2.25121c-.38321-.38344-.38329-1.00872 0-1.39208.38337-.38329 1.01143-.38089 1.39201 0l1.58578 1.58702 3.94488-3.94488c.38337-.38337 1.00872-.38337 1.39201 0 .38337.38329.38282 1.00918 0 1.39201l-4.64201 4.64201c-.38282.38282-1.00872.38337-1.39201 0-.01077-.01077-.02116-.0217-.03131-.03286z" fill="#00ba00"></path></g></svg>
                            </li>
                            <li>
                                <span class="text-sm">Detail Organisasi</span>
                            </li>
                            <li>
                                <div class="mt-1 w-14 h-1 bg-sky-700 rounded-full"></div>
                            </li>
                            <li class="flex items-center text-blue-600">
                                <span class="flex items-center justify-center size-8 bg-sky-700 rounded-full shrink-0">
                                    <span class="text-sm text-white">2</span>
                                </span>
                            </li>
                            <li>
                                <span class="text-sm">Detail Kontak</span>
                            </li>
                        </ol>
                        
                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="email" :value="__('Email Organisasi')" />
                            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="phone" :value="__('No Telepon Organisasi')" />
                            <x-text-input id="phone" class="block w-full" type="number" name="phone" :value="old('phone')" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="province" :value="__('Provinsi')" />
                            <x-text-input id="province" class="block w-full" type="text" name="province" :value="old('province')" required />
                            <x-input-error :messages="$errors->get('province')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="city" :value="__('Kota')" />
                            <x-text-input id="city" class="block w-full" type="text" name="city" :value="old('city')" required />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="address" :value="__('Alamat')" />
                            <textarea id="address" class="block w-full" name="address" required>{{ old('address') }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <div class="mt-5 flex justify-between">
                            <x-primary-button @click="step = 1">
                                {{ __('Previous') }}
                            </x-primary-button>
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
    <script>
        function validateStep1() {
            const form = document.querySelector('form');
            return form.checkValidity() ? true : form.reportValidity();
        }
    </script>
</x-guest-layout>