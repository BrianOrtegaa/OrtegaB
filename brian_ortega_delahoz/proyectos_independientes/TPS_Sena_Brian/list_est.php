<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM estudiantes";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Estudiantes</title>
</head>

<body>
    <section class="showcase">
        <header>
        <a href="index_doc.php"><h2 class="logo" >Academia Regional</h2></a>
            <h2 class="titulo">Estudiantes</h2>
            <div class="toggle"></div>
        </header>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Tipo de Usuario</th>
                        <th>Tipo ID</th>
                        <th>Numero ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['nom_tipo_usu']; ?></td>
                            <td><?php echo $row['tipo_id']; ?></td>
                            <td><?php echo $row['id_US']; ?></td>
                            <td><?php echo $row['nombre_est']; ?></td>
                            <td><?php echo $row['apellido_est']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <div class="menu">
        <ul>
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