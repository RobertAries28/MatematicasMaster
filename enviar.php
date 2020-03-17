<?php 
  $destino= "robert_15_95@hotmail.com";
  $nombre= $_POST["nombre"];
  $apellidos= $_POST["apellidos"];
  $correo= $_POST["correo"];
  $mensaje= $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nApellidos: " . $apellidos . "\nCorreo: " .$correo . "\nMensaje: " . $mensaje;
  mail($destino,"Contacto",$contenido);
  header("Location:gracias.html");




?>