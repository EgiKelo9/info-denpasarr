@extends('layouts/main')

@section('container')
    <div class="flex flex-col justify-start items-start min-h-screen mx-[100px] mt-[150px]">
        <h1 class="text-4xl text-[#333333] font-bold">Berita Terkini</h1>
        <div class="grid grid-cols-3 gap-10">
            @foreach ($posts as $post)
            <div class="flex flex-col justify-start items-start text-[#333333] mt-10 min-h-[250px] h-full p-[15px] border-2 border-solid border-gray-700 rounded-[20px]">
                <img src="https://picsum.photos/500/300" alt="" class="mb-[20px] rounded-[10px]">
                <h2 class="text-2xl text-[#333] font-semibold"><a href="/news/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p class="text-lg text-[#333] font-normal mt-5">{{ $post->excerpt }}</p>
                <a href="/news/{{ $post->id }}" class="text-lg text-sky-600 mt-auto bottom-5 items-center">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
