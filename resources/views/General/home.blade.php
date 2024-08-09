@extends('General.template')

@section('content')
    <div class="min-h-screen w-full">

        <div id="default-carousel" class="relative mx-auto my-5 w-full sm:w-4/6" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative aspect-video overflow-hidden rounded shadow">

                @if ($banner->isEmpty())
                    <!-- Item 1 -->
                    <div class="duration-5000 hidden ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/Assets/ITRC.png') }}" class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 bg-black" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="duration-5000 hidden ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/Assets/ITRC.png') }}" class="bg-gold absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="duration-5000 hidden ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/Assets/ITRC.png') }}" class="bg-red absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                @else
                    @foreach ($banner as $item)
                        <div class="duration-5000 hidden ease-in-out" data-carousel-item>
                            <img src={{ asset('storage/' . $item->image) }} class="bg-gold absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            <div class="absolute bottom-0 left-1/2 h-auto w-full -translate-x-1/2 overflow-hidden bg-black/30 px-5 py-2.5 text-3xl font-bold text-white">
                                <p class="line-clamp-2">{{ $item->title }}</p>
                            </div>
                        </div>
                    @endforeach
                    @if ($banner->count() === 1)
                        <div class="duration-5000 hidden ease-in-out" data-carousel-item>
                            <img src={{ asset('storage/' . $banner[0]->image) }} class="bg-gold absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            <div class="absolute bottom-0 left-1/2 h-auto w-full -translate-x-1/2 overflow-hidden bg-black/30 px-5 py-2.5 text-3xl font-bold text-white">
                                <p class="line-clamp-2">{{ $item->title }}</p>
                            </div>
                        </div>
                    @endif
                @endif

            </div>
            <!-- Slider controls -->
            <button type="button" class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-carousel-prev>
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                    <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-carousel-next>
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                    <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="berita">
            <div class="judul bg-red flex w-full cursor-default items-center justify-center p-0.5 text-xl font-bold text-white">
                <h2>BERITA</h2>
            </div>
            <div class="flex flex-wrap items-center justify-center p-5">

                @if ($berita->isNotEmpty())
                    @foreach ($berita as $item)
                        <div class="m-1.5 w-4/6 rounded-lg border border-gray-200 bg-white shadow sm:w-64">
                            <a href="{{ $item->id . '/Berita' }}">
                                <div class="aspect-video w-full rounded-t-lg bg-[url({{ asset('storage/' . $item->image) }})] bg-cover bg-center bg-no-repeat"></div>
                                <div class="p-5">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ strlen($item->title) > 30 ? substr($item->title, 0, 30) . '...' : $item->title }}</h5>
                                    <p class="mb-3 font-normal text-gray-700">{{ strlen($item->description) > 100 ? substr($item->description, 0, 100) . '...' : $item->description }}</p>
                                    <p class="bg-gold hover:text-gold hover:shadow-gold focus:ring-gold inline-flex items-center rounded-lg px-3 py-2 text-center text-sm font-medium text-white hover:bg-white hover:shadow focus:outline-none focus:ring-4">
                                        Read more
                                        <svg class="ml-2 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>Belum Ada Berita Terbaru</p>
                @endif

            </div>
            @if ($berita->isNotEmpty())
                <div class="flex w-full items-center justify-center font-semibold">
                    <a href="Berita" class="text-red">Lihat Selengkapnya...</a>
                </div>
            @endif
        </div>

    </div>
@endsection
