<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <title>Configuración Sistema Domótico - Fin</title>
</head>
<html>
<div class="out">
	<div class="in">
		<h1>¡ Configuración terminada !</h1>
		<?php
			$off_AP = shell_exec('python /home/pi/Desktop/ClientDomoticControlSystem/SafeDomotic/ControladorAP.py off');

			$connect = shell_exec('python /home/pi/Desktop/ClientDomoticControlSystem/SafeDomotic/WiFi_Checker.py');

			exec('reboot');
		?>
	</div>
</div>
</html>
