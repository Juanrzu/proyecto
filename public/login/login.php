<?php
	include('./../connect.php');
	session_start();

	?>



	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="http://localhost/dashboard/Proyecto/src/css/styles.css">
		<title>Login</title>
	</head>
	<script src="http://localhost/dashboard/Proyecto/node_modules/flowbite/dist/flowbite.min.js"></script>
	<body class="bg-login" id="body">

		<div class="container-lg w-full max-w-7xl flex justify-center items-center h-full mx-auto">
			<main class=" w-full flex justify-center items-center p-8">

				<div class="container-login h-[35em] bg-white md:bg-[url(http://localhost/dashboard/Proyecto/src/wave-bg.png)] bg-no-repeat bg-center bg-cover w-full space-y-6 p-4 rounded-xl drop-shadow-2xl flex justify-center items-center flex-col md:flex-row">

				<div id="default-carousel" class="w-full relative hidden md:block" data-carousel="slide">
					<!-- Carousel wrapper -->
					<div class="relative w-full overflow-hidden rounded-lg md:h-96">
						<!-- Item 1 -->
						<div class="hidden duration-900 ease-in-out" data-carousel-item>
							<div class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 flex justify-center items-center flex-col x">

								<img src="http://localhost/dashboard/Proyecto/src/escudo.png" class="w-44" alt="...">
								<div class="container-text">
									<h2 class="w-full text-xl font-bold text-center text-pretty">E.P.N Cesar Arteaga Castro</h2>
								</div>
							</div>
						</div>
						<!-- Item 2 -->
						<div class="hidden duration-900 ease-in-out" data-carousel-item>
							<img src="http://localhost/dashboard/Proyecto/src/timeline.png" class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
						<!-- Item 3 -->
						<div class="hidden duration-900 ease-in-out" data-carousel-item>
							<img src="http://localhost/dashboard/Proyecto/src/3.png" class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
						</div>
					</div>
					<!-- Slider indicators -->
					<div class="absolute z-30 flex -translate-x-1/2 translate-y-10  bottom-5 left-1/2 space-x-3  rtl:space-x-reverse">
						<button type="button" class="bg-white w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
						<button type="button" class="bg-white w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
						<button type="button" class="bg-white w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
					</div>
					<!-- Slider controls -->
					<button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
						<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-800/30 group-hover:bg-gray-400 dark:group-hover:bg-gray-800/60 group-focus:ring-4">
							<svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
							</svg>
							<span class="sr-only">Previous</span>
						</span>
					</button>
					<button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
						<span class="inline-flex items-center justify-center w-10 h-10 rounded-full c-principal dark:bg-gray-800/30 group-hover:bg-gray-400 dark:group-hover:bg-gray-800/60 group-focus:ring-4">
							<svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
							</svg>
							<span class="sr-only">Next</span>
						</span>
					</button>
				</div>


					<form class="w-full max-w-md mx-auto bg-white p-8 rounded-lg shadow-md" id="formulario" method="POST">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">BIENVENIDO!</h2>
    
    <!-- Campo de Usuario -->
    <div class="mb-4">
        <label for="usuario" class="block text-sm font-medium text-gray-700 mb-2">Usuario</label>
        <div class="relative">
            <input name="usuario" type="text" id="usuario" placeholder="Ingrese su usuario" 
                class="w-full px-4 py-2 pl-3 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
        </div>
    </div>

    <!-- Campo de Contraseña -->
    <div class="mb-4">
        <label for="contraseña" class="block text-sm font-medium text-gray-700 mb-2">Contraseña</label>
        <div class="relative">
            <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" 
                class="w-full px-4 py-2 pl-3 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
        </div>
    </div>

    <!-- CAPTCHA mejorado -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Verificación CAPTCHA</label>
        <div class="flex items-center gap-3">
            <div class="flex-1 border rounded-md p-1 bg-gray-50">
                <img src="../captcha/captcha.php" class="w-full h-10 object-contain">
            </div>
            <button type="button" id="btn_recargar" class="p-2 text-gray-600 hover:text-blue-500 transition-colors rounded-md hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <input type="text" name="captcha" id="captcha" placeholder="Ingrese el código CAPTCHA" required
            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>

    <!-- Enlace de recuperación -->
    <div class="text-right mb-6">
        <a href="http://localhost/dashboard/Proyecto/public/login/acciones/recuperar_clave.php" 
            class="text-sm text-blue-600 hover:text-blue-800 transition-colors">¿Olvidó su contraseña?</a>
    </div>

    <!-- Botón de envío -->
    <button type="submit" name="registrar" id="btn" 
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
        Iniciar sesión
    </button>
