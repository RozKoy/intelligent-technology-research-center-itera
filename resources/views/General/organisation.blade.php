@extends('General.Template')

@section('content')
<div class="w-full min-h-screen">
		
	<div class="judul w-full flex items-center justify-center bg-red text-white text-xl font-bold p-0.5 cursor-default">
		<h2>STRUKTUR ORGANISASI</h2>
	</div>

	<div class="flex flex-col items-center justify-center py-5">
		
		@if ($kepala)
			<div class="w-64 h-72 flex flex-col rounded shadow text-center text-white m-2.5">
				<div class="w-3/4 aspect-square rounded-full shadow my-2.5 mx-auto bg-[url({{ asset('storage/' . $kepala -> image) }})] bg-cover bg-no-repeat bg-center"></div>
				<div class="bg-gold mt-auto rounded-t-2xl max-h-[70px] overflow-hidden py-1 px-0.5 text-sm">
					<p class="font-bold text-base">{{ $kepala -> position }}</p>
					<p>{{ $kepala -> name }}</p>
				</div>
			</div>
		@else
			<div class="w-64 h-72 flex flex-col rounded shadow text-center text-white m-2.5">
				<div class="w-3/4 aspect-square rounded-full shadow my-2.5 mx-auto bg-gold"></div>
				<div class="bg-gold mt-auto rounded-t-2xl max-h-[70px] overflow-hidden p-0.5 text-sm">
					<p class="font-bold text-base">KEPALA</p>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
			</div>
		@endif

		<div class="flex flex-wrap items-center justify-center py-5">
			
			@if ($data -> isNotEmpty())
				@foreach($data as $item)
					<div class="w-64 h-72 flex flex-col rounded shadow text-center text-white m-2.5">
						<div class="w-3/4 aspect-square rounded-full shadow my-2.5 mx-auto bg-[url({{ asset('storage/' . $item -> image) }})] bg-cover bg-no-repeat bg-center"></div>
						<div class="bg-gold mt-auto rounded-t-2xl max-h-[70px] overflow-hidden py-1 px-0.5 text-sm">
							<p class="font-bold text-base">{{ $item -> position }}</p>
							<p>{{ $item -> name }}</p>
						</div>
					</div>
				@endforeach
			@else 
				@for ($i=0; $i < 3; $i++)
					<div class="w-64 h-72 flex flex-col rounded shadow text-center text-white m-2.5">
						<div class="w-3/4 aspect-square rounded-full shadow my-2.5 mx-auto bg-gold"></div>
						<div class="bg-gold mt-auto rounded-t-2xl max-h-[70px] overflow-hidden p-0.5 text-sm">
							<p class="font-bold text-base">KEPALA</p>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>
				@endfor
			@endif

		</div>
	</div>

</div>
@endsection