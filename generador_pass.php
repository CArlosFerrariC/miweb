<?php
$longitud = 12; //logitud de la contraseña
$caracteres_permitidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

function generar_password($longitud, $caracteres_permitidos){
    $password = '';
    $max_index = strlen($caracteres_permitidos)-1;

    for ($i = 0; $i < $longitud; $i++){
        $password .= $caracteres_permitidos[random_int(0, $max_index)];
    }
    return $password;
}

echo 'Contraseña generada: '. generar_password($longitud,$caracteres_permitidos);

?>


