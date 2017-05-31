<?php
	if(isset($_POST['inputName']) && $_POST['inputName'] != '' && isset($_POST['inputEmail']) && $_POST['inputEmail'] != '' && isset($_POST['inputPhone']) && $_POST['inputPhone'] != '' && isset($_POST['message']) && $_POST['message'] != ''){
		// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "gastonlevyg@gmail.com";
		$email_subject = "Consulta de la web";


		$message = "<table cellpading='0' cellspacing='0' border='0' width='550px' >";
		$message .= "<tr><td colspan='2'>";
		$message .= "<img src='http://jengibreteviste.com.ar/img/header-mail.jpg' alt='Consulta' title='Consulta' />";
		$message .= "</td></tr>";
		$message .= "<tr style='background-color: #f4f4f4;'><td width='125px' style='padding: 10px;'>";
		$message .= "NOMBRE";
		$message .= "</td><td style='padding: 10px;'>";
		$message .= $_POST['inputName'];
		$message .= "</td></tr>";
		$message .= "<tr style='background-color: #e5e5e5;'><td width='125px' style='padding: 10px;'>";
		$message .= "EMAIL";
		$message .= "</td><td style='padding: 10px;'>";
		$message .= $_POST['inputEmail'];
		$message .= "</td></tr>";
		$message .= "<tr style='background-color: #f4f4f4;'><td width='125px' style='padding: 10px;'>";
		$message .= "TELEFONO";
		$message .= "</td><td style='padding: 10px;'>";
		$message .= $_POST['inputPhone'];
		$message .= "</td></tr>";
		$message .= "<tr style='background-color: #e5e5e5;'><td width='125px' style='padding: 10px;'>";
		$message .= "MENSAJE";
		$message .= "</td><td style='padding: 10px;'>";
		$message .= $_POST['message'];
		$message .= "</td></tr></table>";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '. $email_to ."\r\n".
		"Content-Type: text/html; charset=UTF-8\r\n" .
		'Reply-To: '.$_POST['inputEmail']."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $message, $headers);

		header("Location:index.php?mailEnviado=si");
	}else{
		header("Location:index.php?mailEnviado=no");
	}
?>