@extends('General.template')

@section('content')
<div class="w-full min-h-screen">

		<div id="default-carousel" class="relative w-full sm:w-4/6 mx-auto my-5" data-carousel="slide">
		    <!-- Carousel wrapper -->
		    <div class="relative aspect-video overflow-hidden rounded shadow">

				@if ($banner -> isEmpty())
		         <!-- Item 1 -->
		        <div class="hidden duration-5000 ease-in-out" data-carousel-item>
		            <img src="{{ asset('storage/Assets/ITERA.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-black" alt="...">
		        </div>
		        <!-- Item 2 -->
		        <div class="hidden duration-5000 ease-in-out" data-carousel-item>
		            <img src="{{ asset('storage/Assets/ITERA.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gold" alt="...">
		        </div>
		        <!-- Item 3 -->
		        <div class="hidden duration-5000 ease-in-out" data-carousel-item>
		            <img src="{{ asset('storage/Assets/ITERA.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-red" alt="...">
		        </div>
				@else
					@foreach ($banner as $item)
						<div class="hidden duration-5000 ease-in-out" data-carousel-item>
			            <img src={{ asset('storage/' . $item -> image) }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gold" alt="...">
			      	</div>
					@endforeach
					@if ($banner -> count() === 1)
						<div class="hidden duration-5000 ease-in-out" data-carousel-item>
			            <img src={{ asset('storage/' . $banner[0] -> image) }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-gold" alt="...">
						</div>
		       	@endif
				@endif

		    </div>
		    <!-- Slider controls -->
		    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
		        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
		            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
		                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
		            </svg>
		            <span class="sr-only">Previous</span>
		        </span>
		    </button>
		    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
		        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
		            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
		                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
		            </svg>
		            <span class="sr-only">Next</span>
		        </span>
		    </button>
		</div>

	<div class="berita">
		<div class="judul w-full flex items-center justify-center bg-red text-white text-xl font-bold p-0.5 cursor-default">
			<h2>BERITA</h2>
		</div>
		<div class="flex flex-wrap items-center justify-center p-5">
			
			@if ($berita -> isNotEmpty())
				@foreach ($berita as $item)
				<div class="w-4/6 sm:w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-1.5">
				    <a href="{{ $item -> id . '/Berita' }}">
				    	<div class="rounded-t-lg w-full aspect-video bg-cover bg-center bg-no-repeat bg-[url({{ asset('storage/' . $item -> image) }})]"></div>
				    <div class="p-5">
			            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item -> title }}</h5>
				        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ (strlen($item -> description) > 100? substr($item -> description, 0, 100) . '...' : $item -> description) }}</p>
				        <p class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gold rounded-lg hover:bg-white hover:text-gold hover:shadow hover:shadow-gold focus:ring-4 focus:outline-none focus:ring-gold">
				            Read more
				             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
				                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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
		@if ($berita -> isNotEmpty())
			<div class="w-full flex items-center justify-center font-semibold">
				<a href="Berita" class="text-red">Lihat Selengkapnya...</a>
			</div>
		@endif
	</div>
			
</div>
@endsection