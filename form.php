<?php

//Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono'];

//Datos para el correo

$destinatario = "info@lacasadecallefrancia.com.ar";
$asunto = "Tenés una consulta desde la web!";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:enviado.html')

?>