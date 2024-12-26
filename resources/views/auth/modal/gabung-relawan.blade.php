<!-- Main modal -->
<div id="relawanModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Gabung Relawan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="relawanModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" id="relawanForm">  
                <div class="grid gap-4 mb-4 grid-cols-2">  
                    <div class="col-span-2">  
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>  
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Lengkap" required="">  
                    </div>  
                    {{-- <div class="col-span-2">  
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>  
                        <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="+62xxxxxxxxx" required="">  
                    </div>  
                    <div class="col-span-2">  
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>  
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="johndoe@gmail.com" required="">  
                    </div>  
                    <div class="col-span-2">  
                        <label for="kategori_pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>  
                        <select id="kategori_pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">  
                            <option selected="">Pilih Pekerjaan</option>  
                            <option value="TV">TV/Monitors</option>  
                            <option value="PC">PC</option>  
                            <option value="GA">Gaming/Console</option>  
                            <option value="PH">Phones</option>  
                        </select>  
                    </div>  
                    <div class="col-span-2">  
                        <label for="reason_join" class="block mb-2 text-sm font-medium text-gray-900">Mengapa Anda ingin bergabung untuk aktivitas ini?</label>  
                        <textarea id="reason_join" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Isi detail alasan"></textarea>                    
                    </div>   --}}
                </div>  
                <div class="flex justify-end">  
                    <button type="submit" data-modal-toggle="success-modal" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">  
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>  
                        Kirim Pendafataran  
                    </button>
                    <button type="button" data-modal-toggle="success-modal" data-modal-target="success-modal" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">  
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>  
                        tes  
                    </button>
                </div>  
            </form>
        </div>
    </div>
</div>

{{-- <script>
    document.getElementById('relawanForm').addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('relawanModal').setAttribute('data-modal-toggle','relawanModal');
    });
</script> --}}