</form>

				</div>
			</main>
		</div>
		
		<script>
			const form = document.getElementById('formulario');
			const btn = document.getElementById('btn');
			const usuario = document.getElementById('usuario');
			const contraseña = document.getElementById('contraseña');




			form.addEventListener("submit", (e) => {
				const regex = /^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*$/;
				var error = "";
				var msg = document.createElement("div");


				if (usuario.value == "" || contraseña.value == "") {
					error += `<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
                                            <svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
                                            <p class=" text-xs text-principal pb-1">Los campos no pueden estar vacios</p> 
                                            </div>`;
					usuario.classList.add('invalid');
					contraseña.classList.add('invalid');

				} else {
					if (!regex.test(usuario.value)) {
						error += `<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
                                            <svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
                                            <p class=" text-xs text-principal pb-1">ingrese un usuario con caracteres validos</p> 
                                            </div>`;
						usuario.classList.add('invalid')
					} else {
						usuario.classList.remove('invalid');
						usuario.classList.add('valid');

					}
				}



				if (usuario.classList.contains("invalid") || contraseña.classList.contains("invalid")) {
					msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">${error}</div>`;
					document.body.appendChild(msg);

					// Selecciona el elemento div que deseas eliminar
					var elemento = msg;

					// Configura el timeout para eliminar el div después de 5 segundos (5000 milisegundos)
					setTimeout(function() {
						msg = ""
						elemento.remove();
					}, 4000);



					e.preventDefault();
					e.stopPropagation();
				}
			})
		</script>
		<?php

