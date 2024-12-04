<x-app-layout>
    @section('title', 'Cari Organisasi - ' . config('app.name'))
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organisasi') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-100 p-4">
        <div class="container mx-auto flex space-x-4">
            <!-- Sidebar -->
            <div class="w-1/4 bg-white p-4 rounded-lg shadow-md">
                <div class="mb-4">
                    <input 
                        type="text" 
                        placeholder="Pencarian..." 
                        class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    />
                    <button class="mt-2 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                        Cari
                    </button>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lokasi Organisasi</label>
                    <select class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                        <option>Pilih Provinsi</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Fokus Organisasi</label>
                    <select class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                        <option>Pilih Fokus</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type Organisasi</label>
                    <select class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                        <option>Pilih Type</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Urutkan Berdasarkan</label>
                    <select class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                        <option>Organisasi Terbaru</option>
                    </select>
                </div>
                <button class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">
                    Reset All
                </button>
            </div>
    
            <!-- Daftar Organisasi -->
            <div class="w-3/4 space-y-6"> <!-- Tambahkan space-y-6 untuk jarak antar card -->
                <!-- Card Organisasi -->
                <div class="bg-white rounded-lg shadow-md p-4 flex items-start space-x-4">
                    <img 
                        src="https://via.placeholder.com/80" 
                        alt="Logo" 
                        class="w-20 h-20 object-cover rounded-md"
                    />
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-800">Pc, Gp. Ansor Boalemo</h3>
                        <p class="text-sm text-gray-600">Kabupaten Boalemo, Gorontalo</p>
                        <div class="flex space-x-2 mt-2">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-md">Kepemimpinan & Organisasi</span>
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-md">Ketenagakerjaan</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 space-x-4 mt-2">
                            <span>0 Aktivitas</span>
                            <span>0 Relawan</span>
                            <span>0 Pendukung</span>
                            <span>0 Jam</span>
                        </div>
                    </div>
                </div>
    
                <!-- Card Organisasi Lain -->
                <div class="bg-white rounded-lg shadow-md p-4 flex items-start space-x-4">
                    <img 
                        src="https://via.placeholder.com/80" 
                        alt="Logo" 
                        class="w-20 h-20 object-cover rounded-md"
                    />
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-800">Podcast Somestory</h3>
                        <p class="text-sm text-gray-600">Kota Tangerang Selatan, Banten</p>
                        <div class="flex space-x-2 mt-2">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-md">Pengembangan Anak Muda</span>
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-md">Kepemimpinan & Organisasi</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 space-x-4 mt-2">
                            <span>1 Aktivitas</span>
                            <span>0 Relawan</span>
                            <span>6 Pendukung</span>
                            <span>0 Jam</span>
                        </div>
                    </div>
                </div>
    
                <!-- Tambahkan kartu lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>    
</x-app-layout>