@extends('General.template')

@section('content')
    <div class="min-h-screen w-full bg-blue bg-[url('{{ asset('storage/Assets/ainovac/bg.png') }}')] bg-cover bg-top">

        <div class="text-wrap relative flex min-h-screen flex-col items-center justify-center gap-4 px-5 py-10 text-center text-lg md:gap-7 md:text-xl">
            <img src="{{ url(asset('storage/Assets/ainovac/title.png')) }}" alt="AI-NOVAC-logo" srcset="" class="w-[42rem]">
            <p class="uppercase text-goldsec">Artificial Intelligence Innovation and Application Competition</p>
            <a href="#pengumuman" class="rounded-lg px-5 py-1.5 uppercase text-goldsec shadow-inner shadow-goldsec outline outline-1 outline-goldsec">Baca Pengumuman</a>
        </div>

        <div class="flex min-h-min flex-col items-center justify-center gap-3 px-5 py-10 text-lg md:gap-5 md:text-xl">
            <embed id="pengumuman" src="{{ asset('storage/Assets/ainovac/pengumuman-hasil-seleksi-I-lomba-ai-novac-2024.pdf') }}" class="aspect-[9/16] w-10/12 max-w-screen-lg max-sm:w-full">
            <a href="{{ asset('storage/Assets/ainovac/pengumuman-hasil-seleksi-I-lomba-ai-novac-2024.pdf') }}" download class="rounded-lg px-5 py-1.5 uppercase text-goldsec shadow-inner shadow-goldsec outline outline-1 outline-goldsec">Unduh Pengumuman</a>
        </div>

        <!-- <div class="h-96 w-full bg-gradient-to-b from-blue to-white"></div> -->

    </div>
@endsection
