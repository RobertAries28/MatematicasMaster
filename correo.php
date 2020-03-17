<?php 
  
  if (isset($_POST['enviar'])){
      if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){
          $nombre=$_POST['nombre'];
          $apellidos=$_POST['apellidos'];
          $correo=$_POST['correo'];
          $mensaje=$_POST['mensaje'];
          $header= "Form: robert_15_95@hotmail.com" . "\r\n";
          $header.= "Replay-To: robert_15_95@hotmail.com" . "\r\n";
          $header.= "X-Mailer: PHP/". phpversion();
          $mail($nombre,$apellidos,$correo,$mensaje,$header);
          if ($mail){
              echo "<h4>mail enviado exitosamente </h4>";
          }
        }
  }



?>