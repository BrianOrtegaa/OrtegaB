<?php
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM asignaturas";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Asignaturas</title>
</head>


<body>

    <body>
        <section class="showcase">
            <header>
                <a href="index.php">
                    <h2 class="logo">Academia Regional</h2>
                </a>
                <h2 class="titulo">Asignaturas</h2>
                <div class="toggle"></div>
            </header>

            <br><br>
            <div class="container1">
                <table>
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1012602</td>
                            <td><a href="act-razo.php">RAZONAMIENTO Y REPRESENTACION MATEMATICA</a></td>
                        </tr>
                        <tr>
                            <td>3012601</td>
                            <td><a href="act-calculo.php">CALCULO DIFERENCIAL</a></td>
                        </tr>
                        <tr>
                            <td>4072601</td>
                            <td><a href="act-fund.php">FUNDAMENTOS DE ECONOMIA</a></td>
                        </tr>
                        <tr>
                            <td>4092601</td>
                            <td><a href="act-ingles.php">INGLES I - MY FIRST COMPANY</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
        <div class="menu">
            <ul>
                <li><a href="inf.php">Informaciones</a></li>
                <li><a href="perfil_est.php">Perfil</a></li>
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