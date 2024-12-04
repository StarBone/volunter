<x-app-layout>
    @section('title', 'Cari Aktivitas - ' . config('app.name'))
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aktivitas') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center space-x-2">
                        <input 
                            type="text" 
                            class="flex-1 p-1 border border-gray-300 rounded-l-md focus:outline-none focus:ring focus:ring-blue-300" 
                            placeholder="Judul Aktivitas"
                        />
                        <button 
                            type="submit" 
                            class="bg-blue-500 text-white px-4 py-1.5 rounded-r-md hover:bg-blue-600 focus:ring focus:ring-blue-300 flex items-center justify-center"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m2.8-6.65a8 8 0 11-16 0 8 8 0 0116 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6 bg-gray-100">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="card-1 max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-40 object-cover rounded-b-lg" src="https://via.placeholder.com/300" alt="Card Image">
                    <div class="p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Project</span>
                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Pendidikan</span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-800">Relawan Operasional - Online & Offline</h3>
                        <p class="text-sm text-gray-600 mt-1">Gerakan Suka Baca</p>
                        <div class="mt-4 text-sm text-gray-500 space-y-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-6 18h4m-7-5h10m-3-5a2 2 0 11-4 0M3 8a9 9 0 0118 0" />
                                </svg>
                                <span>12 Jan 2025 - 30 Jun 2025</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276a1 1 0 01.894.007l2.553 1.276M12 20h9.883A2 2 0 0024 18.118v-9.236A2 2 0 0022.118 7H1.882A2 2 0 000 8.882v9.236A2 2 0 001.882 20H8" />
                                </svg>
                                <span>Webinar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-2 max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-40 object-cover rounded-b-lg" src="https://via.placeholder.com/300" alt="Card Image">
                    <div class="p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Project</span>
                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Pendidikan</span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-800">Relawan Operasional - Online & Offline</h3>
                        <p class="text-sm text-gray-600 mt-1">Gerakan Suka Baca</p>
                        <div class="mt-4 text-sm text-gray-500 space-y-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-6 18h4m-7-5h10m-3-5a2 2 0 11-4 0M3 8a9 9 0 0118 0" />
                                </svg>
                                <span>12 Jan 2025 - 30 Jun 2025</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276a1 1 0 01.894.007l2.553 1.276M12 20h9.883A2 2 0 0024 18.118v-9.236A2 2 0 0022.118 7H1.882A2 2 0 000 8.882v9.236A2 2 0 001.882 20H8" />
                                </svg>
                                <span>Webinar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-3 max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-40 object-cover rounded-b-lg" src="https://via.placeholder.com/300" alt="Card Image">
                    <div class="p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Project</span>
                            <span class="bg-green-100 text-green-600 text-xs font-medium px-2.5 py-0.5 rounded-full">Pendidikan</span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-800">Relawan Operasional - Online & Offline</h3>
                        <p class="text-sm text-gray-600 mt-1">Gerakan Suka Baca</p>
                        <div class="mt-4 text-sm text-gray-500 space-y-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-6 18h4m-7-5h10m-3-5a2 2 0 11-4 0M3 8a9 9 0 0118 0" />
                                </svg>
                                <span>12 Jan 2025 - 30 Jun 2025</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276a1 1 0 01.894.007l2.553 1.276M12 20h9.883A2 2 0 0024 18.118v-9.236A2 2 0 0022.118 7H1.882A2 2 0 000 8.882v9.236A2 2 0 001.882 20H8" />
                                </svg>
                                <span>Webinar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
