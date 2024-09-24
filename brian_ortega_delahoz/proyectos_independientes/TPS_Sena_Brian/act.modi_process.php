<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

?>
<?php
$id_act = $_POST['id_act'];
$nom_act = $_POST['nom_act'];
$desc_act = $_POST['desc_act'];
$fech_act = $_POST['fech_act'];
$file_act = $_POST['file_act'];

$sql = "UPDATE actividades SET nom_act='$nom_act', desc_act='$desc_act', fech_act='$fech_act', file_act='$file_act' WHERE id_act='$id_act'";

if ($mysqli->query($sql) === TRUE) {
  echo "<script>
  alert('Actividad modificada');
  window.location.href='actividad_doc.php';
  </script>";
  } else {
    echo "Error actualizando registro: " . $conn->error;
  }
$mysqli->close();
?>


<style>
.enviar{
    margin: 10px;
    padding: 15px 32px;
    border-radius: 50px;

}
</style>

