<?php 
    $destino = "legallaisgonzalo@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];
    $contenido = "nombre: ". $nombre . "\nemail: " . $email . "\nnumero " .$numero . "\nmensaje " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header("location:index.html");
  ?>