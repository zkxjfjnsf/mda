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

    <!-- ABOUT -->
    <section id="about" class="pt-32 pb-24 bg-gradient-to-br from-blue-50 to-white">
      <div class="container mx-auto px-6 lg:px-20 text-center mb-16">
        <h2 class="text-4xl font-extrabold text-gray-800">
          Tentang <span class="text-blue-700">Kami</span>
        </h2>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">
          PT Mitra Data Abadi (MDA) adalah perusahaan teknologi informasi yang berfokus pada solusi digital,
          pengembangan perangkat lunak, dan sistem informasi yang inovatif untuk mendukung transformasi digital di
          Indonesia.
        </p>
      </div>

      <!-- ISI -->
      <div class="container mx-auto px-6 lg:px-20 grid md:grid-cols-2 gap-12 items-center">
        <div>
          <img src="{{ asset('images/about-mda.jpg') }}" alt="Tentang PT MDA" class="rounded-2xl shadow-lg w-full">
        </div>
        <div class="text-left">
          <h3 class="text-2xl font-semibold text-blue-700 mb-4">Visi Kami</h3>
          <p class="text-gray-600 mb-6">
            Menjadi perusahaan penyedia solusi teknologi informasi yang unggul, inovatif,
            dan terpercaya dalam mendukung digitalisasi sektor publik maupun swasta.
          </p>

          <h3 class="text-2xl font-semibold text-blue-700 mb-4">Misi Kami</h3>
          <ul class="text-gray-600 space-y-3 list-disc list-inside">
            <li>Mengembangkan sistem dan aplikasi yang efisien, aman, serta mudah digunakan.</li>
            <li>Memberikan pelayanan terbaik melalui inovasi dan profesionalisme.</li>
            <li>Mendukung pemerintah dan bisnis menuju transformasi digital yang berkelanjutan.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- MAP -->
    <section class="py-16 bg-blue-700 text-white text-center">
      <h3 class="text-2xl font-semibold mb-6">Lokasi Kami</h3>
      <div class="container mx-auto px-6 lg:px-20">
        <div class="rounded-2xl overflow-hidden shadow-lg">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.20346742414827!2d110.8137965!3d-7.5470948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16bb2b8ad773%3A0xfc0a4c466b37dfdb!2sPT.%20Mitra%20Data%20Abadi%20(MDA)%20SOLO!5e0!3m2!1sen!2sid!4v1606277821228!5m2!1sen!2sid"
            frameborder="0" style="border:0;width:100%;height:400px" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-blue-700 text-center text-white">
      <h3 class="text-2xl font-semibold mb-4">Ingin Bekerja Sama dengan Kami?</h3>
      <p class="text-blue-100 mb-6">Hubungi kami untuk konsultasi dan solusi teknologi terbaik.</p>

      <a href="https://wa.me/6283175647573" target="_blank"
        class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-500 px-8 py-3 rounded-xl text-white font-semibold shadow-lg hover:opacity-90 transition">
        <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-6 h-6 mr-2">
        WhatsApp Kami
      </a>
    </section>

    <!-- FOOTER -->
    <footer class="bg-blue-700 text-white py-6">
      <div class="container mx-auto text-center text-sm">
        ©2025 PT Mitra Data Abadi. All Rights Reserved.
      </div>
    </footer>

  </body>

</html>