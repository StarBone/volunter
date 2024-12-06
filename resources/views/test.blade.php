<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <div class="p-6">
        <h1 class="font-bold">Logo</h1>
    </div>
    
    <div class="p-5">
        <h1 class="text-2xl">Buat Akun Anda Untuk Membuat Langkah Berdampak</h1>
        <div class="flex mt-2 py-2 px-4 w-10/12 bg-gray-200 rounded-md">
            <i class="fa-solid fa-circle-info pt-0.5 flex-none"></i>
            <span class="text-sm font-semibold pl-2 flex-1">Sudah punya akun?</span>
            <a href="{{ route('login') }}" class="text-sm underline font-bold">Masuk Sekarang</a>
        </div>

        <div class="flex flex-col space-y-2 mt-3">
            <x-input-label for="name" :value="__('Nama Lengkap')" />
            <x-text-input id="name" class="block w-10/12" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="flex flex-col space-y-2 mt-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-10/12" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col space-y-2 mt-3">
            <x-input-label for="phone" :value="__('No Telepon')" />
            <x-text-input id="phone" class="block w-10/12" type="number" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="flex flex-col space-y-2 mt-3 relative">
            <x-input-label for="password" :value="__('Password')" />
            <div class="flex">
                <x-text-input-pass id="password" class="w-7/12 md:w-8/12 lg:w-9/12"
                type="password"
                name="password"
                required autocomplete="new-password" />

                <button type="button" id="togglePassword" class="px-3.5 bg-transparent text-gray-600 border border-gray-300 rounded-r-md focus:outline-none">
                    <i class="fa-regular fa-eye"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="">
            <x-primary-button class="mt-5">
                {{ __('Buat Akun') }}
            </x-primary-button>
        </div>
    </div>

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