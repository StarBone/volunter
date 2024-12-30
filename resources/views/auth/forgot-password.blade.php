<x-guest-layout>
    <div class="absolute left-1/3 top-52 max-w-md mx-auto p-6 bg-white border border-neutral-200 shadow-md rounded-lg">
        <x-application-logo class="block mb-4 h-9 w-auto fill-current"/>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan tautan reset kata sandi yang memungkinkan Anda memilih yang baru.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
