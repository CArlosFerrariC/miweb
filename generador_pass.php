<?php
$longitud = 12; // Longitud de la contraseña
$caracteres_permitidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

function generar_contrasena_y_max_index($longitud, $caracteres) {
    $contrasena = '';
    $max_index = strlen($caracteres) - 1;

    for ($i = 0; $i < $longitud; $i++) {
        $contrasena .= $caracteres[random_int(0, $max_index)];
    }

    return array('contrasena' => $contrasena, 'max_index' => $max_index);
}

// Obtener la contraseña y el max_index
$resultado = generar_contrasena_y_max_index($longitud, $caracteres_permitidos);

// Mostrar los resultados
echo '<h1>Muestra la variable max_index</h1>' . $resultado['max_index'];
echo '<br>Contraseña generada: ' . $resultado['contrasena'];
?>



