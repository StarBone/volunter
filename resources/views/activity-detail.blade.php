<x-app-layout>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <section class="flex items-start mx-20">  <!-- Hapus h-screen -->  
        <div class="w-4/6 flex-grow">  
            <div class="ml-4 flex space-x-2">  
                <img src="{{ asset('images/icon/home.svg') }}" alt="">  
                <span>/</span>  
                <a class="text-blue-800 underline" href="/activity/search">Aktivitas</a>  
                <span>/</span>   
                <span class="text-gray-400">Apa yang kami lakukan</span>  
            </div>  
            <div class="mt-4">  
                <div class="h-96 p-3 bg-white border border-gray-200 rounded-lg shadow">  
                    <img class="h-full w-full object-cover" src="{{ asset('images/card/card-1-full.png') }}" alt="">  
                </div>  

                <div class="mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">  
                    <h1 class="text-3xl font-semibold">Deskripsi</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam fuga magni perferendis amet quaerat nisi quae est ab nulla placeat, excepturi ipsum laborum vero dolor provident! Commodi, minus numquam tenetur ad unde enim rem quae, nobis ea harum tempore vitae beatae molestiae quisquam. Officiis modi pariatur magni sapiente porro voluptatum numquam nisi omnis vitae qui, perferendis earum cupiditate reprehenderit? Tenetur mollitia illum, quae molestiae qui optio temporibus? Laudantium consequuntur, ad nihil dolores deleniti at delectus dolorum fuga minima natus? Totam rem iure veritatis nisi inventore. Necessitatibus beatae hic dolor adipisci veniam? Commodi laboriosam deserunt omnis, earum non iste rem accusantium.</p>  
                </div>  

                <div class="mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">  
                    <h1 class="text-3xl font-semibold">Detail Aktivitas</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dignissimos, amet magnam officia iusto, itaque in qui, ut distinctio corporis explicabo perspiciatis ea voluptatem nam labore totam omnis non adipisci?</p>  
                </div>  

                <div class="mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">  
                    <h1 class="text-3xl font-semibold">Pekerjaan Yang Dibuka</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dignissimos, amet magnam officia iusto, itaque in qui, ut distinctio corporis explicabo perspiciatis ea voluptatem nam labore totam omnis non adipisci?</p>  
                </div>  

                <div class="mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">  
                    <h1 class="text-3xl font-semibold">Kategori</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dignissimos, amet magnam officia iusto, itaque in qui, ut distinctio corporis explicabo perspiciatis ea voluptatem nam labore totam omnis non adipisci?</p>  
                </div>  

                <div class="mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">  
                    <h1 class="text-3xl font-semibold">Peserta ()</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dignissimos, amet magnam officia iusto, itaque in qui, ut distinctio corporis explicabo perspiciatis ea voluptatem nam labore totam omnis non adipisci?</p>  
                </div>  

                <div class="mt-6 p-6 bg-white border border-gray-200 rounded-lg shadow">  
                    <h1 class="text-3xl font-semibold">Dokumentasi</h1>  
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dignissimos, amet magnam officia iusto, itaque in qui, ut distinctio corporis explicabo perspiciatis ea voluptatem nam labore totam omnis non adipisci?</p>  
                </div>  
            </div>  
        </div>  
        
        <!-- Card Kanan -->  
        <aside class="mt-10 w-2/6 ml-4 sticky top-5">  
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">  
                <h2 class="text-2xl font-semibold">Informasi Tambahan</h2>  
                <p class="mt-4">Ini adalah informasi tambahan yang mungkin berguna untuk aktivitas Anda. Silakan lihat rincian lebih lanjut atau hubungi kami jika ada pertanyaan.</p>  
            </div>  
        </aside>  
    </section> 
</x-app-layout>