<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Register - ' . config('app.name'))
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="h-screen w-3/4" id="card-1">
                <div class="md:px-16 lg:px-32 mt-11 md:mx-24">
                    <x-application-logo class="block h-9 w-auto fill-current"/>
                    {{-- <h1 class="text-2xl w-96">Buat Akun Anda Untuk Membuat Langkah Berdampak</h1> --}}
                    <div class="flex mt-5 py-2 px-4 w-full bg-blue-200 border border-blue-400 rounded-xl">
                        <i class="fa-solid fa-circle-info pt-0.5 flex-none text-sky-700"></i>
                        <span class="text-sm pl-2 flex-1">Ingin mendaftarkan orgnisasi kamu?</span>
                        <a href="{{ route('register/organization') }}" class="text-sm text-sky-700 underline font-semibold">Daftar Sekarang</a>
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="name" :value="__('Nama Lengkap')" />
                        <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="phone" :value="__('No Telepon')" />
                        <x-text-input id="phone" class="block w-full" type="number" name="phone" :value="old('phone')" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <div class="relative">
                            <x-text-input id="password" class="block w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            
                            {{-- <button type="button" id="togglePassword" class="absolute top-0 right-0 rounded-lg bg-sky-600">
                                <i class="fa-regular fa-eye"></i>
                            </button> --}}
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
            <div class="h-screen w-2/4 px-6 py-4" id="card-2">
                <div class="size-auto">
                    <img src="{{ asset('images/Image.png') }}" class="w-full h-full object-cover" alt="">
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const togglePassword = document.querySelector("#togglePassword");
        const passwordField = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;
            this.innerHTML = type === "password" ? '<i class="fa-regular fa-eye"></i>' : '<i class="fa-regular fa-eye-slash -translate-x-px"></i>';
        });
    });
    </script>    
</x-guest-layout>
