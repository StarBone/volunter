<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Login - ' . config('app.name'))
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="h-screen w-3/4" id="card-1">
                <div class="md:px-8 mt-16 md:mx-24">
                    <x-application-logo class="block h-9 w-auto fill-current"/>
                    <h1 class="text-2xl w-96 mt-3">Selamat Datang Kembali</h1>
                    <div class="flex mt-5 py-2 px-4 w-10/12 bg-blue-200 border border-blue-400 rounded-md">
                        <i class="fa-solid fa-circle-info pt-0.5 flex-none"></i>
                        <span class="text-sm font-semibold pl-2 flex-1">Ingin mendaftarkan orgnisasi kamu?</span>
                        <a href="{{ route('register/organization') }}" class="text-sm underline font-bold">Daftar Sekarang</a>
                    </div>
            
                    <div class="flex flex-col space-y-5 mt-5">
                        <x-input-label for="loginname" :value="__('Email / Nama / No Telepon')" />
                        <x-text-input id="loginname" class="block w-10/12" type="text" name="loginname" :value="old('loginname')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex flex-col space-y-2 mt-3 relative">
                        <x-input-label for="password" :value="__('Password')" />
                        <div class="flex">
                            <x-text-input-pass id="password" class="w-9/12 md:w-8/12 lg:w-9/12"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            
                            <button type="button" id="togglePassword" class="px-3.5 bg-transparent text-gray-600 border border-gray-300 rounded-r-md focus:outline-none">
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
            <div class="h-screen w-2/4 px-6 py-4" id="card-2">
                <div class="size-auto">
                    <img src="{{ asset('images/Image.png') }}" class="w-full h-full object-cover" alt="">
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        // Toggle untuk password
        const togglePassword = document.querySelector("#togglePassword");
        const passwordField = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;
            // Gunakan innerHTML untuk mengganti ikon
            this.innerHTML = type === "password" ? '<i class="fa-regular fa-eye"></i>' : '<i class="fa-regular fa-eye-slash"></i>';
        });

        // Toggle untuk confirm password
        const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
        const confirmPasswordField = document.querySelector("#password_confirmation");

        toggleConfirmPassword.addEventListener("click", function () {
            const type = confirmPasswordField.type === "password" ? "text" : "password";
            confirmPasswordField.type = type;
            // Gunakan innerHTML untuk mengganti ikon
            this.innerHTML = type === "password" ? '<i class="fa-regular fa-eye"></i>' : '<i class="fa-regular fa-eye-slash"></i>';
            });
        });
    </script>    
</x-guest-layout>
