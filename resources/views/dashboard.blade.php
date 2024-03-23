@extends('layouts.main')

@section('container')
    <div class="flex justify-center items-center min-h-screen translate-y-[75px]"
        style="background: linear-gradient(0deg, rgba(225, 225, 225, 0.8), rgba(225, 225, 225, 0.7)), url(images/background-hero.jpg); background-size: cover;">
        <main class="block justify-center items-center max-w-[900px]">
            <div class="flex justify-center items-center">
                <img src="images/denpasar-logo.png" alt="" class="w-[480px] object-cover" />
            </div>
            <div class="py-[50px]">
                <h1 class="text-[35px] font-bold text-center">Selamat Datang di Website Resmi Kota Denpasar</h1>
                <p class="text-[22px] font-normal pt-[20px] max-w-[850px] text-center">
                    Denpasar, kota modern yang tertata rapi, menjadi tempat hunian yang
                    layak dan manusiawi, memiliki masyarakat yang berkebudayaan, dan
                    dengan pemerintahan yang berorientasi pada pelayanan publik
                </p>
            </div>
            <div class="flex justify-around items-center relative">
                <input type="text" placeholder="Apa yang Anda ingin cari"
                    class="max-w-[780px] w-full p-[15px] rounded-[30px] bg-[#eaeaea] text-base font-normal tracking-[0.5px]" />
                <button class="bg-[#333] p-[15px] rounded-full cursor-pointer"><img src="images/search-icon.svg"
                        alt="" class="w-30px" /></button>
            </div>
        </main>
    </div>
@endsection
