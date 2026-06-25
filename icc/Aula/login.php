<?php  

require_once '../includes/scrips.php';

?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<title>Login</title>
</head>
<body>
	<form action="logica/logeo.php" method="POST">
		<div class="flex items-center min-h-screen p-6 login bg-gray-900">
			<div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden rounded-lg shadow-xl bg-gray-900">
				<div class="flex flex-col overflow-y-auto md:flex-row">
					<div class="h-32 md:h-auto md:w-1/2">
						<img src="../assets/img/logis1.jpg" alt="Office" aria-hidden="true" class="object-cover w-full h-full dark:hidden">
						<img src="../assets/img/logis1.jpg" alt="Office" aria-hidden="true" class="hidden object-cover w-full h-full dark:block">
					</div>
					<div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
						<div class="w-full">
							<h1 class="mb-4 text-4xl font-semibold text-white text-white">Hola, Bienvenido!</h1>
							<label class="block text-sm">
								<h3 class="text-white dark:text-white">Usuario</h3>
								<input type="text" name="usuario" placeholder="Ingresa Usuario" class="block w-full mt-1 text-sm border-gray-600 bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple text-gray-300 focus:shadow-outline-gray form-input">
							</label>
							<label class="block mt-4 text-sm">
								<h3 class="text-white text-white">Contraseña</h3>
								<input type="password" name="password" class="block w-full mt-1 text-sm border-gray-600 bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple text-gray-300 dark:focus:shadow-outline-gray form-input">
							</label>
							<!-- button -->
							<button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-700 border border-transparent rounded-lg active:bg-slate-500 hover:bg-slate-500 focus:outline-none focus:shadow-outline-purple">Entrar a mi Cuenta </button>
							<hr class="my-8" />
							<a class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-white text-white transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray" href="https://www.facebook.com/icc.com.pe" target="_black">
								<svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
									<path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
								</svg>
								Facebook
							</a>
							<a class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white text-white text-white transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray" href="https://www.instagram.com/capacitacionesicc" target="_black">
								<svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
									<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
								</svg>
								Instagram
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	
</body>
</html>