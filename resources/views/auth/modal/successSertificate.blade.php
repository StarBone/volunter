<div id="successSertificate" 
    class="flex gap-2 pl-3 pr-20 fixed top-[14%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-green-500 px-2 py-2 rounded-lg shadow-lg transition-opacity duration-300 opacity-0 z-50">
    <svg class="w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.576 408.576">
        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z"/>
      </svg>      
    <span class="text-white">Berhasil unduh sertifikat</span>
</div>

<script>
    function showSuccessNotification() {
        const notification = document.getElementById('successSertificate');
        notification.classList.remove('opacity-0');
        notification.classList.add('opacity-100');

        setTimeout(() => {
            notification.classList.remove('opacity-100');
            notification.classList.add('opacity-0');
        }, 3000);
    }

    // Call this function when the certificate is successfully downloaded
    // showSuccessNotification();
</script>
