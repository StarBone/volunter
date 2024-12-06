<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @section('title', 'Register - ' . config('app.name'))
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- No Telepon Address -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('No Telepon')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 relative">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full pr-10"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

            <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 top-5 px-3 text-gray-600 focus:outline-none">
                <i class="fa-regular fa-eye"></i>
            </button>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 relative">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10"
                        type="password"
                        name="password_confirmation"
                        required autocomplete="new-password" />

            <button type="button" id="toggleConfirmPassword" class="absolute inset-y-0 right-0 top-5 px-3 text-gray-600 focus:outline-none">
                <i class="fa-regular fa-eye"></i>
            </button>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
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
