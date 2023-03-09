<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$codigo_area = $_POST["codigo-area"];
$celular = $_POST["celular"];
$mensaje = $_POST["mensaje"];

$mensaje_web_enfermeria = "Este mensaje fue enviado desde el formulario de contacto de ISV/Enfermeria por " . $nombre . ",\r\n";
$mensaje_web_enfermeria . = "Correo electrónico " .$email . "\r\n";
$mensaje_web_enfermeria . = "Teléfono de contacto " . $codigo_area . $celular . "\r\n";
$mensaje_web_enfermeria . = "Mensaje: " . $mensaje . "\r\n";
$mensaje_web_enfermeria . = "Enviado el " . date(d/m/Y, time());

$destinatario = "cantondebat@outlook.com";
$asunto = "Mensaje Formulario ISV Enfermeria";

mail($destinatario, $asunto, utf8_decode($mensaje_web_enfermeria), $header);
header("Location:exito.html");

?>

