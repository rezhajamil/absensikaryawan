@extends('layouts.app')
@section('body')
@include('components.navbar')
<div class="w-full px-4 my-6 h-fit md:px-32">
    <div class="w-full overflow-hidden rounded-md h-fit">
        <iframe class="w-full h-96" src="https://www.youtube.com/embed/4R3lVzqoW-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        {{-- <a href="https://skul.id/" target="_blank" class="flex items-center p-2 mx-auto mt-4 mb-6 font-bold uppercase transition duration-500 bg-white border-2 rounded sm:mb-8 sm:border-4 sm:px-4 sm:py-3 sm:text-lg hover:bg-premier group hover:text-white whitespace-nowrap border-premier text-premier w-fit gap-x-3">
            Kunjungi Disini
            <div class="p-2 transition duration-500 rounded group-hover:bg-white">
                <img src="{{ asset('images/skulid-icon.svg') }}" alt="Skul.id" class="h-6 sm:h-8">
    </div>
    </a> --}}
    </div>
</div>

<div class="w-full py-4 my-6 bg-premier" x-data="{offer:false}">
    <span class="inline-block w-full my-4 text-4xl text-center text-white font-batik selection:bg-white selection:text-premier">PILIHAN KATEGORI</span>
    <div class="grid grid-cols-2 px-6 my-6 md:grid-cols-4 gap-x-4 gap-y-6">
        <div class="flex justify-center col-span-full">
            <a href="{{ route('the_stage.index') }}" class="flex items-center justify-center transition-all c4-izmir c4-border-cc-3 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #021942; --secondary-color: #B90027; --image-opacity: .1;">
                <div class="flex flex-col items-center justify-center w-full h-full px-20 transition-all gap-y-4 md:gap-y-6 bg-sekunder group-hover:opacity-0">
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
        </div>
        {{-- <a href="{{ route('ambassador_digital.index') }}" class="flex items-center justify-center transition-all c4-izmir c4-border-ccc-3 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #B90027; --secondary-color: #021942; --image-opacity: .1;">
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
        <a class="flex items-center justify-center transition-all c4-izmir c4-border-cc-2 c4-image-rotate-right c4-gradient-bottom-right group h-52 md:h-96 hover:shadow-xl" tabindex="0" style="--primary-color: #B90027; --secondary-color: #021942; --image-opacity: .1;" x-on:click="offer=!offer">
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
            <figcaption class="c4-reveal-right">
                <img src="{{ asset('images/logo-esport.png') }}" alt="Dunia Gaming" class="w-full h-full transform scale-150" style="object-fit: contain">
                <span class="text-xl font-bold text-center md:text-4xl w-fit">
                    DAFTAR SEKARANG
                </span>
            </figcaption>
        </a> --}}
    </div>
    <div class="fixed inset-0 z-20 flex items-center justify-center w-full h-full overflow-auto bg-white" style="display: none" x-show="offer" x-transition>
        <i class="absolute z-10 text-3xl transition cursor-pointer text-premier fa-solid fa-xmark top-5 right-10 hover:text-sekunder" x-on:click="offer=false"></i>
        <div class="flex flex-col w-full mx-4 overflow-hidden rounded-lg shadow-lg bg-premier sm:w-1/4">
            <span class="inline-block w-full p-4 mb-2 text-lg font-bold text-center text-white capitalize">Dari mana asal anda?</span>
            <div class="flex mx-auto my-2 mb-4 gap-x-6">
                <a href="{{ route('special_offer.index',['asal'=>'sekolah']) }}" class="px-4 py-2 font-bold text-white transition border-2 border-white bg-premier hover:bg-sekunder hover:border-sekunder">Sekolah</a>
                <a href="{{ route('special_offer.index',['asal'=>'non_sekolah']) }}" class="px-4 py-2 font-bold text-white transition border-2 border-white bg-premier hover:bg-sekunder hover:border-sekunder">Non Sekolah</a>
            </div>
        </div>
    </div>
</div>

<div class="w-full px-4 my-6 h-fit md:px-32">
    <div class="w-full overflow-hidden rounded-md h-fit">
        <iframe class="w-full h-96" src="https://www.youtube.com/embed/4R3lVzqoW-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <a href="https://skul.id/" target="_blank" class="flex items-center p-2 mx-auto mt-4 mb-6 font-bold uppercase transition duration-500 bg-white border-2 rounded sm:mb-8 sm:border-4 sm:px-4 sm:py-3 sm:text-lg hover:bg-premier group hover:text-white whitespace-nowrap border-premier text-premier w-fit gap-x-3">
            Kunjungi Di Sini
            <div class="p-2 transition duration-500 rounded group-hover:bg-white">
                <img src="{{ asset('images/skulid-icon.svg') }}" alt="Skul.id" class="h-6 sm:h-8">
            </div>
        </a>
    </div>
</div>

@if (session('success'))
<div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
<script>
    var data = document.querySelector(".flash-data").getAttribute("data-flashdata");
    Swal.fire({
        title: 'Pendaftaran Berhasil'
        , text: data
        , icon: 'success'
        , showCancelButton: false
    , })

</script>
@endif
@if (session('error'))
<div class="flash-data d-none" data-flashdata="{{ session('error') }}"></div>
<script>
    var data = document.querySelector(".flash-data").getAttribute("data-flashdata");
    Swal.fire({
        title: 'Pendaftaran Gagal'
        , text: data
        , icon: 'error'
        , showCancelButton: false
    , })

</script>
@endif
@endsection