if (isset($_POST['registrar'])) {
	// Obtener datos del formulario
	$usuario = $_POST['usuario'];
	$contraseña_ingresada = $_POST['contraseña'];
	$captcha_input = $_POST['captcha'];
	
	// Verificar si el usuario y la contraseña no están vacíos
	if (empty($usuario) || empty($contraseña_ingresada || empty($captcha_input))) {
		echo '<script>						
	var msg = document.createElement("div");

				msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
						<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
								<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
								<p class=" text-xs ghost pb-1">Los campos no pueden estar vacios</p> 
						</div>
				</div>`;

								var elemento = msg;
								setTimeout(function() {
									elemento.remove();
								}, 4000);
document.body.appendChild(msg);

</script>';
		exit(); // Detiene la ejecución del script si hay campos vacíos
	}
	// Verificar el captcha primero
	if ($captcha_input !== $_SESSION["captcha"]) {
		echo '<script>						
						var msg = document.createElement("div");
						msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
								<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
									<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
									<p class="text-xs ghost pb-1">Captcha no valido</p> 
								</div>
						</div>`;

								var elemento = msg;
								setTimeout(function() {
									elemento.remove();
								}, 4000);
								document.body.appendChild(msg);
						</script>'; exit;
			}
	//preparar seleccion datos de usuario

	$q = "SELECT * FROM usuario WHERE nombre_usuario = ?";
	$stmt = $connect->prepare($q);
	
	if (!$stmt) {
		die("Error al preparar la consulta: " . $connect->error);
	}
	$stmt->bind_param("s", $usuario);
	$stmt->execute();
	$result = $stmt->get_result();
	$array = $result->fetch_assoc();
	$stmt->close();

	//fin

	if ($array) {
		$usuario = $array['nombre_usuario'];
		$contraseña = $array['contraseña'];
		$estado = $array['estado'];
		$intentos_fallidos = $array['intentos_fallidos'];

		if (password_verify($contraseña_ingresada, $contraseña)) {

			if ($estado == "Inactivo") {
				echo '<script>						
						var msg = document.createElement("div");
						msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
								<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
									<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
									<p class="text-xs ghost pb-1">Este Usuario esta inactivo, contacte con el administrador</p> 
								</div>
						</div>`;

								var elemento = msg;
								setTimeout(function() {
									elemento.remove();
								}, 4000);
								document.body.appendChild(msg);
						</script>'; exit;
			}

			$_SESSION['nombre_usuario'] = $usuario;
			$intentos_fallidos = 0;

			//preparar actualizacion intentos fallidos
				$update_query = "UPDATE usuario SET intentos_fallidos = 0 WHERE nombre_usuario = ?";
				$stmt = $connect->prepare($update_query);

				if (!$stmt) {
					die("Error al preparar la consulta: " . $connect->error);
				}

				$stmt->bind_param("s", $usuario);
				$stmt->execute();
				$stmt->close();
				echo "<script> window.location='http://localhost/dashboard/Proyecto/public/display.php'</script>";


			//fin

			//preparar insersion inicio de sesion en bitacora
			
				$accion = "Se ha iniciado la sesión";
			
				$sql2 = "INSERT INTO bitacora (accion, usuario) VALUES (?, ?)";
				$stmt = $connect->prepare($sql2);

				if (!$stmt) {
					die("Error al preparar la consulta: " . $connect->error);
				}

				$stmt->bind_param("ss", $accion, $usuario);
				$resultInsert2 = $stmt->execute();

				if (!$resultInsert2) {
					die("Error al ejecutar la consulta: " . $stmt->error);
				}

				$stmt->close();
				die();

			//fin
		}
		if ($estado == "Inactivo") {
			echo '<script>						
	var msg = document.createElement("div");

				msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
						<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
								<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
								<p class=" text-xs ghost pb-1">Este Usuario esta desactivado</p> 
						</div>
				</div>`;
								var elemento = msg;
								setTimeout(function() {
									elemento.remove();
								}, 4000);
document.body.appendChild(msg);
</script>'; exit;

		} else {
			$intentos_fallidos++;
			if ($intentos_fallidos >= 3) {
				//preparar sentencia
				$update_query = "UPDATE usuario SET estado = ?, intentos_fallidos = ? WHERE nombre_usuario = ?";
				$stmt = $connect->prepare($update_query);

				if (!$stmt) {
					die("Error al preparar la consulta: " . $connect->error);
				}

				$cambiarEstado = "Inactivo";
				$intentos_fallidos = 0;
				$stmt->bind_param("sis", $cambiarEstado, $intentos_fallidos, $usuario);
				if ($stmt->execute()) {
				} else {
					die("Error al ejecutar: " . $stmt->error);
				}

				$stmt->close();
				//fin

				echo '<script>						
								var msg = document.createElement("div");

											msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
													<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
															<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
															<p class=" text-xs ghost pb-1">Ya ha usado muchos intentos. Usuario bloqueado, contacte con el administrador</p> 
													</div>
											</div>`;
															var elemento = msg;
															setTimeout(function() {
																elemento.remove();
															}, 4000);
							document.body.appendChild(msg);
						</script>'; 
						exit;
			} else {
				echo '<script>						
								var msg = document.createElement("div");

											msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
													<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
															<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
															<p class=" text-xs ghost pb-1">La contraseña es incorrecta</p> 
													</div>
											</div>`;
															var elemento = msg;
															setTimeout(function() {
																elemento.remove();
															}, 4000);
							document.body.appendChild(msg);
						</script>'; 
						
			}
			//Preparar actualizacion del número de intentos fallidos en la base de datos
			
				$update = "UPDATE usuario SET intentos_fallidos = ? WHERE nombre_usuario = ?";
				$stmt = $connect->prepare($update);

				if (!$stmt) {
					die("Error al preparar la consulta: " . $connect->error);
				}

				$stmt->bind_param("is", $intentos_fallidos, $usuario);

				if ($stmt->execute()) {
				} else {
					die("Error al ejecutar: " . $stmt->error);
				}

				$stmt->close();
			//fin
		}
	} else { // Usuario no encontrado
		echo '<script>						
	var msg = document.createElement("div");

				msg.innerHTML = `<div class="fixed bottom-12 right-2 fixed bottom-12 right-2 mt-2 px-2 py-4 text-center bg-indigo-500 rounded-xl">
						<div class=" flex justify-start items-center border-b-2 border-gray-300 pb-2">
								<svg fill="#f00505" width="40px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#f00505" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-round</title> <path d="M0 16q0 3.264 1.28 6.208t3.392 5.12 5.12 3.424 6.208 1.248 6.208-1.248 5.12-3.424 3.392-5.12 1.28-6.208-1.28-6.208-3.392-5.12-5.088-3.392-6.24-1.28q-3.264 0-6.208 1.28t-5.12 3.392-3.392 5.12-1.28 6.208zM4 16q0-3.264 1.6-6.016t4.384-4.352 6.016-1.632 6.016 1.632 4.384 4.352 1.6 6.016-1.6 6.048-4.384 4.352-6.016 1.6-6.016-1.6-4.384-4.352-1.6-6.048zM9.76 20.256q0 0.832 0.576 1.408t1.44 0.608 1.408-0.608l2.816-2.816 2.816 2.816q0.576 0.608 1.408 0.608t1.44-0.608 0.576-1.408-0.576-1.408l-2.848-2.848 2.848-2.816q0.576-0.576 0.576-1.408t-0.576-1.408-1.44-0.608-1.408 0.608l-2.816 2.816-2.816-2.816q-0.576-0.608-1.408-0.608t-1.44 0.608-0.576 1.408 0.576 1.408l2.848 2.816-2.848 2.848q-0.576 0.576-0.576 1.408z"></path></g></svg>
								<p class=" text-xs ghost pb-1">Este Usuario no existe</p> 
						</div>
				</div>`;
								var elemento = msg;
								setTimeout(function() {
									elemento.remove();
								}, 4000);
document.body.appendChild(msg);
</script>'; exit;
	}
}


$nombre = isset($_POST['nombre']) ? $_POST['nombre'] :'';
$nombre = isset($_POST['codigo ']) ? $_POST['codigo'] :'';

if($nombre== '' || $codigo = ''){
	echo "Debe llenar todos los datos del captcha";
	exit();
}

$captcha = sha1($codigo);

if($codigoverificacion != $captcha){
	$_SESSION['codigo_verificacion'] = '';
	echo "El código de verificacion es incorrecto";
	exit();
}


?> 


	</body>
	</html>