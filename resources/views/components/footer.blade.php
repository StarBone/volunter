<footer class="relative mt-20 mx-20"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <div class="flex justify-between">
        <div id="col-1" class="w-1/2 flex flex-col">
            <img class="w-40" src="{{ asset('images/Logo.png') }}" alt="">
            <p class="mt-5 w-60 text-[13px] text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rem obcaecati, suscipit libero,</p>
            <h1 class="mt-7 text-sky-600">HUBUNGI KAMI</h1>
            <p class="mt-5 w-60 text-[13px] text-gray-500">Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10450</p>
            <div class="mt-3 flex">
                <img src="{{ asset('images/icon/directions.svg') }}" alt="">
                <span class="pl-1 text-[13px] text-red-500">Google Maps</span>
            </div>
            <div class="mt-5 flex">
                <img src="{{ asset('images/icon/phone.svg') }}" alt="">
                <span class="pt-0.5 pl-1 text-[13px] text-gray-500">081214243245</span>
            </div>
            <div class="mt-3 flex">
                <img src="{{ asset('images/icon/email.svg') }}" alt="">
                <span class="pt-0.5 pl-1 text-[13px] text-gray-500">info@reaktif.or.id</span>
            </div>
        </div>
        
        <div id="col-2" class="w-1/5 flex flex-col justify-center">
            <h1 class="font-semibold">Subscribe</h1>
            <div class="mt-3 relative">
                <input type="text" placeholder="Email Address" class="pr-12 w-full rounded-xl">
                <button class="absolute right-0 p-[13px] rounded-xl bg-sky-600 text-white"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <p class="mt-14 text-[13px] text-gray-500">Hello, we are ABC. trying to make an effort to put the right people for you to get the best results. Just insight</p>
        </div>
    </div>
    <div class="pt-32 pb-14 flex justify-between items-center text-sm text-gray-500">
        <span>Copyright © Relawan Aktif 2024</span>
        <div class="flex gap-3">
            <a href="#">Privacy Policy</a>
            <a href="#">Term of Use</a>
        </div>
        <div class="flex gap-1">
            <span class="p-2">Ikuti Kami</span>
            <img class="bg-white p-2 rounded-full" src="{{ asset('images/icon/fb.svg') }}" alt="">
            <img class="bg-white p-2 rounded-full" src="{{ asset('images/icon/instagram.svg') }}" alt="">
            <img class="bg-white p-2 rounded-full" src="{{ asset('images/icon/yt.svg') }}" alt="">
            <img class="bg-white p-2 rounded-full" src="{{ asset('images/icon/x.svg') }}" alt="">
            <img class="bg-white p-2 rounded-full" src="{{ asset('images/icon/in.svg') }}" alt="">
        </div>
    </div>
    <img class="absolute bottom-0 -right-20 z-0" src="{{ asset('images/shape/s-f1.png') }}" alt="">
    <img class="absolute bottom-0 -right-20 z-1" src="{{ asset('images/shape/s-f2.png') }}" alt="">
</footer>