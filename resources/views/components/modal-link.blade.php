<x-modal name="signupModal" show="false">
    <div class="p-6">
        <h2 class="text-2xl font-semibold text-center mb-4">Pilih Jenis Akun</h2>
        <div class="flex justify-center space-x-4">
            <button
                type="button"
                class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
                x-on:click="window.location.href = '{{ route('register') }}'"
            >
                Daftar sebagai Relawan
            </button>
            <button
                type="button"
                class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600"
                x-on:click="window.location.href = '{{ route('register') }}'"
            >
                Daftar sebagai Organisasi
            </button>
        </div>
    </div>
</x-modal>