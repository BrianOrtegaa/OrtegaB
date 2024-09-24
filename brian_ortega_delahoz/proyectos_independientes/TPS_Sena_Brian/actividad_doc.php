<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM actividades";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Actividades</title>
</head>


<body>

    <body>
        <section class="showcase">
            <header>
                <a href="index_doc.php">
                    <h2 class="logo">Academia Regional</h2>
                </a>
                <h2 class="titulo">Actividades</h2>
                <div class="toggle"></div>
            </header>

            <br><br>
            <div class="container1">
                <table>
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Asignatura</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Archivo Adjunto</th>
                            <th>Enlace</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['id_act']; ?></td>
                                <td><?php echo $row['nom_act']; ?></td>
                                <td><?php echo $row['nom_asig']; ?></td>
                                <td><?php echo $row['desc_act']; ?></td>
                                <td><?php echo $row['fech_act']; ?></td>
                                <td></td>
                                <td>
                                    <form action="pag_act_doc.php" method="post">
                                        <input type="hidden" name="id_act" value="<?php echo $row['id_act']; ?>">
                                        <button type="submit">Ver Actividad</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </section>
        <div class="menu_act">
            <ul><br><br><br><br><br>
                <li><a href="agg_act.php">Agregar</a></li>
                <li><a href="modi_act.php">Modificar</a></li>
                <li><a href="act_cal.php">Calificar</a></li>
                <li><a href="eli_act.php">Eliminar</a></li>
                <li><a href="cons_act.php">Consultar</a></li>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <li><a href="actividad_doc.php">Actividades</a></li>
                <li><a href="list_est.php">Estudiantes</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="login-register.php">Salir</a></li>
            </ul>
        </div>

        <?php
        $mysqli->close();
        ?>
    </body>

    <script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            showcase.classList.toggle('active');
        })
    </script>

</html>