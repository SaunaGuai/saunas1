<?php 

	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['apellido']) && !empty($_POST['apellido']) &&
		isset($_POST['email']) && !empty($_POST['email']) &&
		isset($_POST['message']) && !empty($_POST['message'])) {
		# code...
		$destino = "saunasguai@gmail.com";
		$desde = "From:". "Saunas Guai";
		$asunto = $_POST['asunto'];
		$message= $_POST['message'];
		mail($destino, $asunto, $message, $desde);
		echo "Correo enviado";
	}
	else{
		echo "Problemas al enviar";
	}

 ?>