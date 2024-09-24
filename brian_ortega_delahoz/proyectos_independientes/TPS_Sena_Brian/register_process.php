<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_id = $_POST["tipo_id"];
    $id_US = $_POST["id_US"];
    $id_tipoUS = $_POST["id_tipoUS"];    
    $nom_asig = $_POST["nom_asig"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fech_na = $_POST["fech_na"];
    $sexo = $_POST["sexo"];
    $correo = $_POST["correo"];
    $lugar_procedencia = $_POST["lugar_procedencia"];
    $contrasena = $_POST["contrasena"];


    if ($id_tipoUS === "2") {
        $id_tipoUS = "2";
    } elseif ($id_tipoUS === "3") {
        $id_tipoUS = "3";
    } else {
        echo "Error: Tipo de usuario no válido.";
        exit();
    }


    if ($id_tipoUS === "2") {
        $nom_tipo_usu = "Docente";
    } elseif ($id_tipoUS === "3") {
        $nom_tipo_usu = "Estudiante";
    } else {
        echo "Error: Tipo de usuario no válido.";
        exit();
    }

    if ($id_tipoUS === "2") {
        $dosLetras = substr(strtolower(preg_replace('/[^a-zA-Z]/', '', $nombre)), 0, 2);
        $cuatroUltimos = substr($id_US, -4);
    }
    else{
        $dosLetras = substr(strtolower(preg_replace('/[^a-zA-Z]/', '', $nombre_est)), 0, 2);
        $cuatroUltimos = substr($id_US, -4);
    }

    if ($id_tipoUS == '3') {
        $usuario = 'EST-' . $dosLetras . $cuatroUltimos;
    } else if ($id_tipoUS == '2') {
        $usuario = 'DOC-' . $dosLetras . $cuatroUltimos;
    }

    $asignaturas = array(
        "1012602" => "RAZONAMIENTO Y REPRESENTACION MATEMATICA",
        "1012604" => "PROCESOS LECTORES Y ESCRITURALES",
        "2450031" => "OFIMATICA AVANZADA Y BASES DE DATOS",
        "3012601" => "CALCULO DIFERENCIAL",
        "4012601" => "INTRODUCCION A LOS NEGOCIOS INTERNACIONALES",
        "4072601" => "FUNDAMENTOS DE ECONOMIA",
        "4092601" => "INGLES I - MY FIRST COMPANY"
    );



    require 'conexion.php';
    $sql = "INSERT INTO usuarios (tipo_id, id_US, id_tipoUS, usuario, nombre, apellido, fech_na, sexo, correo, lugar_procedencia, contrasena, nom_tipo_usu) 
            VALUES (:tipo_id, :id_US, :id_tipoUS, :usuario, :nombre, :apellido, :fech_na, :sexo, :correo, :lugar_procedencia, :contrasena, :nom_tipo_usu)";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':tipo_id', $tipo_id);
    $stmt->bindParam(':id_US', $id_US);
    $stmt->bindParam(':id_tipoUS', $id_tipoUS);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':fech_na', $fech_na);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':lugar_procedencia', $lugar_procedencia);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->bindParam(':nom_tipo_usu', $nom_tipo_usu);

    if ($stmt->execute()) {
        if ($id_tipoUS === '2') {
            $docentes_sql = "INSERT INTO docentes (id_tipoUS, nom_tipo_usu, tipo_id, id_US, nombre, apellido, sexo, fech_na, nom_asig) 
                             VALUES (:id_tipoUS, :nom_tipo_usu, :tipo_id, :id_US, :nombre, :apellido, :sexo, :fech_na, :nom_asig)";
            $stmt_docentes = $conexion->prepare($docentes_sql);

            $stmt_docentes->bindParam(':id_tipoUS', $id_tipoUS);
            $stmt_docentes->bindParam(':nom_tipo_usu', $nom_tipo_usu);
            $stmt_docentes->bindParam(':tipo_id', $tipo_id);
            $stmt_docentes->bindParam(':id_US', $id_US);
            $stmt_docentes->bindParam(':nombre', $nombre);
            $stmt_docentes->bindParam(':apellido', $apellido);
            $stmt_docentes->bindParam(':sexo', $sexo);
            $stmt_docentes->bindParam(':fech_na', $fech_na);
            $stmt_docentes->bindParam(':nom_asig', $nom_asig);

            if ($stmt_docentes->execute()) {
                echo "<script>
                alert('Docente registrado. Tu usuario es: $usuario Acepta para iniciar sesión');
                window.location.href='login-register.php';
                </script>";
            } else {
                echo "Error al registrar el Docente";
            }


        } else if ($id_tipoUS === '3') {
            $estudiantes_sql = "INSERT INTO estudiantes (id_tipoUS, nom_tipo_usu, tipo_id, id_US, nombre, apellido, sexo, fech_na) 
                             VALUES (:id_tipoUS, :nom_tipo_usu, :tipo_id, :id_US, :nombre, :apellido, :sexo, :fech_na)";
            $stmt_estudiantes = $conexion->prepare($estudiantes_sql);

            $stmt_estudiantes->bindParam(':id_tipoUS', $id_tipoUS);
            $stmt_estudiantes->bindParam(':nom_tipo_usu', $nom_tipo_usu);
            $stmt_estudiantes->bindParam(':tipo_id', $tipo_id);
            $stmt_estudiantes->bindParam(':id_US', $id_US);
            $stmt_estudiantes->bindParam(':nombre', $nombre);
            $stmt_estudiantes->bindParam(':apellido', $apellido);
            $stmt_estudiantes->bindParam(':sexo', $sexo);
            $stmt_estudiantes->bindParam(':fech_na', $fech_na);

            if ($stmt_estudiantes->execute()) {
                echo "<script>
                alert('Estudiante registrado. Tu usuario es: $usuario. Acepta para iniciar sesión');
                window.location.href='login-register.php';
                </script>";
            } else {
                echo "Error al registrar el Estudiante";
            }
        } else {
            echo "ERROR al registrar";
        }
    }

    exit();
} else {
    echo "Error";
}
