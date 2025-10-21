<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT MDA | Mitra Data Abadi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        * {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        /* Egyptian Blue / Azure Theme */
        .gradient-bg {
            background: linear-gradient(135deg, #003399, #007FFF);
        }

        /* NAVBAR LINKS tanpa garis bawah animasi */
        .nav-link {
            position: relative;
            transition: .3s;
        }

        .nav-link::after {
            content: none;
            /* Menghapus garis putih bawah */
        }

        .nav-link:hover {
            color: #cce0ff;
            /* Warna hover lembut */
        }

        .card-hover {
            transition: .3s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            cursor: pointer;
        }

        .portfolio-item img {
            transition: .5s;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            inset: auto 0 0;
            padding: 1.5rem;
            color: #fff;
            background: linear-gradient(to top, rgba(0, 51, 153, .9), transparent);
            transform: translateY(100%);
            transition: .3s;
        }

        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }
    </style>
</head>

<body class="text-gray-800">

    <!-- NAVBAR -->
    <nav class="fixed w-full top-0 left-0 gradient-bg shadow-lg z-50">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo dan Nama -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-md overflow-hidden">
                    <img src="/images/logo.png" alt="Logo PT MDA" class="w-8 h-8 object-contain">
                </div>
                <span class="text-lg font-bold text-white hidden sm:block">PT MDA</span>
            </div>

            <!-- Menu Navigasi -->
            <ul class="flex space-x-6 text-white font-medium">
                <li><a href="/" class="nav-link hover:text-gray-200 transition">Beranda</a></li>
                <li><a href="/about" class="nav-link hover:text-gray-200 transition">About</a></li>
                <li><a href="/layanan" class="nav-link hover:text-gray-200 transition">Layanan</a></li>
                <li><a href="/kontak" class="nav-link hover:text-gray-200 transition">Kontak</a></li>
            </ul>
        </div>
    </nav>


    <!-- HERO -->
    <section id="home" class="relative h-screen mt-16 overflow-hidden">
        <div id="carousel" class="absolute inset-0">
            <img class="slide absolute inset-0 w-full h-full object-cover opacity-100" src="images/background1.jpg"
                alt="Background 10">
            <img class="slide absolute inset-0 w-full h-full object-cover opacity-0" src="images/background2.jpg"
                alt="Background 2">
            <img class="slide absolute inset-0 w-full h-full object-cover opacity-0" src="images/background1.jpg"
                alt="Background 3">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-6">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Mitra Data Abadi</h1>
            <p class="text-xl md:text-2xl mb-8">Solusi Teknologi & Data Profesional untuk Bisnis Modern</p>
            <a href="#layanan"
                class="bg-white text-[#003399] px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition">Jelajahi
                Layanan Kami</a>
        </div>
    </section>

    <script>
        const slides = document.querySelectorAll('.slide');
        let idx = 0;
        setInterval(() => {
            slides[idx].style.opacity = 0;
            idx = (idx + 1) % slides.length;
            slides[idx].style.opacity = 1;
        }, 3000);
    </script>


    <section id="tentang" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text gradient-bg mb-8">Tentang Kami</h2>
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <img src=images/mda.jpeg class="rounded-3xl shadow-2xl">
                <div class="text-left space-y-5">
                    <p>PT Mitra Data Abadi bergerak di bidang solusi teknologi dan data profesional untuk mendukung
                        pertumbuhan bisnis.</p>
                    <p>Dengan tim berpengalaman, kami berinovasi menghadirkan produk unggulan sesuai kebutuhan digital
                        masa kini.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="layanan" class="py-24">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text gradient-bg mb-12">Layanan Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-hover p-8 rounded-3xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-bold mb-4 text-[#003399]">Data Management</h3>
                    <p>Mengelola dan menganalisis data untuk mendukung keputusan bisnis Anda.</p>
                </div>
                <div class="card-hover p-8 rounded-3xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-bold mb-4 text-[#003399]">Sistem Informasi</h3>
                    <p>Pengembangan sistem berbasis web & mobile yang efisien dan modern.</p>
                </div>
                <div class="card-hover p-8 rounded-3xl shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-bold mb-4 text-[#003399]">IT Support & Konsultasi</h3>
                    <p>Dukungan teknis dan konsultasi untuk menjaga sistem IT Anda optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTOFOLIO -->
    <section id="portofolio" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text gradient-bg mb-8">Portofolio Kami</h2>
            <p class="text-gray-600 mb-12">Beberapa proyek sistem pajak daerah yang telah kami kembangkan</p>
            <div class="grid md:grid-cols-3 gap-8">

                <!-- SIMPDRD Sukoharjo -->
                <div class="portfolio-item relative group overflow-hidden rounded-2xl shadow-lg">
                    <a href="https://simpdrd.sukoharjokab.go.id/" target="_blank">
                        <img src="/images/porto1.png" alt="SIMPDRD Sukoharjo"
                            class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                            <h3 class="text-white text-2xl font-semibold">SIMPDRD Sukoharjo</h3>
                        </div>
                    </a>
                </div>

                <!-- Pajak Sragen -->
                <div class="portfolio-item relative group overflow-hidden rounded-2xl shadow-lg">
                    <a href="https://pajak.sragenkab.go.id/" target="_blank">
                        <img src="/images/porto2.png" alt="Pajak Sragen"
                            class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                            <h3 class="text-white text-2xl font-semibold">Pajak Sragen</h3>
                        </div>
                    </a>
                </div>

                <!-- e-Pajak Wonogiri -->
                <div class="portfolio-item relative group overflow-hidden rounded-2xl shadow-lg">
                    <a href="https://e-pajak.wonogirikab.go.id/" target="_blank">
                        <img src="/images/porto3.png" alt="e-Pajak Wonogiri"
                            class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                            <h3 class="text-white text-2xl font-semibold">e-Pajak Wonogiri</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- KONTAK -->
    <section id="kontak" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text gradient-bg text-center mb-12">Hubungi Kami</h2>
            <div class="grid md:grid-cols-2 gap-10 items-center">

                <!-- MAP -->
                <div class="w-full h-[400px] rounded-2xl overflow-hidden shadow-xl border border-[#007FFF]/20">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.20346742414827!2d110.8137965!3d-7.5470948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16bb2b8ad773%3A0xfc0a4c466b37dfdb!2sPT.%20Mitra%20Data%20Abadi%20(MDA)%20SOLO!5e0!3m2!1sen!2sid!4v1606277821228!5m2!1sen!2sid"
                        frameborder="0" style="border:0; width:100%; height:100%;" allowfullscreen=""
                        aria-hidden="false" tabindex="0">
                    </iframe>
                </div>

                <!-- CONTACT ICONS -->
                <div class="text-center md:text-left">
                    <p class="text-gray-600 mb-6 text-lg">
                        Butuh solusi IT untuk bisnis Anda? Hubungi kami melalui:
                    </p>
                    <div class="flex flex-col space-y-6 items-center md:items-start">

                        <!-- WhatsApp -->
                        <a href="https://wa.me/6283175647573" target="_blank"
                            class="flex items-center space-x-4 hover:opacity-90 transition">
                            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp"
                                class="w-12 h-12">
                            <span class="text-lg font-semibold text-[#003399]">WhatsApp Kami</span>
                        </a>

                        <!-- Email -->
                        <a href="mailto:info@mda.co.id" class="flex items-center space-x-4 hover:opacity-90 transition">
                            <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email"
                                class="w-12 h-12">
                            <span class="text-lg font-semibold text-[#003399]">Kirim Email</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="gradient-bg text-white text-center py-6">
        <p>© 2025 PT Mitra Data Abadi. All rights reserved.</p>
    </footer>

</body>

</html>