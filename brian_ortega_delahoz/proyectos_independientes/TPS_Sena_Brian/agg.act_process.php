<?php

$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM actividades";
$result = $mysqli->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_act = $_POST["id_act"];
    $nom_act = $_POST["nom_act"];
    $nom_asig = $_POST["nom_asig"];
    $desc_act = $_POST["desc_act"];
    $fech_act = $_POST["fech_act"];
    $file_act = $_POST["file_act"];

    function generate_random_string($prefix, $length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $random_string = $prefix;
        $max = strlen($characters) - 1;

        for ($i = strlen($prefix); $i < $length; $i++) {
            $random_string .= $characters[random_int(0, $max)];
        }
    }

    

    $link_act = "http://localhost/SENA/pag_act.php?$nom_act";

    require 'conexion.php';
    $sql = "INSERT INTO actividades (id_act, nom_act, nom_asig, desc_act, fech_act, file_act,link_act)
            VALUES (:id_act, :nom_act, :nom_asig, :desc_act, :fech_act, :file_act,:link_act)";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':id_act', $id_act);
    $stmt->bindParam(':nom_act', $nom_act);
    $stmt->bindParam(':nom_asig', $nom_asig);
    $stmt->bindParam(':desc_act', $desc_act);
    $stmt->bindParam(':fech_act', $fech_act);
    $stmt->bindParam(':file_act', $file_act);
    $stmt->bindParam(':link_act', $link_act);

    if ($stmt->execute()) {

        /* RAZONAMIENTO Y REPRESENTACION MATEMATICA*/
        if ($nom_asig === 'RAZONAMIENTO Y REPRESENTACION MATEMATICA') {
            $actrazo_sql = "INSERT INTO actrazo (id_act, nom_act, nom_asig, desc_act, fech_act, file_act, link_act)
                            VALUES (:id_act, :nom_act, :nom_asig, :desc_act, :fech_act, :file_act,:link_act)";
            $stmt_actrazo = $conexion->prepare($actrazo_sql);

            $stmt_actrazo->bindParam(':id_act', $id_act);
            $stmt_actrazo->bindParam(':nom_act', $nom_act);
            $stmt_actrazo->bindParam(':nom_asig', $nom_asig);
            $stmt_actrazo->bindParam(':desc_act', $desc_act);
            $stmt_actrazo->bindParam(':fech_act', $fech_act);
            $stmt_actrazo->bindParam(':file_act', $file_act);
            $stmt_actrazo->bindParam(':link_act', $link_act);

            if ($stmt_actrazo->execute()) {
                echo "<script>
                alert('La actividad creada con exito. Acepta para regresar');
                window.location.href='actividad_doc.php';
                </script>";
                exit();
            } else {
                echo "ERROR al registrar actividad en RAZONAMIENTO Y REPRESENTACION MATEMATICA";
            }



            /*CALCULO DIFERENCIAL*/
        } elseif ($nom_asig === 'CALCULO DIFERENCIAL') {
            $actcalculo_sql = "INSERT INTO actcalculo (id_act, nom_act, nom_asig, desc_act, fech_act, file_act, link_act)
                              VALUES (:id_act, :nom_act, :nom_asig, :desc_act, :fech_act, :file_act,:link_act)";
            $stmt_actcalculo = $conexion->prepare($actcalculo_sql);

            $stmt_actcalculo->bindParam(':id_act', $id_act);
            $stmt_actcalculo->bindParam(':nom_act', $nom_act);
            $stmt_actcalculo->bindParam(':nom_asig', $nom_asig);
            $stmt_actcalculo->bindParam(':desc_act', $desc_act);
            $stmt_actcalculo->bindParam(':fech_act', $fech_act);
            $stmt_actcalculo->bindParam(':file_act', $file_act);
            $stmt_actcalculo->bindParam(':link_act', $link_act);

            if ($stmt_actcalculo->execute()) {
                echo "<script>
                alert('La actividad creada con exito. Acepta para regresar');
                window.location.href='actividad_doc.php';
                </script>";
                exit();
            } else {
                echo "ERROR al registrar actividad en CALCULO DIFERENCIAL";
            }


            /*FUNDAMENTOS DE ECONOMIA*/
        } elseif ($nom_asig === 'FUNDAMENTOS DE ECONOMIA') {
            $actfund_sql = "INSERT INTO actfund (id_act, nom_act, nom_asig, desc_act, fech_act, file_act, link_act)
                            VALUES (:id_act, :nom_act, :nom_asig, :desc_act, :fech_act, :file_act,:link_act)";
            $stmt_actfund = $conexion->prepare($actfund_sql);

            $stmt_actfund->bindParam(':id_act', $id_act);
            $stmt_actfund->bindParam(':nom_act', $nom_act);
            $stmt_actfund->bindParam(':nom_asig', $nom_asig);
            $stmt_actfund->bindParam(':desc_act', $desc_act);
            $stmt_actfund->bindParam(':fech_act', $fech_act);
            $stmt_actfund->bindParam(':file_act', $file_act);
            $stmt_actfund->bindParam(':link_act', $link_act);

            if ($stmt_actfund->execute()) {
                echo "<script>
                alert('La actividad creada con exito. Acepta para regresar');
                window.location.href='actividad_doc.php';
                </script>";
                exit();
            } else {
                echo "ERROR al registrar actividad en FUNDAMENTOS DE ECONOMIA";
            }


            /*INGLES I - MY FIRST COMPANY*/
        } elseif ($nom_asig === 'INGLES I - MY FIRST COMPANY') {
            $actingles_sql = "INSERT INTO actingles (id_act, nom_act, nom_asig, desc_act, fech_act, file_act, link_act)
                              VALUES (:id_act, :nom_act, :nom_asig, :desc_act, :fech_act, :file_act,:link_act)";
            $stmt_actingles = $conexion->prepare($actingles_sql);

            $stmt_actingles->bindParam(':id_act', $id_act);
            $stmt_actingles->bindParam(':nom_act', $nom_act);
            $stmt_actingles->bindParam(':nom_asig', $nom_asig);
            $stmt_actingles->bindParam(':desc_act', $desc_act);
            $stmt_actingles->bindParam(':fech_act', $fech_act);
            $stmt_actingles->bindParam(':file_act', $file_act);
            $stmt_actingles->bindParam(':link_act', $link_act);

            if ($stmt_actingles->execute()) {
                echo "<script>
                alert('La actividad creada con exito. Acepta para regresar');
                window.location.href='actividad_doc.php';
                </script>";
                exit();
            } else {
                echo "ERROR al registrar actividad en INGLES I - MY FIRST COMPANY";
            }
        } else {
            echo "error";
        }

        exit();
    } else {
        echo "ERROR";
    }
}
