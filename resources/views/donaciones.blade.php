<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donaciones</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

 <!-- Stylesheet -->
            <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

<!-- Nav Bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-success p-3">
		<div class="container-fluid">
			<!-- Logo -->
	    	<a class="navbar-brand" href="{{ route('Inicio') }}">IYOLOSIWA</a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon"></span>
	    	</button>
	 
	    <div class=" collapse navbar-collapse" id="navbarNavDropdown">

	      	<ul class="navbar-nav ms-auto">
	        	<li class="nav-item">
	          		<a class="nav-link mx-2 active" aria-current="page" href="{{ route('Inicio') }}">INICIO</a>
	        	</li>
	        	<li class="nav-item">
	          		<a class="nav-link mx-2" href="{{ route('Nosotros') }}">NOSOTROS</a>
	        	</li>
	        	<li class="nav-item">
	          		<a class="nav-link mx-2" href="{{ route('Servicios') }}">SERVICIOS</a>
	        	</li>
	        	<li class="nav-item">
	          		<a class="nav-link mx-2" href="{{ route('Voluntariado') }}">VOLUNTARIADO</a>
	        	</li>
	        	<li class="nav-item">
	          		<a class="nav-link mx-2" href="{{ route('Donaciones') }}">DONACIONES</a>
	        	</li>
	        	<li class="nav-item">
	          		<a class="nav-link mx-2" href="{{ route('Contacto') }}">CONTACTO</a>
	        	</li>

	        	<!-- 
	        	<li class="nav-item dropdown">
	          		<a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            		Company
	          		</a>
	          		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	            		<li><a class="dropdown-item" href="#">Blog</a></li>
	            		<li><a class="dropdown-item" href="#">About Us</a></li>
	            		<li><a class="dropdown-item" href="#">Contact us</a></li>
	          		</ul>
	        	</li>
	        	-->
	      	</ul>

	      	<ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
	        	<li class="nav-item mx-2">
	          		<a class="nav-link h5" href="" target="blank"><i class=""></i>INICIAR SESION <ion-icon name="person"></ion-icon></a>
	        	</li>
	      	</ul>
	    </div>
	  	</div>
	</nav>



	<!-- galeria -->

	<main class="main">
	
		

		<section class="gallery">
			<figure class="gallery__picture gallery__picture--g1">
				<img src="{{ asset('img/1.jpg') }}" class="gallery__img">

	


			</figure>
		
			<figure class="gallery__picture gallery__picture--g2">
				<img src="{{ asset('img/2.jpg') }}" class="gallery__img">
			</figure>
		
			<figure class="gallery__picture gallery__picture--g3">
				<img src="{{ asset('img/3.jpg') }}" class="gallery__img">
			</figure>
		

			<figure class="gallery__picture gallery__picture--g4">
				<img src="{{ asset('img/4.jpg') }}" class="gallery__img">
			</figure>
		
			<figure class="gallery__picture gallery__picture--g5">
				<img src="{{ asset('img/5.jpg') }}" class="gallery__img">
			</figure>
		
			<figure class="gallery__picture gallery__picture--g6">
				<img src="{{ asset('img/6.jpg') }}" class="gallery__img">
			</figure>
		</section>
		

	</main>




<!-- Boxicons Link -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">



	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>