<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.4/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
    <x-navigation></x-navigation>
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
      </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <div class="flex flex-col justify-center items-center h-64">
              <h1 class="text-2xl font-semibold text-gray-900">Ayo Selamatkan Dunia</h1>
              <p class="mt-2 text-sm/relaxed text-gray-900">Ubah niat jahat anda menjadi niat baik</p>
              <button class="mt-4 rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500x">Cari Aktivitas</button>
          </div>
        </div>
      </main>
  </div>  
</body>
</html>