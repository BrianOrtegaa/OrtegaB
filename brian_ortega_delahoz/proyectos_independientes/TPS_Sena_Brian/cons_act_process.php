<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Actividad</title>
  <link rel="stylesheet" href="cons_act_process.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<style>

</style>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
  die("Error de conexión: " . $mysqli->connect_error);
}


$id_act = $_POST['id_act'];


$sql = "SELECT * FROM actividades WHERE  $id_act=id_act ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $mysqli->close();
?>

    <body>
      <section class="showcase">
        <header>
          <a href="actividad_doc.php">
            <h2 class="logo">Academia Regional</h2>
          </a>
          <div class="toggle"></div>
        </header>
      </section>
      <form action="cons_act_process.php" method="POST">
        <div class="login-box">
          <h2>Informacion de la Actividad</h2>

          <h3><?php
              echo "ID: " . $row["id_act"] . "<br>";
              echo "NOMBRE: " . $row["nom_act"] . "<br>";
              echo "DESCRIPCION: " . $row["desc_act"] . "<br>";
              echo "FECHA LIMITE: " . $row["fech_act"] . "<br>";
              echo "ARCHIVO: " . $row["file_act"] . "<br>"; ?></h3>


        </div>


        </div>



      </form>

    </body>
<?php
  }
} else {
  echo "<script>
                alert('La actividad no existe. Acepta para regresar');
                window.location.href='actividad_doc.php';
                </script>";
}
?>