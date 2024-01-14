@extends('General.Template')

@section('content')
<div class="w-full min-h-screen">

	<div id="sejarah">
		
		<div class="judul w-full flex items-center justify-center bg-red text-white text-xl font-bold p-0.5 cursor-default">
			<h2>SEJARAH</h2>
		</div>

		<div class="flex flex-wrap-reverse sm:flex-nowrap justify-center m-5">

			<p class="text-justify my-3">Pusat Riset Teknologi Cerdas ITERA (Intelligent Technology Research Center ITERA), atau disingkat sebagai ITRC, merupakan pusat riset dan inovasi yang berada di bawah manajemen Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM) Institut Teknologi Sumatera (ITERA). ITRC memiliki fokus dalam penyelenggaraan program riset dan inovasi yang meliputi perumusan kegiatan, supervisi, konsultasi, pelatihan, penelitian terkait bidang teknologi cerdas. ITRC disahkan terbentuk pada tanggal 2 November 2022 melalui Surat Keputusan Rektor Institut Teknologi Sumatera Nomor 2389/IT9.A/KP.09.00/2022.</p>

			<img src="{{ asset('storage/Assets/Profil.jpeg') }}" class="sm:w-5/12 sm:ml-3 my-3">
			
		</div>

	</div>

	<div id="visidanmisi">
		
		<div class="judul w-full flex items-center justify-center bg-red text-white text-xl font-bold p-0.5 cursor-default">
			<h2>VISI DAN MISI</h2>
		</div>

		<div class="m-5 flex flex-col items-center">
			<h3 class="text-red font-bold">VISI</h3>
			<p class="text-center">"ITRC ITERA menjadi pelopor pengembangan sumber daya manusia dan teknologi di bidang teknologi cerdas melalui kerjasama dengan akademisi, industri, dan pemerintah untuk berinovasi, mencipta dan membangun Pulau Sumatera menjadi pulau yang cerdas dan maju (smart and developed island)"</p>
		</div>

		<div class="m-5 flex flex-col items-center">
			<h3 class="text-red font-bold">MISI</h3>
			<p class="text-justify"><span class="font-bold">1. Joint Talent</span> → Berfokus pada pencarian dan pengembangan Bakat dan Teknologi di bidang teknologi cerdas;<br><span class="font-bold">2. Collaboration</span> → Membangun dan membuka peluang kerjasama kepada Institusi Pendidikan, Industri dan Pemerintah;<br><span class="font-bold">3. Innovative & Attractive</span> → Strategi ITRC yang diatur di sekitar laboratorium untuk membangun teknologi cerdas yang Inovatif dan Menarik, melalui penerapan machine learning, smart robotics, computer visions, smart cybersecurity, artificial intelligence of things (AIoT), dan lainnya;<br><span class="font-bold">4. Distributing Knowledge</span> → Menyelenggarakan pelatihan berkaitan dengan intelligent technology dan penerapannya untuk mendukung pendistribusian Intelligent Technology-Knowledge.</p>
		</div>

	</div>	

</div>
@endsection