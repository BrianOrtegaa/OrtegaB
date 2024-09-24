<?php

include "db.php";


if (isset($_GET['id_act'])) {
    $actividades = $_GET['id_act'];

    $sql = "SELECT * FROM actividades WHERE id_act = '$actividades'";
$resultado = mysqli_query($conexion, $sql);


if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_assoc($resultado);
    if (array_key_exists('file_act', $row)) {
    $file_act = $row['file_act'];
    $ruta_archivo = "c:/Users/GAMER-PRO/Downloads/" . $file_act;

    // Verificar que el archivo exista en el servidor
    if (file_exists($ruta_archivo)) {
        // Enviar el archivo al navegador
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_act . '"');
        readfile($ruta_archivo);
    } else {
        echo "El archivo no existe en el servidor.";
        echo $ruta_archivo;

    }
} else {
    echo "El archivo no se encontró en la base de datos.";
}

} else {
    echo "ID no proporcionado.";
}



// Buscar el archivo en la base de d 
}