@extends('General.Template')

@section('content')
<div class="w-full min-h-screen flex flex-col">
		
	<div class="judul w-full flex items-center justify-center bg-red text-white text-xl font-bold p-0.5 cursor-default">
		<h2>KONTAK</h2>
	</div>

	<div class="flex flex-wrap items-center justify-center w-auto m-auto px-2 py-5">
		
		<div class="logo w-60 aspect-square bg-no-repeat bg-center bg-white bg-[length:70%] rounded-full shadow shadow-gold m-5"></div>
		
		<div>
			<div class="text-2xl text-red font-bold text-center sm:text-left">
				<h1>Pusat Riset Teknologi Cerdas</h1>
				<h1>Institut Teknologi Sumatera</h1>
			</div>

			<div class="flex flex-wrap justify-center text-xs my-3">

				<div>
					<div class="flex items-center w-40 h-12 my-2">
						<svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve" class="w-7 flex-none mr-2 fill-inherit"><path d="m20.914 17.743-2.091 1.178a1.319 1.319 0 0 1-1.58-.217l-6.979-6.979a1.32 1.32 0 0 1-.217-1.58l1.178-2.091a1.978 1.978 0 0 0-.325-2.37L7.766 2.55a1.978 1.978 0 0 0-2.798 0L3.545 3.972a5.276 5.276 0 0 0-.793 6.446l.714 1.19a41.36 41.36 0 0 0 14.946 14.631l.141.081c2.102 1.201 4.699.851 6.382-.831l1.486-1.486a1.978 1.978 0 0 0 0-2.798l-3.136-3.136a1.978 1.978 0 0 0-2.371-.326z"></path></svg>
						<p>0857 1408 6489</p>
					</div>
					
					<div class="flex items-center w-40 h-12 my-2">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 96" class="w-7 flex-none mr-2 fill-inherit"><path d="M0 11.283V8a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8v3.283l-64 40zm66.12 48.11a4.004 4.004 0 0 1-4.24 0L0 20.717V88a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V20.717z" data-name="Layer 2"></path></svg>
						<p>jtpi@itera.ac.id</p>
					</div>
				</div>

				<div>
					<div class="flex items-center w-52 h-12 my-2">
						<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" class="w-7 flex-none mr-2 fill-inherit"><path d="M12,2a8.009,8.009,0,0,0-8,8c0,3.255,2.363,5.958,4.866,8.819,0.792,0.906,1.612,1.843,2.342,2.791a1,1,0,0,0,1.584,0c0.73-.948,1.55-1.885,2.342-2.791C17.637,15.958,20,13.255,20,10A8.009,8.009,0,0,0,12,2Zm0,11a3,3,0,1,1,3-3A3,3,0,0,1,12,13Z"></path></svg>
						<p>Gedung D106 - ITERA, Jalan Terusan Ryacudu, Way Huwi, Lampung Selatan</p>
					</div>
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3804923865014!2d105.3112339228392!3d-5.35877555952762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c35626afb935%3A0x7b8fd60e5e4ab7c2!2sGedung%20D%20ITERA!5e0!3m2!1sen!2sid!4v1690687586126!5m2!1sen!2sid" class="w-48 aspect-video bg-slate-100 border-0 shadow" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				
				{{-- <div class="flex my-2.5">
					
				</div>

				<div class="flex items-start my-2.5">

				</div> --}}

			</div>
			
		</div>

	</div>

</div>
@endsection