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
                        <ol class="my-4 flex w-full items-center gap-2" aria-label="registration progress">
                            <!-- completed step -->
                            <li class="text-sm" aria-label="create an account">
                                <div class="flex items-center gap-2">
                                    <span class="mt-0.5 flex size-7 flex-shrink-0 items-center justify-center rounded-full bg-sky-700 text-white">1</span>
                                    <span class="hidden w-max font-bold text-sky-700 sm:inline">Detail Organisasi</span>
                                </div>
                            </li>
                            <!-- current step -->
                            <li class="flex w-full items-center text-sm" aria-current="step" aria-label="choose a plan">
                                <span class="mt-1 h-1 w-14 bg-sky-700 rounded-full" aria-hidden="true"></span>
                                <div class="flex items-center gap-2 pl-2">
                                    <span class="mt-0.5 pb-0.5 flex size-6 flex-shrink-0 items-center justify-center rounded-full bg-sky-700 text-white outline outline-2 outline-offset-2 outline-sky-700">2</span>
                                    <span class="hidden w-max font-bold text-sky-700 sm:inline">Detail Kontak Organisasi</span>
                                </div>
                            </li>
                        </ol>
                        
                        <h1 class="text-xl font-bold">Detail Kontak</h1>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="organization_name" :value="__('Nama Organisasi')" />
                            <x-text-input id="organization_name" class="block w-full" type="text" name="organization_name" :value="old('organization_name')" required autofocus autocomplete="organization_name" />
                            <span id="organization_name-error" class="hidden text-red-500 text-sm">Tolong diisi</span>
                            <x-input-error :messages="$errors->get('organization_name')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="category" :value="__('Kategori Organisasi')" />
                            <x-text-input id="category" class="block w-full" type="text" name="category" :value="old('category')" required />
                            <span id="category-error" class="hidden text-red-500 text-sm">Tolong diisi</span>
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">
                            <x-input-label for="description" :value="__('Deskripsi Organisasi')" />
                            <x-textarea-input id="description" class="block w-full" name="description" rows="4" required>{{ old('description') }}</x-textarea-input>
                            <span id="description-error" class="hidden text-red-500 text-sm">Tolong diisi</span>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex flex-col space-y-2 mt-3">  
                            <x-input-label for="upload" :value="__('Upload file jpg, png')" />  
                            <label for="upload" class="flex flex-col items-center block w-1/2 cursor-pointer border border-dashed border-gray-300 rounded-lg p-5 text-gray-500">  
                                <svg id="upload-icon" class="w-7 fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">  
                                    <path d="M472,312.642v139c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20v-139H0v139c0,33.084,26.916,60,60,60h392c33.084,0,60-26.916,60-60v-139H472z"/>  
                                    <polygon points="256,0.358 131.716,124.642 160,152.926 236,76.926 236,388.642 276,388.642 276,76.926 352,152.926 380.284,124.642"/>  
                                </svg>
                                <img id="upload-preview" class="hidden w-32 h-32 object-cover rounded-lg" />
                                <button id="remove-image" class="hidden mt-2 text-sm text-red-500" @click="removeImage()">Remove Image</button>
                                <span class="mt-2 text-sm">Upload file jpg, png</span>  
                                <input id="upload" class="hidden" type="file" name="upload" accept=".jpg,.png" required @change="previewImage(event)" />  
                            </label>  
                            <span id="upload-error" class="hidden text-red-500 text-sm">Tolong diisi</span>
                            <x-input-error :messages="$errors->get('upload')" class="mt-2" />  
                        </div>

                        <div class="mt-5">
                            <x-primary-button @click="if(validateStep1()) step = 2">
                                {{ __('Next') }}
                            </x-primary-button>
                        </div>
                    </div>

                    <div x-show="step === 2">
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
                                <span class="mt-1 h-1 w-14 bg-sky-700 rounded-full" aria-hidden="true"></span>
                                <div class="flex items-center gap-2 pl-2">
                                    <span class="mt-0.5 pb-0.5 flex size-6 flex-shrink-0 items-center justify-center rounded-full bg-sky-700 font-bold text-slate-100 outline outline-2 outline-offset-2 outline-sky-700">2</span>
                                    <span class="hidden w-max font-bold text-sky-700 sm:inline">Detail Kontak Organisasi</span>
                                </div>
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
        const requiredFields = ['organization_name', 'category', 'description', 'upload'];
        let allFieldsFilled = true;
        requiredFields.forEach(field => {
            const input = document.getElementById(field);
            const errorLabel = document.getElementById(`${field}-error`);
            if (!input.value) {
                errorLabel.classList.remove('hidden');
                allFieldsFilled = false;
            } else {
                errorLabel.classList.add('hidden');
            }
        });
        return allFieldsFilled;
    }

    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('upload-preview');
                const icon = document.getElementById('upload-icon');
                const removeButton = document.getElementById('remove-image');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                icon.classList.add('hidden');
                removeButton.classList.remove('hidden');
                document.getElementById('upload-error').classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }
    }

    function removeImage() {
        const preview = document.getElementById('upload-preview');
        const icon = document.getElementById('upload-icon');
        const removeButton = document.getElementById('remove-image');
        const uploadInput = document.getElementById('upload');
        preview.src = '';
        preview.classList.add('hidden');
        icon.classList.remove('hidden');
        removeButton.classList.add('hidden');
        uploadInput.value = '';
    }
</script>
</x-guest-layout>