<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Login - ' . config('app.name'))
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex flex-row justify-around items-center">
            <div class="relative h-screen md:w-1/2" id="card-1">
                <div class="mt-11 m-6 lg:mr-20 lg:ml-20 xl:mr-36">
                    <x-application-logo class="block h-9 w-auto fill-current"/>
                    <h1 class="mt-5 text-2xl">Buat Akun Anda Untuk Membuat Langkah Berdampak</h1>
                    <div class="flex mt-4 py-2 px-4 w-full bg-blue-200 border border-blue-400 rounded-xl">
                        <i class="fa-solid fa-circle-info pt-0.5 flex-none text-sky-700"></i>
                        <span class="text-sm pl-2 flex-1">Ingin mendaftarkan organisasi kamu?</span>
                        <a href="{{ route('register/organization') }}" class="text-sm text-sky-700 underline font-semibold">Daftar Sekarang</a>
                    </div>
            
                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="loginname" :value="__('Email / Nama / No Telepon')" />
                        <x-text-input id="loginname" class="block w-full" type="text" name="loginname" :value="old('loginname')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex flex-col space-y-2 mt-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <div class="relative">
                            <x-text-input id="password" class="w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            
                            <button type="button" id="togglePassword" class="absolute p-1 right-2 rounded-lg">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <div class="">
                        <x-primary-button class="mt-5">
                            {{ __('Log In') }}
                        </x-primary-button>
                    </div>

                    <div class="mt-5">
                        <span class="text-sm">Sudah punya akun?</span>
                        <a href="{{ route('register') }}" class="text-sm underline font-bold">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="relative h-screen px-6 py-4 hidden lg:block" id="card-2">
                <div class="w-[450px]">
                    <img src="{{ asset('images/Image.png') }}" class="object-cover" alt="">
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
            this.innerHTML = type === "password" ? '<i class="fa-regular fa-eye"></i>' : '<i class="fa-regular fa-eye-slash translate-x-[1px]"></i>';
        });
    });
    </script>    
</x-guest-layout>
