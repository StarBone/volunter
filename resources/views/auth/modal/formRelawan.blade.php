<!-- Main modal -->
<div id="formRelawan" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Gabung Relawan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="formRelawan">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="px-4 md:px-5 flex flex-col gap-4" id="relawanForm">
                <!-- Input Fields -->
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                        <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="+62xxxxxxxxx" required="">
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="johndoe@gmail.com" required="">
                    </div>
                    <div class="flex flex-col">
                        <label for="kategori_pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <select id="kategori_pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option selected="">Pilih Pekerjaan</option>
                            <option value="PC">Pedagang</option>
                            <option value="GA">Pegawai Negri</option>
                            <option value="PH">Pegawai Swasta</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="reason" class="block mb-2 text-sm font-medium text-gray-900">Mengapa Anda ingin bergabung untuk aktivitas ini?</label>
                        <textarea id="reason" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Isi detail alasan"></textarea>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="flex justify-end mb-4 mt-2">
                    <button type="button" id="submitRelawan" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Kirim Pendaftaran
                    </button>
                    <button type="button" data-modal-toggle="successRelawan" data-modal-hide="formRelawan" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        tes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
document.getElementById('submitRelawan').addEventListener('click', function (event) {
    event.preventDefault();

    const nameInput = document.getElementById('name').value.trim();
    const phoneInput = document.getElementById('phone').value.trim();
    const emailInput = document.getElementById('email').value.trim();
    const kategoriInput = document.getElementById('kategori_pekerjaan').value;
    const reasonInput = document.getElementById('reason').value.trim();

    if (nameInput === '' || phoneInput === '' || emailInput === '' || kategoriInput === 'Pilih Pekerjaan' || reasonInput === '') {
        alert('Mohon isi semuanya!');
        return;
    }

    const successModal = document.getElementById('successRelawan');
    successModal.classList.remove('hidden');
    successModal.classList.add('flex');
    const formRelawan = document.getElementById('formRelawan');
    formRelawan.classList.add('hidden');
    document.getElementById('formRelawan').reset();
});
</script>
