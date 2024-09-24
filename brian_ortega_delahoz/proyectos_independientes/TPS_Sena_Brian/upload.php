
<?php

// Comprobar si se ha cargado un archivo
if (isset($_FILES['archivo'])) {
    extract($_POST);
    $nombre_est = $_POST['nombre_est'];
    $apellido_est = $_POST['apellido_est'];
    $descripcion = $_POST['descripcion'];

    // Definir la carpeta de destino
    $carpeta_destino = "c:\Users\ANDRESZZXX\Downloadss";

    // Obtener el nombre y la extensión del archivo
    $nombre_archivo = basename($_FILES["archivo"]["name"]);

    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

    
    // Validar la extensión del archivo
    if ($extension == "pdf" || $extension == "doc" || $extension == "docx") {

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino . $nombre_archivo)) {
            // Insertar la información del archivo en la base de datos
            include "db.php";
            $stmt = $conexion->prepare("INSERT INTO documento (nombre_est, apellido_est, descripcion, archivo) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nombre_est, $apellido_est, $descripcion, $nombre_archivo);
            
            $stmt->execute();
            $resultado = $stmt->get_result();
            if ($resultado) {
                echo "<script language='JavaScript'>
                alert('Archivo Subido');
                location.assign('files.php');
                </script>";
            } else {
                echo "<script language='JavaScript'>
                alert('Error al subir el archivo: ');
                location.assign('files.php');
                </script>";
            }
        } else {
            echo "<script language='JavaScript'>
           alert('Error al subir el archivo. ');
           location.assign('files.php');
           </script>";
        }
    } else {
        echo "<script language='JavaScript'>
       alert('Solo se permiten archivos PDF, DOC y DOCX.');
       location.assign('files.php');
       </script>";
    }
}