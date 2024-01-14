@extends('Admin.template')

@section('content')

<div class="flex flex-col w-full min-h-screen">
		
	@if ($message = Session::get('success'))
		<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 m-3" role="alert">
		  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
		    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
		  </svg>
		  <span class="sr-only">Info</span>
		  <div class="ml-3 text-sm font-medium">Status : {{ $message }}</div>
		  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
		    <span class="sr-only">Close</span>
		    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
		      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
		    </svg>
		  </button>
		</div>
		<hr>
	@endif
	<a href="{{ url('admin') }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 m-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-fit">Kembali</a>

	<form action="{{ url() -> current() }}" method="post" enctype="multipart/form-data" class="w-5/6 md:w-96 p-5 shadow rounded mx-auto my-5">
		@csrf
		<h1 class="font-bold text-center text-lg">Tambah Data</h1>

		<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 my-5" id="image" name="image" type="file" accept="image/*" required>

		<input type="submit" value="Tambah" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto">
	</form>
	<hr>
	<div class="p-3 flex flex-wrap justify-center">
		@if ($data -> isNotEmpty())

			@foreach ($data as $item)
				<div class="flex w-3/5 sm:w-60 rounded-lg shadow m-2 overflow-hidden bg-gray-50 flex-col">
					<div class="bg-[url({{ asset('storage/' . $item -> image) }})] bg-no-repeat bg-center bg-cover w-full aspect-[4/3]"></div>
					<a href="{{ url() -> current() . '/' . $item -> id }}" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mx-auto my-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
				</div>
			@endforeach

		</div>
		<div class="mx-auto mb-5">
			{{ $data -> links() }}
		@else
			<p class="text-center font-bold text-red">Belum Ada Data Banner</p>
		@endif	
	</div>
	
</div>

@endsection