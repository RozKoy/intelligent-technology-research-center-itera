<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page }} - Pusat Riset Teknologi Cerdas Institut Teknologi Sumatera atau ITERA Intelligent Technology Research Center">

    <title>{{ $page }} | {{ env('APP_NAME') }}</title>

    <link rel="icon" href="{{ asset('storage/ITRC.ico') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        red: '#6E0D25',
                        gold: '#D0AD50',
                        blue: '#011635',
                        goldsec: '#F7DB5B',
                    }
                },
                fontFamily: {
                    'poppins': 'Poppins, sans-serif',
                }
            }
        }
    </script>
</head>

<body>

    <div class="w-full font-poppins">

        <div class="header w-full rounded-b-3xl bg-gold shadow-md">
            <div class="header-head flex w-full cursor-default flex-wrap items-center justify-center bg-red px-3 py-5 text-white">
                <div class="mr-auto flex w-max items-center">
                    <div class="aspect-square w-24 rounded-full bg-black bg-[url('{{ asset('storage/Assets/ITRC.png') }}')] bg-[length:70%] bg-center bg-no-repeat"></div>
                    <div class="ml-2.5 text-sm font-semibold">
                        <h1>Pusat Riset Teknologi Cerdas</h1>
                        <h1>Institut Teknologi Sumatera</h1>
                    </div>
                </div>

                <div class="my-2 flex flex-wrap items-center justify-center fill-white text-xs">
                    <div class="m-1 flex max-w-[11rem] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" class="mr-2 w-7 flex-none fill-inherit">
                            <path d="M12,2a8.009,8.009,0,0,0-8,8c0,3.255,2.363,5.958,4.866,8.819,0.792,0.906,1.612,1.843,2.342,2.791a1,1,0,0,0,1.584,0c0.73-.948,1.55-1.885,2.342-2.791C17.637,15.958,20,13.255,20,10A8.009,8.009,0,0,0,12,2Zm0,11a3,3,0,1,1,3-3A3,3,0,0,1,12,13Z"></path>
                        </svg>
                        <p>Gedung D ITERA, Way Huwi, Jati Agung, Lampung Selatan, Lampung 35365</p>
                    </div>

                    <div class="m-1 flex max-w-[11rem] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve" class="mr-2 w-7 flex-none fill-inherit">
                            <path d="m20.914 17.743-2.091 1.178a1.319 1.319 0 0 1-1.58-.217l-6.979-6.979a1.32 1.32 0 0 1-.217-1.58l1.178-2.091a1.978 1.978 0 0 0-.325-2.37L7.766 2.55a1.978 1.978 0 0 0-2.798 0L3.545 3.972a5.276 5.276 0 0 0-.793 6.446l.714 1.19a41.36 41.36 0 0 0 14.946 14.631l.141.081c2.102 1.201 4.699.851 6.382-.831l1.486-1.486a1.978 1.978 0 0 0 0-2.798l-3.136-3.136a1.978 1.978 0 0 0-2.371-.326z"></path>
                        </svg>
                        <div>
                            <p>(0721) 8030 188</p>
                        </div>
                    </div>

                    <div class="m-1 flex max-w-[11rem] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 96" class="mr-2 w-7 flex-none fill-inherit">
                            <path d="M0 11.283V8a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8v3.283l-64 40zm66.12 48.11a4.004 4.004 0 0 1-4.24 0L0 20.717V88a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V20.717z" data-name="Layer 2"></path>
                        </svg>
                        <p>itrc@itera.ac.id</p>
                    </div>
                </div>
            </div>

            <ul class="header-navbar flex w-full flex-wrap items-center justify-center p-2 text-center text-xs">
                <li><a href="/" class="m-2 block w-24 rounded-md bg-white py-2 shadow hover:text-gold">BERANDA</a></li>

                <li id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" data-dropdown-trigger="click" class="m-2 flex w-24 cursor-default items-center justify-center rounded-md bg-white py-2 shadow hover:text-gold">PROFIL <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg></li>
                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-50 hidden divide-y divide-gray-100 rounded-lg bg-gold shadow">
                    <ul class="text-xs text-gray-700" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="/Profil" class="m-2 block w-24 rounded-md bg-white py-2 shadow hover:text-gold">Profil</a>
                        </li>
                        <li>
                            <a href="/Organisasi" class="m-2 block w-24 rounded-md bg-white py-2 shadow hover:text-gold">Organisasi</a>
                        </li>
                    </ul>
                </div>

                {{-- <li id="dropdownHoverButton" data-dropdown-toggle="dropdownHover_1" data-dropdown-trigger="hover" data-dropdown-trigger="click" class=" flex items-center justify-center bg-white py-2 m-2 w-24 rounded-md shadow hover:text-gold cursor-default">ARTIKEL <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
				    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
				  </svg></li>
				<!-- Dropdown menu -->
				<div id="dropdownHover_1" class="z-50 hidden bg-gold divide-y divide-gray-100 rounded-lg shadow">
				    <ul class="text-gray-700 text-xs" aria-labelledby="dropdownHoverButton">
				      <li>
				        <a href="/Berita" class="block bg-white py-2 m-2 w-24 rounded-md shadow hover:text-gold">BERITA</a>
				      </li>
				      <li>
				        <a href="/Proyek-riset" class="block bg-white py-2 m-2 w-24 rounded-md shadow hover:text-gold">PROYEK RISET</a>
				      </li>
				      <li>
				        <a href="/Kegiatan" class="block bg-white py-2 m-2 w-24 rounded-md shadow hover:text-gold">KEGIATAN</a>
				      </li>
				      <li>
				        <a href="/Produk" class="block bg-white py-2 m-2 w-24 rounded-md shadow hover:text-gold">PRODUK</a>
				      </li>
				    </ul>
				</div> --}}

                <li><a href="/Berita" class="m-2 block w-24 rounded-md bg-white py-2 shadow hover:text-gold">BERITA</a></li>

                <li><a href="/Kontak" class="m-2 block w-24 rounded-md bg-white py-2 shadow hover:text-gold">KONTAK</a></li>

                <li><a href="/AI-NOVAC" class="m-2 block w-24 rounded-md bg-gradient-to-br from-blue to-sky-800 py-2 font-semibold text-goldsec shadow hover:bg-gradient-to-tl hover:text-white transition-all duration-500">AI-NOVAC</a></li>
            </ul>

        </div>

        @yield('content')

        <div class="footer mt-5 flex w-full items-center justify-center rounded-tl-3xl rounded-tr-3xl bg-gold py-3 text-xs text-white shadow-md">

            <p>&copy 2023-{{ \Carbon\Carbon::now()->format('Y') }} ITRC - Institut Teknologi Sumatera</p>

        </div>
    </div>

    @stack('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>
