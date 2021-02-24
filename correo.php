<?php

$if (isset($_post)['enviar']) {
	if (!empty($_post)['nombre']) && !empty($_post ['apellido_p']) && !empty($_post ['apellido_m']) && !empty($_post ['fecha_n']) && !empty($_post ['genero']) && !empty($_post ['profesion']) && !empty($_post ['estado']) && !empty($_post ['comentarios']) {
		$nombre = $_post ['nombre'];
		$apellido_p = $_post ['apellido_p'];
		$apellido_m = $_post ['apellido_m'];
		$fecha_n = $_post ['fecha_n'];
		$genero = $_post ['genero'];
		$profesion = $_post ['profesion'];
		$estado = $_post ['estado'];
		$comentarios = $_post ['comentarios'];
		$header = "from: suzukiakiro26@gmail.com"; ."\r\n";
		$header. = "from: suzukiakiro26@gmail.com"; ."\r\n";
		$header. = "x-mailer: php/". phpversion();
		$mail = mail($correo, $nombre, $apellido_p, $apellido_m, $fecha_n, $genero, $profesion, $estado, $comentarios, $header, ¡Enviado existosamente!)
		
	}
  }	
}

?>