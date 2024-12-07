<x-app-layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    @section('title', 'Home - ' . config('app.name'))

    <main class="max-w-[1920px] mx-auto bg-gray-100 font-jakarta overflow-hidden">
        <section id="hero" class="h-[640px] xl:h-[840px] bg-center lg:bg-cover bg-no-repeat" style="background-image: url({{ asset('images/Background-Landing-Page.png') }})">
            <div class="pt-28 mx-16 text-white w-5/12">
                <h1 class="text-4xl leading-normal">Ambil Aksi Perubahan untuk berdampak menjadi baik</h1>
                <p class="mt-5">Ubah niat baik menjadi aksi nyata hari ini—karena setiap langkah kecil bisa membawa perubahan besar bagi lainnya.</p>
                <button class="px-4 py-2 mt-5 rounded-full bg-blue-600 ">Mulai Ambil Langkah</button>

                <div class="mt-10 flex space-x-5">
                    <div class="p-3">
                        <h1 class="text-2xl font-bold">100+</h1>
                       <span class="text-sm">Aktivitas</span>
                    </div>
                    <div class="p-3">
                        <h1 class="text-2xl font-bold">1000+</h1>
                       <span class="text-sm">Relawan</span>
                    </div>
                    <div class="p-3">
                        <h1 class="text-2xl font-bold">500+</h1>
                       <span class="text-sm">Organisasi</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-[640px] xl:h-[840px]">
            <div class="h-5 mt-[-15px] bg-gray-100 rounded-t-xl"/>
            <div class="flex flex-col items-center p-5">
                <span>Kenali Layanan Kami</span>
                <h1 class="text-center">Lebih banyak relawan, lebih besar dampaknya. Ada beragam pilihan aktivitas yang dapat diikuti untuk membuat perubahan besar</h1>
                <div class="flex flex-row">
                    
                </div>
            </div>
        </section>
    </main>
</x-app-layout>