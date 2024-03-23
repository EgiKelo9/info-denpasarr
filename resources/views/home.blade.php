<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Denpasar</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="fixed flex justify-between items-center max-h-[100px] h-full w-full mx-auto py-[15px] px-[80px] bg-transparent navbar-container z-10 transition linear duration-300">
        <a href="#home"><img src="images/denpasar-logo.png" alt="" class=" w-[110px] object-cover cursor-pointer"></a>
        <div class="flex justify-between items-center gap-[20px] font-semibold text-xl transition linear duration-300">
            <a href="#about" class="py-[10px] px-[15px] hover:text-[#444444]">Tentang</a>
            <a href="#contact" class="py-[10px] px-[15px] hover:text-[#444444]">Kontak</a>
            <button class="py-[10px] px-[15px] bg-[#333333] hover:bg-[#444444] text-white rounded-[10px]"><a href="/login">Masuk/Daftar</a></button>
        </div>
    </nav>
    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-container')
            if (window.scrollY > 0) {
                navbar.classList.add('bg-[#eeeeee]');
            } else {
                navbar.classList.remove('bg-[#eeeeee]');
            }
        });
    </script>

    <!-- Hero -->
    <section class="flex justify-center items-center min-h-screen w-auto h-auto" id="home" style="background: linear-gradient(0deg, rgba(225, 225, 225, 0.8), rgba(225, 225, 225, 0.7)), url(images/background-hero.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <main class="flex flex-col justify-around items-center text-center max-w-[900px] w-full mx-[100px] gap-[30px]">
            <div class="flex items-center justify-center">
                <img src="images/denpasar-logo.png" alt="" class="max-w-[360px] lg:max-w-[450px] w-full object-cover">
            </div>
            <div class="flex flex-col text-[#333333] gap-[15px]">
                <h1 class="font-bold text-4xl leading-normal">Selamat Datang di Website Resmi Kota Denpasar</h1>
                <p class="font-medium text-xl">Mari bergabung ke dalam komunitas warganet Denpasar untuk mendapatkan informasi-informasi dan berita-berita terbaru, serta layanan informasi yang dapat diakses dengan mudah.</p>
            </div>
            <button class="py-[12px] px-[18px] bg-[#333333] hover:bg-[#444444] text-white font-medium rounded-[10px] text-xl"><a href="/register">Gabung Sekarang <i class="bi bi-arrow-right"></i></a></button>
        </main>
    </section>

    <!-- About -->
    <section class="flex justify-center items-center min-h-screen w-auto h-auto" id="about">
        <div class="flex justify-around items-center max-w-[1200px] w-full mx-[100px] gap-[100px]">
            <div class="flex flex-col justify-between text-left gap-[25px]">
                <h1 class="text-[#444444] font-bold text-6xl">Tentang Denpasar</h1>
                <h2 class="italic text-[#444444] font-semibold text-3xl mt-[20px]">Kota Kreatif Berbasis Budaya Menuju Denpasar Maju</h2>
                <p class="text--[#333333] font-normal text-2xl">Denpasar, kota modern yang tertata rapi, menjadi tempat hunian yang layak dan manusiawi, memiliki masyarakat yang berkebudayaan, dan dengan pemerintahan yang berorientasi pada pelayanan publik.</p>
                <button class="py-[12px] px-[18px] bg-[#333333] hover:bg-[#444444] text-white font-medium rounded-[10px] text-xl w-[300px]"><a href="/dashboard">Lihat Selengkapnya <i class="bi bi-arrow-right"></i></a></button>
            </div>
            <div class="flex items-center justify-center">
                <img src="images/pemkot.png" alt="" class="w-[1000px] object-cover">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="flex flex-col justify-between items-center mt-[20px] px-[150px] py-[30px] maxh-h-[400px] h-full w-full bg-[#777777] bot-0" id="contact">
        <div class="flex justify-between items-center max-w-[1400px] w-full">
            <div class="flex gap-[20px]">
                <a href="https://www.facebook.com/denpasarkota/"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/denpasarkota/"><img src="images/instagram.png" alt="Instagram"></a>
                <a href="https://x.com/DenpasarKota?t=hfgGVovkkblhQal2coK2lA&s=08"><img src="images/twitter.png" alt="Twitter"></a>
                <a href="https://www.youtube.com/denpasarkota"><img src="images/youtube.png" alt="Youtube"></a>
            </div>
            <div class="flex gap-[20px]">
                <a href=""><img src="images/denpasar-logo-footer.png" alt=""></a>
                <a href=""><img src="images/pemkot-logo-footer.png" alt=""></a>
            </div>
        </div>
        <div class="flex justify-between items-end max-w-[1400px] w-full p-[10px]">
            <div>
                <div class="flex flex-col justify-center text-white gap-2">
                    <h4 class="text-[25px] font-semibold">Pemerintah Kota Denpasar</h4>
                    <div class="flex gap-3 items-center">
                        <i class="bi-geo-alt" style="font-size: 18px;"></i>
                        <p class="font-normal text-lg">Graha Sewaka Dharma Lumintang Lt. III, Kota Denpasar, Bali - Indonesia</p>
                    </div>
                    <div class="flex gap-3 items-center">
                        <i class="bi-telephone" style="font-size: 18px;"></i>
                        <p class="font-normal text-lg">0361 - 431229</p>
                    </div>
                    <div class="flex gap-3 items-center">
                        <i class="bi-envelope" style="font-size: 18px;"></i>
                        <p class="font-normal text-lg">kominfo@denpasarkota.go.id</p>
                    </div>
                    <div class="flex gap-3 items-center">
                        <i class="bi-globe2" style="font-size: 18px;"></i>
                        <a href="https://www.denpasarkota.go.id">
                            <p class="font-normal text-lg">https://www.denpasarkota.go.id</p>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col justify-center text-white text-right gap-[10px]">
                    <div class="flex flex-col leading-3">
                        <h4 class="font-bold text-xl">Jumlah Responden : 8161</h4>
                        <h4 class="font-bold text-xl">Lihat Hasil</h4>
                    </div>
                    <div class="flex flex-col leading-3">
                        <h4 class="font-semibold text-lg">Review | Sitemap </h4>
                    </div>
                    <div class="flex flex-col leading-3">
                        <p class="font-normal text-base">© 2022 Pemerintah Kota Denpasar. All Right Reserved.</p>
                        <p class="font-normal text-base">Website by Bali Web Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>