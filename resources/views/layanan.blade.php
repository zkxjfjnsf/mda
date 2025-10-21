<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami | PT MDA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Tema Egyptian Blue / Azure */
        :root {
            --egyptian-blue: #003399;
            --azure: #007FFF;
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--egyptian-blue), var(--azure));
        }

        .text-primary {
            color: var(--azure);
        }

        .bg-primary {
            background-color: var(--egyptian-blue);
        }

        .hover-primary:hover {
            color: var(--azure);
        }
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">


    <!-- NAVBAR -->
    <nav class="fixed w-full top-0 left-0 gradient-bg shadow-lg z-50">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-md">
                    <span class="text-xl font-bold text-[#003399]">M</span>
                </div>
                <span class="text-lg font-bold text-white hidden sm:block">PT MDA</span>
            </div>
            <ul class="flex space-x-6 text-white font-medium">
                <li><a href="/" class="nav-link">Beranda</a></li>
                <li><a href="about" class="nav-link">About</a></li>
                <li><a href="layanan" class="nav-link">Layanan</a></li>
                <li><a href="kontak" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </nav>
    <!-- LAYANAN -->
    <section id="layanan" class="pt-32 pb-24 bg-gradient-to-br from-[#eaf2ff] to-white">
        <div class="container mx-auto px-6 lg:px-20 text-center mb-16">
            <h2 class="text-4xl font-extrabold text-gray-800">
                Layanan <span class="text-[var(--azure)]">Kami</span>
            </h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">
                Kami menyediakan berbagai layanan teknologi informasi untuk membantu bisnis dan instansi Anda
                bertransformasi secara digital dengan efektif dan efisien.
            </p>
        </div>

        <div class="container mx-auto px-6 lg:px-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- CARD 1 -->
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#dce7ff] mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[var(--azure)]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v16h16V4H4zm4 8h8m-8 4h5" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[var(--egyptian-blue)] mb-3">Software Development</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pengembangan aplikasi web dan mobile modern yang disesuaikan dengan kebutuhan bisnis Anda.
                </p>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#dce7ff] mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[var(--azure)]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m2 8H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[var(--egyptian-blue)] mb-3">IT Consultant</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Layanan konsultasi untuk strategi digital, implementasi sistem, serta perencanaan infrastruktur IT.
                </p>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#dce7ff] mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[var(--azure)]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5h18M9 3v2m6-2v2M3 10h18M5 15h14M9 21h6" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[var(--egyptian-blue)] mb-3">Messenger Gateway</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Solusi integrasi pesan otomatis untuk notifikasi sistem melalui SMS dan WhatsApp.
                </p>
            </div>

            <!-- CARD 4 -->
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#dce7ff] mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[var(--azure)]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 0h6M5 7h14" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[var(--egyptian-blue)] mb-3">GIS Development</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pembuatan sistem informasi geografis untuk pengelolaan data spasial dan peta digital.
                </p>
            </div>

            <!-- CARD 5 -->
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#dce7ff] mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[var(--azure)]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v8m4-4H8m12 4a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[var(--egyptian-blue)] mb-3">Digitalisasi Pemerintahan</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Solusi e-Government seperti e-Pajak, e-Retribusi, dan sistem administrasi pemerintahan digital.
                </p>
            </div>

            <!-- CARD 6 -->
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#dce7ff] mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[var(--azure)]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[var(--egyptian-blue)] mb-3">Infrastruktur & Server</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Penyediaan dan manajemen server, jaringan, serta infrastruktur cloud yang handal dan aman.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-center text-white">
        <h3 class="text-2xl font-semibold mb-4">Ingin Bekerja Sama dengan Kami?</h3>
        <p class="text-indigo-100 mb-6">Hubungi kami untuk konsultasi dan solusi teknologi terbaik.</p>

        <a href="https://wa.me/6283175647573" target="_blank"
            class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-500 px-8 py-3 rounded-xl text-white font-semibold shadow-lg hover:opacity-90 transition">
            <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-6 h-6 mr-2">
            WhatsApp Kami
        </a>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[var(--egyptian-blue)] text-white py-6">
        <div class="container mx-auto text-center text-sm">
            ©2025 PT Mitra Data Abadi. All Rights Reserved.
        </div>
    </footer>

</body>

</html>