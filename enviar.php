 <?php
/*Correo*/
$destinatario = 'nightstaroficial18@gmail.com';
/*variables*/
$nombre = $_POST["nombre"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$email = $_POST["email"];

$header = "Enviado desde la pagina xd";
$carta = "De : $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta, $header);
echo "<scrip>('Correo enviado exitosamente')</scrip>";
echo "<scrip> setTimeout(\"location.hreft='index.html'\",1000) </scrip>";

?>
