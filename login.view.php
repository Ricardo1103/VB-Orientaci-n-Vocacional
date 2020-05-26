<!DOCTYPE html>
<!--Corral López Neri Jaquelin-->
	<html lang="en"> <!-- Se abre la etiqueta de html y se declara el lenguaje en español -->
	<head>
		<meta charset="UTF-8"><!-- Meta charset se utiliza para aseguraarnos que el navegador conocerá la codificación de 
						   caracteres utilizada antes de que comience a procesar nada -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- Permite definir el ancho, alto y escala del área usada por el navegador para mostrar contenido  -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Especifica el enlace a una de estilo externa -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/formulario.css">
		<title>Iniciar Sesión</title>
	</head>
	<body>
		<!-- Se abre la etiqueta de div con el atrubuto contenerdor que permite establecer un ancho
    	maximo concreto para el contenedor según el tamaño de la página-->
		<div class="contenedor">
			<h1 class="titulo">Iniciar Sesión</h1> <!--Esta etiqueta establece el título de la página -->
			<h2 class="subtitulo">VB Orientación vocacional</h2> <!--Esta etiqueta establece el subtítulo de la página -->
		
			<hr class="border"> <!-- Se abre la etiqueta de hr funciona como separador-->

			<!-- Se crea un formulario--> 
			<form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group"> <!-- Se abre la etiqueta de div con el atriburo de form-group -->
					<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
					<!-- Se crea el campo para el usuario -->
				</div>

				<div class="form-group"> <!-- Se abre la etiqueta de div con el atriburo de form-group -->
					<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Password">
					<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> <!-- Se crea el campo para la contraseña -->
				</div>

				<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
				<?php if(!empty($errores)): ?> <!-- Se abre php if para vefificar que la variable haya sido declarada -->
					<div class="error">
						<ul>
							<?php echo $errores; ?> <!-- En esta parte se verifica que no haya errores -->
						</ul>
					</div>
				<?php endif; ?>
			</form>

			<p class="texto-registrate">
				¿ Aun no tienes cuenta ?
				<a href="registrate.php">Regístrate</a> <!-- Se abre un anclaje con una dirección de URL-->
			</p>

		</div>
	</body>
</html>