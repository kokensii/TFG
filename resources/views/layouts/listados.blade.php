<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>@yield('title')</title>
		
		<link rel="stylesheet" href="{{ asset('css/estiloForm.css') }}">
		<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<script src="{{ asset('js/navbarScript.js') }}" defer></script>
		
		<!-- favicon -->
		<!-- estilos -->
	</head>
	<body>
		<!-- header -->
		<!-- nav -->
		
		<nav class="navbar">
			<div class="brand-title">Cromitos</div>
			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="navbar-links">
				<ul>
					@guest
						<li><a href="{{route('login')}}">{{__('Login')}}</a></li>
						@if(Route::has('register'))
							<li><a href="{{route('register')}}">{{__('Register')}}</a></li>
						@endif  
					@else
						<li><a href="{{route('team.create')}}">Añadir equipo</a></li>
						<li><a href="{{route('cromo.create')}}">Añadir cromo</a></li>
						<li><a href="{{route('question.create')}}">Añadir pregunta</a></li>
						<li><a href="{{route('jornada.create')}}">Añadir jornada</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
							  <ul class="dropdown-menu mr-auto" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
								<a class="dropdown-item" href="{{ route('profile', Auth::user()) }}">
									{{ __('My profile') }}
								</a>
							  </ul>
						</li>
					@endguest
				</ul>
			</div>
		</nav>

		
		<div class="wrapper">
		    @yield('content')
		</div>
		<!-- footer -->
		<!-- script -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>