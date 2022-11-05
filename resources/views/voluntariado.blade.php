<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntariado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Stylesheet -->
            <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

<!-- Barra de navegacion -->

	<header>
			<nav class="contenedor ">
				<div class="logo">
					<img src="{{ asset('img/Logo.png') }}">
				</div>
			
				<div class="enlaces p-3">
					<a href="{{ route('Inicio') }}">Inicio</a>
					<a href="#dos">Nosotros</a>
					<a href="#tres">Servicios</a>
					<a href="#cuatro">Voluntariado</a>
					<a href="#cinco">Donaciones</a>
					<a href="#seis">Contacto</a>  
				</div>
				<div >
					<a  href="#seis">Sesión</a>
				</div>
		
				<div class="hamburguesa">
					<img src="{{ asset('img/menu32px.png') }}" id="hamburguesa">
				</div>
			</nav>
	</header>


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




<!-- Videos -->


	
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script type="text/javascript">

			//modal
				const myModal = document.getElementById('myModal')
					const myInput = document.getElementById('myInput')

					myModal.addEventListener('shown.bs.modal', () => {
					  myInput.focus()
					})




    	const enlaces = document.getElementsByClassName("enlaces ")[0];
    	const hamburguesa = document.getElementsByClassName("hamburguesa")[0];
    	const menuHamburguesa = document.getElementById("hamburguesa")
    	let abierto = false;


    	const toggleMenu = () =>{
    		enlaces.classList.toggle("enlaces2");
    		enlaces.style.transition = "transform 0.5s ease-in-out";
    	}

    	hamburguesa.addEventListener("click", function(){
    		toggleMenu();
    		if(document.querySelector(".enlaces.enlaces2")){
    			abierto=true;
    		}else{
    			abierto=false;
    		}
    	})

    	window.addEventListener("click", function(e){
    		this.console.log(e.target)
    		if (abierto){
    			if(e.target !== menuHamburguesa){
    				toggleMenu();
    				abierto=false;
    			}
    		}
    	})

    	window.addEventListener("resize", function(){
    		if (screen.width > 1350){
    			if(abierto){
    				toggleMenu();
    				enlaces.style.transition = "none";
    				abierto= false;
    			}
    		}
    	})

    </script>
</body>
</html>