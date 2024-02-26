<?php

extract($_REQUEST);  // Convierte los indices en variables de un array asociativo

if (isset($nombre) && !empty($nombre) && isset($email) && !empty($email)) {
    // $sexo = isset($sexo) ? $sexo : 'sin saber';

    // if (isset($sexo)) {
    //     echo "Hola $nombre $apellido, tienes $edad años y eres un $sexo. Tu email es $email y tu tlf $telefono";
    // } else {
    //     echo "Hola $nombre $apellido, tienes $edad años. Tu email es $email y tu tlf $telefono";
    // }

    echo ("Nombre: $nombre <br>") ;
    echo ("Apellido: $apellido <br>"); 
    echo ("Edad: $edad <br>");
    echo ("Sexo: $sexo <br>");
    echo ("Email: $email <br>");
    echo ("Teléfono: $telefono <br>");

} else {
    echo 'Hay campos obligatorios sin cubrir';
    // die('Permisos insuficientes');
}

echo "<a href='./'> Volver </a>";
