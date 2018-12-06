<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
	    <title>Configuración Sistema Domótico - Inicio</title>
	</head>
	<body>
		<div class="out">
			<div class="in">
				<?php
					$nombre_archivo = "WifiConnect.cfg";

					if(file_exists($nombre_archivo)){
						?>
						<h2>¡ Hola de nuevo !</h2>
						<p>Usted ya tiene una red wifi configurada para este dispositivo, ¿Desea cambiarla?</p>
						<form action="register.php" method="post">
							<input type="submit" value="Si">
						</form>
						<form action="end.php" method="post">
							<input type="submit" value="No">
						</form>
						<?php
					}else{
						?>
						<h2>¡ Bienvenido !</h2>
						<h3>Acaba de acceder a la web su nuevo sistema de control domótico.<br><br>
						Si pulsa el botón 'Comenzar' verá un formulario que debe completar con las credenciales de<br><br>
						conexión a su red WiFi. De este modo usted podrá comunicarse con el sistema desde cualquier<br><br>
						lugar. También deberá introducir un código de verificación que enconetrará en su Gatewa<br><br>
						identificado con las siglas 'CV'.<h3>
						<form action="register.php" method="post">
							<input type="submit" value="Comenzar">
						</form>
						<?php
					}
				?>
			<div>
		</div>
	</body>
</html>
