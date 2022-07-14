<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>@yield('title')</title>
		
		<link rel="stylesheet" href="{{ asset('css/estiloForm.css') }}">
		<link rel="stylesheet" href="{{ asset('css/navBar2.css') }}">
		<link rel="stylesheet" href="{{ asset('css/comprar.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel=”stylesheet” href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		<!--boxicons-->
		<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
		@include('sweet::alert')
		<script src="{{ asset('js/navbarScript.js') }}" defer></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		
		<!-- favicon -->
		<!-- estilos -->
	</head>
	<body>
		<!-- header -->
		<!-- nav -->
		@include('sweetalert::alert')
		<nav class="navbar">
			<div>
				<a href="{{ route('user.index')}}" class="brand-title">{{ __('Cromitos') }}</a>
			</div>
			<label for="btn" class="icon">
				<span class="fa fa-bars"></span>
			</label>
			<input type="checkbox" id="btn" style="display: none;">
				<ul>
					@guest
						<li><a href="{{route('login')}}">{{__('Login')}}</a></li>
						@if(Route::has('register'))
							<li><a href="{{route('register')}}">{{__('Register')}}</a></li>
						@endif  
					@else
						@if(Auth::user()->type == "admin")
							<li>
								<label for="btn-1" class="show">Listas →</label>
								<a href="#">Listas</a>
								<input type="checkbox" id="btn-1">
								<ul>
									<li><a href="{{ route('team.showAll') }}">Equipos</a></li>
									<li><a href="{{ route('card.showAll') }}">Cromos</a></li>
									<li><a href="{{ route('question.showAll') }}">Preguntas</a></li>
									<li><a href="{{ route('round.showAll') }}">Jornadas</a></li>
								</ul>
							</li>
							<li>
								<label for="btn-2" class="show">Añadir →</label>
								<a href="#">Añadir</a>
								<input type="checkbox" id="btn-2">
								<ul>
									<li><a href="{{route('team.create')}}">Equipo</a></li>
									<li><a href="{{route('card.create')}}">Cromo</a></li>
									<li><a href="{{route('question.create')}}">Pregunta</a></li>
									<li><a href="{{route('round.create')}}">Jornada</a></li>
								</ul>
							</li>
							<li>
								<label for="btn-3" class="show">{{ Auth::user()->name }} →</label>
								<a href="#">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<input type="checkbox" id="btn-3">
								<ul class="dropdown-menu mr-auto" aria-labelledby="navbarDropdownMenuLink">
									<li>
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Cerrar sesión') }}
										</a>
										
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
									<li>
										<a href="{{ route('profile', Auth::user()) }}">
											{{ __('Mi perfil') }}
										</a>
									</li>
								</ul>
							</li>
						@else
							<li>
								
								<a href="{{ route('questionUser.answer') }}"><i class='bx bx-question-mark' style="color: #e71b0de5"></i> Preguntas</a>
									
								
							</li>
							<li>
								<a href="{{ route('round.isBetDone') }}"><i class='bx bx-pencil' style="color: #e00ae7"></i> Porra</a>
							</li>
							<li>
								<label for="btn-4" class="show">Cromos</label>
								<a href="#">
									<i class='bx bx-photo-album' style="color: #26e90cd3"></i> Cromos <span class="caret"></span>
								</a>
								<input type="checkbox" id="btn-4">
								<ul class="dropdown-menu mr-auto" arial-labellebdy="navbarDropdownMenuLink">
									<li>
										<a href="{{ route('card.vistaComprar') }}">Comprar</a>
									</li>
									<li>
										<a href="#">Cambiar</a>
									</li>
									<li>
										<a href="{{ route('repetido.lista') }}">Repetidos</a>
									</li>
									<li>
										<a href="{{ route('card.index') }}">Listado</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class='bx bx-coin-stack' style="color: #e9d30c"></i> {{ Auth::user()->coin }} monedas</a>
							</li>
							<li>
								<label for="btn-3" class="show">{{ Auth::user()->name }} →</label>
								<a href="#">
									<i class='bx bx-user' style="color: #f18d09"></i> {{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<input type="checkbox" id="btn-3">
								<ul class="dropdown-menu mr-auto" aria-labelledby="navbarDropdownMenuLink">
									<li>
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Cerrar sesión') }}
										</a>
										
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
									<li>
										<a href="{{ route('profile', Auth::user()) }}">
											{{ __('Mi perfil') }}
										</a>
									</li>
								</ul>
							</li>
						@endif
					@endguest
				</ul>
			
		</nav>

		<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{ route('team.create')}}">Añadir team</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{ route('card.create')}}">Añadir card</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{ route('question.create')}}">Añadir pregunta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{ route('round.create')}}">Añadir round</a>
						</li>
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
				  <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  Dropdown
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <li><a class="dropdown-item" href="#">Action</a></li>
					  <li><a class="dropdown-item" href="#">Another action</a></li>
					  <li><hr class="dropdown-divider"></li>
					  <li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>

				</ul>
				<form class="d-flex">
				  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			  </div>
			</div>
		  </nav>-->
		<div class="wrapper">
		    @yield('content')
		</div>
		<!-- footer -->
		<!-- script -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>