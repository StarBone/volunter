<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Register - ' . config('app.name'))
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex flex-row justify-around items-center">
            <div class="relative h-screen md:w-1/2" id="card-1">
                <div class="mt-10 m-6 lg:mr-20 lg:ml-20 xl:mr-36">
                    <x-application-logo class="block h-9 w-auto fill-current"/>
                    <h1 class="mt-5 text-2xl">Buat Akun Anda Untuk Membuat Langkah Berdampak</h1>
                    <div class="flex mt-4 py-2 px-4 w-full bg-blue-200 border border-blue-400 rounded-xl">
                        <i class="fa-solid fa-circle-info pt-0.5 flex-none text-sky-700"></i>
                        <span class="text-sm pl-2 flex-1">Ingin mendaftarkan organisasi kamu?</span>
                        <a href="{{ route('register.organization') }}" class="text-sm text-sky-700 underline font-semibold">Daftar Sekarang</a>
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="name" :value="__('Nama Lengkap')" />
                        <x-text-input id="name" class="block w-full placeholder-neutral-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Isi nama lengkap Anda" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block w-full placeholder-neutral-200" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Masukkan email Anda" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="phone" :value="__('Nomor Telepon')" />
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-white border border-r-0 border-gray-300 rounded-l-md">
                                +62
                            </span>
                            <x-text-input id="phone" class="block w-full placeholder-neutral-200 rounded-none rounded-r-md" type="number" name="phone" :value="old('phone')" required placeholder="Isi nomor telepon Anda" pattern="8[0-9]{9,10}" />
                        </div>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="gender" :value="__('Jenis Kelamin')" />
                        <x-select-input id="gender" class="block w-full text-neutral-500" name="gender" :value="old('gender')" required>
                            <option selected disabled>Pilih jenis kelamin Anda</option>
                            <option value="male">Laki-Laki</option>
                            <option value="female">Perempuan</option>
                        </x-select-input>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                    </div>

                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="address" :value="__('Alamat')" />
                        <x-textarea-input id="address" class="block w-full placeholder-neutral-200" name="address" rows="3" required placeholder="Masukkan alamat Anda">{{ old('address') }}</x-textarea-input>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <div x-data="{ showPassword: false }" class="relative">
                            <x-text-input id="password" class="w-full placeholder-neutral-200"
                            x-bind:type="showPassword ? 'text' : 'password'"
                            name="password"
                            required autocomplete="new-password" placeholder="Masukkan password Anda" />
                            <button type="button" @click="showPassword = !showPassword" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-neutral-600" aria-label="Show password">
                                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5"> 
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5"> 
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>  
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                        <div x-data="{ showPassword: false }" class="relative">
                            <x-text-input id="password_confirmation" class="w-full placeholder-neutral-200"
                            x-bind:type="showPassword ? 'text' : 'password'"
                            name="password_confirmation"
                            required autocomplete="new-password" placeholder="Konfirmasi password Anda" />
                            <button type="button" @click="showPassword = !showPassword" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-neutral-600" aria-label="Show password">
                                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5"> 
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5"> 
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>  
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
            
                    <div class="">
                        <x-primary-button class="mt-5">
                            {{ __('Buat Akun') }}
                        </x-primary-button>
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
