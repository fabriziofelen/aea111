<?php
$destino="fafecha555@gmail.com";
$nombre=$_Post["nombre"];
$nombre=$_Post["correo"];
$nombre=$_Post["telefono"];
$nombre=$_Post["nombre"];


$contenido="Nombre: " . $nombre . "\nCorreo" . $correo .  "\nTeléfono" . $telefono "Distrito" . $distrito ;

mail($destino,"Contacto",$contenido);


?>
