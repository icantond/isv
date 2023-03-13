<?php
require "../PHPmailer/PHPmailer.php";
require "../PHPMailer/Exceptions.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$codigo_area = $_POST["codigo-area"];
$celular = $_POST["celular"];
$mensaje = $_POST["mensaje"];

$mensaje_web_enfermeria = "Este mensaje fue enviado desde el formulario de contacto de ISV/Enfermeria por $nombre \n";
$mensaje_web_enfermeria .= "Correo electrónico $email  \n";
$mensaje_web_enfermeria .= "Teléfono de contacto " . $codigo_area . $celular . "\r\n";
$mensaje_web_enfermeria .= "Mensaje:  $mensaje";


$destinatario = "m_ar23@hotmail.com";
$asunto = "Mensaje Formulario ISV Enfermeria";
    
mail($destinatario, $asunto, $mensaje_web_enfermeria, $header);
header("Location:exito.html");

$mailer = new PHPMailer();
var_dump($mailer);
?>