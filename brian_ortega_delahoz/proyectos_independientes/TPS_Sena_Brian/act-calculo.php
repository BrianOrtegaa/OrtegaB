<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM actcalculo";
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
                <a href="asignaturas.php">
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
                                <td>
                                    <form action="pag_act_est.php" method="post">
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
            <ul>
                <li><a href="asignaturas.php">Asignaturas</a></li>
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