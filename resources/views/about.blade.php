<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <div class="flex flex-col justify-center items-center h-64">
              <h1 class="text-2xl font-semibold text-gray-900">Tentang Kami</h1>
              <p class="mt-2 text-sm/relaxed text-gray-900">Hasan Nasuha</p>
          </div>
        </div>
    </main>
</x-app-layout>