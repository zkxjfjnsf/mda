<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT MDA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 text-gray-800">

    <!--header-->
    <header class="fixed w-full top-0 z-50 bg-indigo-600 backdrop-blur-md border-b border-indigo-500 shadow-sm">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <div class="flex items-center space-x-3">
                <img src="/images/logo.png" alt="Logo MDA" class="w-10 h-10">
                <span class="text-xl font-bold text-white">PT MDA</span>
            </div>
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#tentang" class="text-white hover:text-yellow-200 transition">Tentang</a>
                <a href="#layanan" class="text-white hover:text-yellow-200 transition">Layanan</a>
                <a href="#kontak" class="text-white hover:text-yellow-200 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- body-->
    <section class="relative min-h-[100vh] flex items-center justify-center bg-gradient-to-br from-indigo-50 to-white">
        <div class="text-center px-6">
            <img src="/images/logo.png" alt="Logo MDA" class="mx-auto w-28 h-auto mb-6 drop-shadow-md">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-800 leading-tight">
                Solusi <span class="text-indigo-600">Teknologi Digital</span>
                untuk Masa Depan Bisnis Anda
            </h1>
            <p class="mt-6 text-gray-600 max-w-2xl mx-auto text-lg">
                PT Mitra Data Abadi (MDA) adalah mitra terpercaya dalam transformasi digital, pengembangan sistem,
                dan infrastruktur IT modern.
            </p>
        </div>
    </section>

    <!-- tentang  -->
    <section id="tentang" class="py-24 bg-white">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Tentang <span class="text-indigo-600">PT MDA</span></h2>
                <p class="text-gray-700 mb-4">
                    PT Mitra Data Abadi (MDA) adalah perusahaan teknologi informasi yang menyediakan solusi digital
                    end-to-end untuk bisnis, mulai dari pengembangan aplikasi, infrastruktur IT, hingga konsultasi
                    transformasi digital.
                </p>
                <p class="text-gray-700 mb-6">
                    Dengan banyaknya pengalaman dalam bidang ini, kami membantu berbagai sektor industri untuk beradaptasi di
                    era digital dengan layanan profesional, inovatif, dan berorientasi pada kebutuhan klien.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-indigo-50 p-6 rounded-xl text-center shadow-md">
                        <h4 class="text-xl font-bold text-indigo-600">PERCAYA KAMI</h4>
                        <p class="text-gray-500 text-sm">Percaya MDA</p>
                    </div>
                    <div class="bg-indigo-50 p-6 rounded-xl text-center shadow-md">
                        <h4 class="text-xl font-bold text-indigo-600">Anda Puas</h4>
                        <p class="text-gray-500 text-sm">Kami Senang</p>
                    </div>
                </div>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.20346742414827!2d110.8137965!3d-7.5470948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16bb2b8ad773%3A0xfc0a4c466b37dfdb!2sPT.%20Mitra%20Data%20Abadi%20(MDA)%20SOLO!5e0!3m2!1sen!2sid!4v1606277821228!5m2!1sen!2sid"
                    class="w-full h-[400px] rounded-xl shadow-lg border-0" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- pelayanan -->
    <section id="layanan" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Layanan Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md hover:-translate-y-2 transition transform border border-gray-100">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-4">Konsultasi IT</h3>
                    <p class="text-gray-600">Strategi digital untuk meningkatkan daya saing bisnis Anda.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:-translate-y-2 transition transform border border-gray-100">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-4">Pengembangan Sistem</h3>
                    <p class="text-gray-600">Web & mobile app yang scalable dan sesuai kebutuhan klien.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:-translate-y-2 transition transform border border-gray-100">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-4">Infrastruktur IT</h3>
                    <p class="text-gray-600">Solusi server, cloud, dan jaringan yang aman & andal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- hubungi -->
    <section id="kontak" class="py-24 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Hubungi Kami</h2>
            <p class="text-gray-600 mb-8">Butuh solusi IT untuk bisnis Anda? Tim kami siap membantu.</p>
            <a href="mailto:info@mda.co.id"
                class="inline-block bg-gradient-to-r from-indigo-500 to-purple-500 px-8 py-3 rounded-xl text-white font-semibold shadow-lg hover:opacity-90 transition">
                Kirim Email
            </a>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-indigo-600 text-white py-6">
        <div class="container mx-auto text-center text-sm">
            ©2025 PT Mitra Data Abadi. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
