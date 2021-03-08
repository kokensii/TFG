<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
		<!-- favicon -->
		<!-- estilos -->
	</head>
	<body>
		<!-- header -->
		<!-- nav -->
		<div class="container">
		    @yield('content')
		</div>
		<!-- footer -->
		<!-- script -->
	</body>
</html>