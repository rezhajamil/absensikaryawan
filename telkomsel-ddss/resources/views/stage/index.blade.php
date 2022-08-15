@extends('layouts.app')
@section('body')
@include('components.navbar')
<div class="flex justify-center w-full px-6 my-4 h-fit" x-data="{banner:false}">
    <div class="w-full overflow-hidden rounded-lg h-[500px] object-center cursor-pointer relative group" x-on:click="banner=!banner">
        <div class="absolute inset-0 flex items-center justify-center w-full h-full transition opacity-0 bg-slate-800/70 group-hover:opacity-100">
            <i class="text-4xl text-white fa-solid fa-up-right-and-down-left-from-center"></i>
        </div>
        <img src="{{ asset('images/banner-stage.png') }}" alt="Banner Stage" class="object-contain w-full">
    </div>
    <div class="fixed inset-0 z-20 flex items-center justify-center w-full h-full overflow-auto bg-black/80" x-show="banner" x-transition>
        <i class="absolute z-10 text-3xl text-white transition cursor-pointer fa-solid fa-xmark top-5 right-10 hover:text-premier" x-on:click="banner=false"></i>
        <img src="{{ asset('images/banner-stage.png') }}" alt="Banner Stage" class="relative w-full px-4 py-8 sm:h-full h-fit aspect-auto">
    </div>
</div>
@endsection
