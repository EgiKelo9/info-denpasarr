@extends('layouts/main')

@section('container')
<div class="flex justify-center items-center min-h-screen mx-[5%] gap-[50px] overflow-x-hidden">
    <div class="w-[45%] mt-[150px]">
        <img src="https://picsum.photos/700/400" alt="" class="mb-[20px] rounded-[20px]">
    </div>
    <div class="flex flex-col justify-start items-start mt-[150px] w-[45%]">
        <h1 class="text-4xl text-[#333333] font-bold">{{ $post->title }}</h1>
        <p class="text-lg text-[#333] font-normal mt-5">{{ $post->body }}</p>
    </div>
</div>
@endsection