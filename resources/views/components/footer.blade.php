<footer class="mt-20 mx-20 h-[40rem]"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <div class="grid grid-cols-2">
        <div id="col-1" class="w-1/2 flex flex-col">
            <img class="w-40" src="{{ asset('images/Logo.png') }}" alt="">
            <p class="mt-5 w-44 text-[13px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem obcaecati, suscipit libero,</p>
            <h1 class="mt-7 text-sky-600">HUBUNGI KAMI</h1>
            <p class="mt-5 w-44 text-[13px]">Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10450</p>
            <div class="mt-3 flex">
                <img src="{{ asset('images/icon/directions.svg') }}" alt="">
                <span class="pl-1 text-[13px] text-red-500">Google Maps</span>
            </div>
            <div class="mt-5 flex">
                <img src="{{ asset('images/icon/phone.svg') }}" alt="">
                <span class="pl-1 text-[13px]">081214243245</span>
            </div>
            <div class="mt-3 flex">
                <img src="{{ asset('images/icon/email.svg') }}" alt="">
                <span class="pl-1 text-[13px]">info@reaktif.or.id</span>
            </div>
            <span class="mt-36 text-[13px] text-neutral-400">Copyright © Relawan Aktif</span>
        </div>

        <div id="col-2" class="w-1/2 flex flex-col justify-center">
            <h1 class="font-semibold">Subscribe</h1>
            <div class="mt-3 flex">
                <input type="text" placeholder="Email Address" class="w-44 h-10 rounded-l -lg">
                <button class="px-3 h-10 rounded-r-lg bg-sky-600 text-white"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <p class="mt-14 text-[13px]">Hello, we are ABC. trying to make an effort to put the right people for you to get the best results. Just insight</p>
        </div>
    </div>
</footer>