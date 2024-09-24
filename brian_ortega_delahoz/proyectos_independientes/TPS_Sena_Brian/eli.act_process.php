<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}

$id_act = $_POST['id_act'];

$sql = "SELECT * FROM actividades WHERE id_act = $id_act";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
   echo "<script>
   alert('Actividad eliminada. Acepta para regresar');
   window.location.href='actividad_doc.php';
   </script>";

   // Delete from other tables
   $sql1 = "DELETE FROM actividades WHERE id_act = $id_act";
   $sql2 = "DELETE FROM actfund WHERE id_act = $id_act";
   $sql3 = "DELETE FROM actingles WHERE id_act = $id_act";
   $sql4 = "DELETE FROM actrazo WHERE id_act = $id_act";
   $sql5 = "DELETE FROM actcalculo WHERE id_act = $id_act";

   $mysqli->query($sql1);
   $mysqli->query($sql2);
   $mysqli->query($sql3);
   $mysqli->query($sql4);
   $mysqli->query($sql5);
} else {
   echo "<script>
               alert('La actividad no existe. Acepta para regresar');
               window.location.href='eli_act.php';
               </script>";
}

mysqli_close($mysqli);
?>


<style>
    .enviar {
        margin: 10px;
        padding: 15px 32px;
        border-radius: 50px;

    }
</style>