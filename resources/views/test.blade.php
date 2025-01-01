<x-app-layout>
    <button
        x-on:click="$dispatch('open-modal', { detail: 'my-modal' })"
        class="px-4 py-2 bg-green-600 text-white rounded"
    >
        Buka Modal
    </button>

    <x-modal name="my-modal" :show="false" maxWidth="lg">
        <div class="p-4">
            <h2 class="text-lg font-medium text-gray-900">Judul Modal</h2>
            <p class="mt-2 text-sm text-gray-600">
                Isi konten modal Anda di sini.
            </p>
            <div class="mt-4">
                <button
                    x-on:click="$dispatch('close-modal', { detail: 'my-modal' })"
                    class="px-4 py-2 bg-blue-600 text-white rounded"
                >
                    Tutup
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
