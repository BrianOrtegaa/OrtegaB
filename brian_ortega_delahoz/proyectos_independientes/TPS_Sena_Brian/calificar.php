<?php
include 'conexion.php';
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['id'])) {
    $actividades = $_POST['id'];

    $sql = "SELECT documento.id, documento.nombre_est, documento.apellido_est, documento.archivo, actividades.nom_act, actividades.fech_act FROM documento INNER JOIN actividades ON documento.id ";

    $result = $mysqli->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                <link rel="stylesheet" href="pag_doc_cal.css">
                <title>Calificar</title>

            </head>

            <body>
                <header>
                    <a href="actividad_doc.php">
                        <h2 class="logo">Academia Regional</h2>
                    </a>
                    <div class="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav id="menu">
                        <ul><br><br><br><br><br>
                            <li><a href="asignaturas.php">Asignaturas</a></li>
                            <li><a href="login-register.php">Salir</a></li>
                        </ul>
                    </nav>
                </header>
                <br><br><br><br>

                <div class="content">
                    <div class="info-box">
                        <h3>
                            <span class="nom_act">
                                <i class='bx bx-message-square-edit'></i>
                                <?php echo $row["nom_act"] . "<br>"; ?>
                            </span><br>
                            <span class="fech_act"><?php echo $row["fech_act"] . "<br>"; ?></span>
                            <br><br>
                            <span class="id"><?php echo $row["id"]; ?></span>
                            <span class="apellido_est"><?php echo $row["apellido_est"]; ?></span>
                            <span class="nombre_est"><?php echo $row["nombre_est"] . "<br>"; ?></span>
                            <span class="archivo"><?php echo $row["archivo"] . "<br>"; ?></span>
                        </h3>
                </div>

            </body>

            </html>

<?php
        }
    }
} else {
    echo "ERROR";
}
?>

<script>
    document.querySelector('.toggle').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        var body = document.body;
        if (menu.style.right == "0px") {
            menu.style.right = "-10%";
            body.style.marginLeft = "0px";
        } else {
            menu.style.right = "0px";
            body.style.marginLeft = "-8%";
        }
    });
</script>