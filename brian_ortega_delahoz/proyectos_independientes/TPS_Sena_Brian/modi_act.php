<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Actividad</title>
    <link rel="stylesheet" href="modi_act.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM actividades";
$result = $mysqli->query($sql);
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
    <form action="act.modi_process.php" method="POST">
        <div class="login-box">
            <h2>Modificar Actividad</h2>
            <p>Ingresa el codigo de la actividad que desea modificar</p>
            <div class="user-box">
                <input type="number" name="id_act" id="id_act" >
                <label>Codigo</label>
            </div>
            <div class="user-box">
                <input type="text" name="nom_act" id="nom_act" >
                <label>Nombre</label>
            </div>
            <div class="user-box">
                <input type="text" name="desc_act" id="desc_act" >
                <label>Descripción</label>
            </div>
            <div class="user-box"><br>
                <input type="date" name="fech_act" id="fech_act" >
                <label>Fecha de entrega</label>
            </div>
            <div class="user-box">
                <input type="file" name="file_act" id="file_act">
                <label>Adjuntar Archivo</label>
            </div>
            <button type="submit" class="custom-btn btn-16">Subir</button>
            <p style="font-family: Andale Mono, monospace;">
            </p>

            </div>

   

    </form>

</body>

</html>