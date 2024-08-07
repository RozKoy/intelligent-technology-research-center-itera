@extends('General.template')

@section('content')
<div class="w-full min-h-screen">
		
	<div class="judul w-full flex items-center justify-center bg-red text-white text-xl font-bold p-0.5 cursor-default text-center">
		<h2>{{ $page }} > {{ strlen($data -> title) > 25? substr($data -> title, 0, 25) . ' ...' : $data -> title }}</h2>
	</div>

	<div class="flex flex-wrap px-5 justify-center">
		
		<div class="md:flex-1">
			
			<div class="w-full md:w-4/5 shadow shadow-gold mx-auto my-5 p-3 overflow-hidden text-sm">	
				<h3 class="font-bold text-2xl text-gold">{{ $data -> title }}</h3>
				<div class="w-auto aspect-video shadow m-3 bg-[url({{ asset('storage/' . $data -> image) }})] bg-cover bg-no-repeat bg-center"></div>
				<p>{!! nl2br($data -> description) !!}</p>
			</div>

		</div>

		<div class="p-3 shadow shadow-gold my-5 w-fit h-fit">

		@if ($side1[0] || $side2[0] || $side3[0])
				@if ($side1[0])
					<a href="{{ $side1[0] -> id }}/{{ $side1[1] }}">
					<div class="w-48 h-52 bg-[url({{ asset('storage/' . $side1[0] -> image) }})] bg-cover bg-no-repeat bg-center rounded my-3 flex flex-col">
						<p class="block text-white text-sm text-center bg-black/50 rounded mb-auto p-1 w-fit">{{ $side1[1] }}</p>
						<p class="block text-white text-sm text-center bg-black/50 rounded mt-auto p-1 w-full">{{ strlen($side1[0] -> title) > 75? substr($side1[0] -> title, 0, 75) . '...' : $side1[0] -> title }}</p>
					</div>
					</a>
				@endif
				@if ($side2[0])
					<a href="{{ $side2[0] -> id }}/{{ $side2[1] }}">
					<div class="w-48 h-52 bg-[url({{ asset('storage/' . $side2[0] -> image) }})] bg-cover bg-no-repeat bg-center rounded my-3 flex flex-col">
						<p class="block text-white text-sm text-center bg-black/50 rounded mb-auto p-1 w-fit">{{ $side2[1] }}</p>
						<p class="block text-white text-sm text-center bg-black/50 rounded mt-auto p-1 w-full">{{ strlen($side2[0] -> title) > 75? substr($side2[0] -> title, 0, 75) . '...' : $side2[0] -> title }}</p>
					</div>
					</a>
				@endif
				@if ($side3[0])
					<a href="{{ $side3[0] -> id }}/{{ $side3[1] }}">
					<div class="w-48 h-52 bg-[url({{ asset('storage/' . $side3[0] -> image) }})] bg-cover bg-no-repeat bg-center rounded my-3 flex flex-col">
						<p class="block text-white text-sm text-center bg-black/50 rounded mb-auto p-1 w-fit">{{ $side3[1] }}</p>
						<p class="block text-white text-sm text-center bg-black/50 rounded mt-auto p-1 w-full">{{ strlen($side3[0] -> title) > 75? substr($side3[0] -> title, 0, 75) . '...' : $side3[0] -> title }}</p>
					</div>
					</a>
				@endif
			@else
				<p>Tidak Ada Rekomendasi</p>
			@endif

		</div>

	</div>

</div>
@endsection