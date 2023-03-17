<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

//obtener campos de formulario

$correo = $_POST['email'];

$nombre = $_POST['name'];

$apellido = $_POST['last-name'];

$codigo_area = $_POST['codigo-area'];

$telefono = $_POST['celular'];

$mensaje = $_POST['message'];


try {

	$mail = new PHPMailer(true); //Nueva instancia, con las excepciones habilitadas

	$mail->IsMail();                           // Usamos el metodo SMTP de la clase PHPMailer

	$mail->SMTPAuth   = true;                  // habilitado SMTP autentificación

	$mail->Port       = 587;                    // puerto del server SMTP

	$mail->Host       = "smtp.hostinger.com"; // SMTP server

	$mail->From       = "info@isv.com.ar"; //Remitente de Correo

	$mail->FromName   = "Contacto ISV"; //Nombre del remitente

	$to = "info@isv.com.ar"; //Para quien se le va enviar

	$mail->AddAddress($to);

	$mail->Subject  = "Contacto desde isv.com.ar"; //Asunto del correo

        $mail->msgHTML("
        <p>Mensaje de contacto web</p>
        <p>Nombre: {$nombre}  </p>
        <p>Apellido: {$apellido}</p>
        <p>Telefono: {$codigo_area} {$telefono}</p>
        <p>Mensaje: {$mensaje}  </p>
        <p>Correo Electronico: {$correo}  </p>
        ");

	$mail->IsHTML(true); // Enviar como HTML

	$mail->Send();//Enviar

	header("Location: index.html?message=success");
exit;
;

} catch (phpmailerException $e) {

	header("Location: index.html?message=error");
exit; //Mensaje de error si se produciera.
}

?>