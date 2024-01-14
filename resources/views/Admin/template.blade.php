<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $page }} | {{ env('APP_NAME') }}</title>

	<link rel="icon" href="{{ asset('storage/ITERA.ico') }}">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />

	<script src="https://cdn.tailwindcss.com"></script>
	<script>
	tailwind.config = {
		theme: {
			extend: {
				colors: {
					red: '#AD0000',
					gold: '#D0AD50',
				}
			},
			fontFamily: {
				'poppins': 'Poppins, sans-serif',
			}
		}
	}
	</script>
</head>
<body class="font-poppins">

	@yield('content')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>
</html>