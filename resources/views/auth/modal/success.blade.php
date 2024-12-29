<div id="successRelawan" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
    <div class="relative bg-white rounded-lg shadow-lg p-6 w-full max-w-sm">
        <!-- Close Button -->
        <button type="button" data-modal-target="formRelawan" data-modal-toggle="formRelawan" data-modal-hide="successRelawan" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
                <span class="sr-only">Close modal</span>
        </button>
        <!-- Modal Content -->
        <div class="flex flex-col items-center text-center">
            <!-- Success Icon -->
            <div class="mb-4 bg-green-50 rounded-full p-4">
                <div class="bg-green-100 rounded-full p-4">
                    <svg class="w-8 h-8 text-green-600" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" id="fi_6276686"><g id="Checkmark"><path d="m32 8a24 24 0 1 0 24 24 24.03187 24.03187 0 0 0 -24-24zm13.41 17.41-15 15a1.97983 1.97983 0 0 1 -2.82 0l-7-7a1.994 1.994 0 0 1 2.82-2.82l5.59 5.58 13.59-13.58a1.994 1.994 0 0 1 2.82 2.82z" fill="#23A666"></path><path d="m45.41 25.41-15 15a1.97983 1.97983 0 0 1 -2.82 0l-7-7a1.994 1.994 0 0 1 2.82-2.82l5.59 5.58 13.59-13.58a1.994 1.994 0 0 1 2.82 2.82z" fill="#fff"></path></g></svg>
                </div>
            </div>
            <!-- Title -->
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Kamu sudah berhasil mengirim pendaftaran relawan</h3>
            <!-- Description -->
            <p class="text-sm text-gray-500 mb-4">Tunggu informasi selanjutnya dari pihak organisasi. Pastikan kamu terus memantau informasinya.</p>
            <!-- Action Button -->
            <a href="/status/my-activity" class="text-blue-600 font-medium border border-blue-600 hover:bg-blue-50 rounded-full px-4 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                Lihat Status
            </a>
        </div>
    </div>
</div>

{{-- MODAL SERTIFICATE --}}
<div id="successSertificate" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
    <div class="relative bg-white rounded-lg shadow-lg p-6 w-full max-w-sm">
        <!-- Close Button -->
        <button type="button" data-modal-target="relawanModal" data-modal-toggle="relawanModal" data-modal-hide="successSertificate"  class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
                <span class="sr-only">Close modal</span>
        </button>
        <!-- Modal Content -->
        <div class="flex flex-col items-center text-center">
            <!-- Success Icon -->
            <div class="mb-4 bg-green-50 rounded-full p-4">
                <div class="bg-green-100 rounded-full p-4">
                    <svg class="w-8 h-8 text-green-600" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" id="fi_6276686"><g id="Checkmark"><path d="m32 8a24 24 0 1 0 24 24 24.03187 24.03187 0 0 0 -24-24zm13.41 17.41-15 15a1.97983 1.97983 0 0 1 -2.82 0l-7-7a1.994 1.994 0 0 1 2.82-2.82l5.59 5.58 13.59-13.58a1.994 1.994 0 0 1 2.82 2.82z" fill="#23A666"></path><path d="m45.41 25.41-15 15a1.97983 1.97983 0 0 1 -2.82 0l-7-7a1.994 1.994 0 0 1 2.82-2.82l5.59 5.58 13.59-13.58a1.994 1.994 0 0 1 2.82 2.82z" fill="#fff"></path></g></svg>
                </div>
            </div>
            <!-- Title -->
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Kamu Berhasil Klaim Sertfikat</h3>
            <!-- Action Button -->
            <button type="button" onclick="showSuccessNotification()" data-modal-toggle="successSertificate" class="mt-3 px-4 py-3 flex gap-1 text-white bg-sky-700 text-xs rounded-full">
                <svg class="w-4 fill-white" id="fi_3502477"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m21 19h-18a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2z"></path><path d="m12 2a1 1 0 0 0 -1 1v10.59l-3.29-3.3a1 1 0 0 0 -1.42 1.42l5 5a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 -1.42-1.42l-3.29 3.3v-10.59a1 1 0 0 0 -1-1z"><
                <span>            
                    Unduh Sertifikat Ceunah
                </span>
            </button>
        </div>
    </div>
</div>

{{-- MODAL NOTIFICATION --}}
<div id="successNotification" 
    class="flex items-center gap-2 pl-3 pr-20 fixed top-[5%] left-[13%] transform -translate-x-1/2 -translate-y-1/2 bg-green-500 px-2 py-2 rounded-lg shadow-lg transition-all duration-300 hidden z-50">
    <svg class="w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.576 408.576">
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"/>
    </svg>      
    <span class="text-white text-sm">Berhasil unduh sertifikat</span>
</div>

<script>
    function showSuccessNotification() {
        const notification = document.getElementById('successNotification');
        notification.classList.remove('hidden');
        notification.classList.add('block');

        setTimeout(() => {
            notification.classList.remove('block');
            notification.classList.add('hidden');
        }, 3000);
    }

    // Call this function when the certificate is successfully downloaded
    // showSuccessNotification();
</script>

