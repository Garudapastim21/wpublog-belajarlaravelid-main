<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Nur Hasan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Jika belum menggunakan Vite/npm, gunakan CDN sementara untuk testing: --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body class="bg-[#121212] text-white font-sans min-h-screen flex flex-col items-center pb-12 antialiased">


    <main class="flex flex-col items-center mt-12 w-full max-w-xl px-4 text-center">

        <p class="text-gray-300 text-sm tracking-wide mb-2">
            Binyunus
        </p>

        <h1 class="text-4xl font-bold flex items-center justify-center gap-2 tracking-tight">
            Nur Hasan
            <svg class="w-6 h-6 text-blue-500 mt-1" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
        </h1>

        <div class="relative mt-8 mb-6">
            <img src="{{ asset('images/foto.jpg') }}" alt="Profile Picture"
                class="w-48 h-48 object-cover rounded-full border-4 border-[#0e4b50] shadow-2xl">
        </div>

        <div class="flex items-center space-x-6 mb-8 text-white">
            <a href="#" class="hover:text-gray-400 transition">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                </svg>
            </a>
            <a href="#" class="hover:text-gray-400 transition">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 2.78-1.15 5.54-3.33 7.31-1.9 1.54-4.51 2.1-6.84 1.63-2.66-.54-4.86-2.5-5.63-5.1-.81-2.73-.25-5.87 1.67-8.03 1.93-2.18 4.88-3.1 7.74-2.6v4.06c-1.5-.2-3.12.08-4.28 1.15-1.23 1.14-1.74 2.92-1.34 4.58.4 1.66 1.74 2.98 3.39 3.34 1.63.36 3.44-.04 4.67-1.14 1.13-1.01 1.69-2.52 1.67-4.06.03-5.33.02-10.66.02-15.99z" />
                </svg>
            </a>
            <a href="#" class="hover:text-gray-400 transition">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.015 3.015 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.376.55 9.376.55s7.505 0 9.377-.55a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                </svg>
            </a>
        </div>

        <p class="text-gray-100 text-[15px] leading-relaxed max-w-sm mb-10">
            Hi, Saya berdomisili di Pasuruan 🇮🇩 tepatnya di Desa kencandi kec. gondangwetan kab. pasuruan
            <strong class="font-extrabold text-white">sejak tahun 2024</strong> saya membuka binnis binyunus toseba
        </p>

        <a href="#"
            class="bg-[#56c1d0] hover:bg-[#45a4b2] text-white font-bold py-4 px-10 rounded-lg text-lg transition duration-300 ease-in-out shadow-lg flex items-center justify-center gap-2">
            Let's Binyunus Toserba again again
        </a>

    </main>

</body>

</html>
