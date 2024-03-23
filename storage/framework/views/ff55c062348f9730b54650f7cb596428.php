<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="fixed flex justify-between items-center max-h-[100px] h-full w-full mx-auto py-[15px] px-[80px] bg-transparent navbar-container z-10">
        <a href=""><img src="images/denpasar-logo.png" alt="" class=" w-[110px] object-cover cursor-pointer"></a>
        <div class="flex justify-between items-center gap-[20px] font-bold text-lg transition-opacity transition linear duration-300">
            <a href="" class="p-[12px] hover:text-[#444444]">Tentang</a>
            <a href="" class="p-[12px] hover:text-[#444444]">Layanan</a>
            <button class="p-[12px] bg-[#333333] hover:bg-[#444444] text-white rounded-[10px]"><a href="">Masuk/Daftar</a></button>
        </div>
    </nav>
    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-container')
            if (window.scrollY > 0) {navbar.classList.add('bg-[#d1d1d1]');} 
            else {navbar.classList.remove('bg-[#d1d1d1]');}
        });
    </script>

    <!-- Hero -->
    <section class="flex justify-center items-center min-h-screen w-auto h-auto" style="background: linear-gradient(0deg, rgba(225, 225, 225, 0.8), rgba(225, 225, 225, 0.7)), url(images/background-hero.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <main class="flex flex-col justify-around items-center text-center max-w-[900px] w-full mx-[100px] gap-[30px]">
            <div class="flex items-center justify-center">
                <img src="images/denpasar-logo.png" alt="" class="max-w-[360px] lg:max-w-[450px] w-full object-cover">
            </div>
            <div class="flex flex-col text-[#333333] gap-[15px]">
                <h1 class="font-bold text-4xl leading-normal">Selamat Datang di Website Resmi Kota Denpasar</h1>
                <p class="font-medium text-xl">Mari bergabung ke dalam komunitas warganet Denpasar untuk mendapatkan informasi-informasi dan berita-berita terbaru, serta layanan informasi yang dapat diakses dengan mudah.</p>
            </div>
            <button class="py-[12px] px-[18px] bg-[#333333] hover:bg-[#444444] text-white font-medium rounded-[10px] text-xl"><a href="">Gabung Sekarang <i class="bi bi-arrow-right"></i></a></button>
        </main>
    </section>

    <!-- About -->
    <section class="flex justify-center items-center min-h-screen w-auto h-auto">
        <div class="flex justify-around items-center max-w-[1200px] w-full mx-[100px] gap-[100px]">
            <div class="flex flex-col text-left">
                <h1 class="">Tentang Denpasar</h1>
                <p>Denpasar, kota modern yang tertata rapi, menjadi tempat hunian yang layak dan manusiawi, memiliki masyarakat yang berkebudayaan, dan dengan pemerintahan yang berorientasi pada pelayanan publik.</p>
            </div>
            <div class="flex items-center justify-center">
                <img src="images/pemkot.png" alt="" class="max-w-[400px] lg:max-w-[500px] w-full object-cover">
            </div>
        </div>
    </section>

</body>

</html><?php /**PATH D:\STACK 2024\info-denpasar\resources\views/home.blade.php ENDPATH**/ ?>