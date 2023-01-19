<?php
    $Destino = "jovanylm23@gmail.com";
    $Nombre = $_POST["name"];
    $Correo = $_POST["email"];
    $Mensaje = $_POST["message"];

    $Contenido = "Nombre: " . $Nombre . "\n Correo: " . $Correo . "\n Mensaje: " . $Mensaje;

    mail($Destino, "Contacto", $Contenido);
?>