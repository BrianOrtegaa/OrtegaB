<?php
include 'conexion.php';
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['id_act'])) {
    $actividades = $_POST['id_act'];

    $sql = "SELECT * FROM actividades WHERE  id_act=$actividades ";
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
                <title>Actividades</title>
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
                            <span class="desc_act"><?php echo $row["desc_act"] . "<br>"; ?></span>
                            <span class="fech_act"><?php echo $row["fech_act"] . "<br>"; ?></span>
                            <span class="file_act"><?php echo $row["file_act"]; ?></span>
                        </h3>
                    </div>
                    <h1>ENTREGAS</h1>
                    <?php
                    require_once "C:/xampp/htdocs/SENA/db.php";
                    $stmt = $conexion->prepare("SELECT * FROM documento");
                    $stmt->execute();
                    $resultados = $stmt->get_result();
                    ?>

                    <table>
                        <tr>
                            <th>#</th>
                            <th>Estudiante</th>
                            <th>Descripción</th>
                            <th>Archivo</th>
                        </tr>
                        <?php while ($row = $resultados->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['apellido_est'] . '&nbsp;' . $row['nombre_est']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td>
                                    <form action="calificar.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit">Calificar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>


            </body>

            </html>

<?php
        }
    }
} else {
    echo "No se proporcionó ningún ID de actividad.";
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