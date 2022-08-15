@extends('layouts.app')
@section('body')
@include('components.navbar')
<div class="w-full px-4 my-6 h-fit md:px-32">
    <div class="w-full overflow-hidden rounded-md h-fit">
        <iframe class="w-full h-96" src="https://www.youtube.com/embed/v-fkq_p8K8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="py-4 my-6 bg-premier">
    <span class="inline-block w-full my-4 text-4xl text-center text-white font-batik selection:bg-white selection:text-premier">PILIHAN KATEGORI</span>
    <div class="grid grid-cols-2 px-6 my-6 md:grid-cols-4 gap-x-4 gap-y-6">
        <a href="{{ route('the_stage.index') }}" class="flex items-center justify-center transition-all c4-izmir c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
            <div class="flex flex-col items-center justify-center w-full h-full transition-all gap-y-4 md:gap-y-6 bg-sekunder group-hover:opacity-0">
                <i class="text-3xl md:text-6xl sm:text-4xl fa-solid fa-microphone-lines"></i>
                <span class="inline-block px-3 text-lg font-bold text-center text-white md:text-4xl">
                    THE STAGE
                </span>
            </div>
            <figcaption class="px-3 c4-reveal-right">
                <span class="text-xl font-bold text-center md:text-4xl w-fit">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
        <a href="{{ route('ambassador_digital.index') }}" class="flex items-center justify-center transition-all c4-izmir c4-border-ccc-3 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #B90027; --secondary-color: #021942; --image-opacity: .1;">
            <div class="flex flex-col items-center justify-center w-full h-full transition-all bg-white gap-y-4 md:gap-y-6 group-hover:opacity-0">
                <i class="text-3xl md:text-6xl sm:text-4xl fa-solid fa-image-portrait text-sekunder"></i>
                <span class="inline-block px-3 text-lg font-bold text-center md:text-4xl text-sekunder">
                    AMBASSADOR DIGITAL
                </span>
            </div>
            <figcaption class="px-3 c4-reveal-right">
                <span class="text-xl font-bold text-center md:text-4xl w-fit">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
        <a href="{{ route('special_offer.index') }}" class="flex items-center justify-center transition-all c4-izmir c4-border-cc-2 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #B90027; --secondary-color: #021942; --image-opacity: .1;">
            <div class="flex flex-col items-center justify-center w-full h-full transition-all bg-white gap-y-4 md:gap-y-6 group-hover:opacity-0">
                <i class="text-3xl md:text-6xl sm:text-4xl fa-solid fa-bullhorn text-sekunder"></i>
                <span class="inline-block px-3 text-lg font-bold text-center md:text-4xl text-sekunder">
                    SPECIAL OFFERING ORBIT
                </span>
            </div>
            <figcaption class="px-3 c4-reveal-right">
                <span class="text-xl font-bold text-center md:text-4xl w-fit">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
        <a href="{{ route('esport.index') }}" class="flex items-center justify-center transition-all c4-izmir c4-border-cc-1 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
            <div class="flex flex-col items-center justify-center w-full h-full transition-all gap-y-4 md:gap-y-6 bg-sekunder group-hover:opacity-0">
                <i class="text-3xl md:text-6xl sm:text-4xl fa-solid fa-trophy"></i>
                <span class="inline-block px-3 text-lg font-bold text-center text-white md:text-4xl">
                    ESPORT COMPETITION
                </span>
            </div>
            <figcaption class="px-3 c4-reveal-right">
                <span class="text-xl font-bold text-center md:text-4xl w-fit">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a>
    </div>
</div>
@endsection
