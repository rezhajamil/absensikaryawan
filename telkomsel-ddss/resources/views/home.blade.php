@extends('layouts.app')
@section('body')
@include('components.navbar')
<div class="w-full h-fit md:px-32 px-4 my-6">
    <div class="rounded-md overflow-hidden w-full h-fit">
        <iframe class="w-full h-96" src="https://www.youtube.com/embed/v-fkq_p8K8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="my-6 bg-premier py-4">
    <span class="inline-block my-4 font-batik text-4xl text-white w-full text-center">PILIHAN KATEGORI</span>
    <div class="grid grid-cols-2 md:grid-cols-4 px-6 my-6 gap-x-4 gap-y-6">
        <a href="{{ route('the_stage.index') }}" class="c4-izmir c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom-right group flex justify-center items-center h-52 md:h-96" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
            <div class="bg-sekunder w-full h-full flex justify-center items-center group-hover:opacity-0 transition-all">
                <span class="md:text-4xl text-xl text-white inline-block font-bold text-center">
                    THE STAGE
                </span>
            </div>
            <figcaption class="c4-reveal-right">
                <span class="md:text-4xl text-xl text-center w-fit font-bold">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
        <a href="{{ route('ambassador_digital.index') }}" class="c4-izmir c4-border-ccc-3 c4-image-rotate-right c4-gradient-bottom-right group flex justify-center items-center h-52 md:h-96" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
            <div class="bg-sekunder w-full h-full flex justify-center items-center group-hover:opacity-0 transition-all">
                <span class="md:text-4xl text-xl text-white inline-block font-bold text-center">
                    AMBASSADOR DIGITAL
                </span>
            </div>
            <figcaption class="c4-reveal-right">
                <span class="md:text-4xl text-xl text-center w-fit font-bold">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
        <a href="{{ route('special_offer.index') }}" class="c4-izmir c4-border-cc-2 c4-image-rotate-right c4-gradient-bottom-right group flex justify-center items-center h-52 md:h-96" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
            <div class="bg-sekunder w-full h-full flex justify-center items-center group-hover:opacity-0 transition-all">
                <span class="md:text-4xl text-xl text-white inline-block font-bold text-center">
                    SPECIAL OFFERING ORBIT
                </span>
            </div>
            <figcaption class="c4-reveal-right">
                <span class="md:text-4xl text-xl text-center w-fit font-bold">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
        <a href="{{ route('esport.index') }}" class="c4-izmir c4-border-cc-1 c4-image-rotate-right c4-gradient-bottom-right group flex justify-center items-center h-52 md:h-96" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
            <div class="bg-sekunder w-full h-full flex justify-center items-center group-hover:opacity-0 transition-all">
                <span class="md:text-4xl text-xl text-white inline-block font-bold text-center">
                    ESPORT COMPETITION
                </span>
            </div>
            <figcaption class="c4-reveal-right">
                <span class="md:text-4xl text-xl text-center w-fit font-bold">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
    </div>
</div>
@endsection
