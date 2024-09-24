<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR WORD & PDF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<style>
    a {
        text-decoration: none;
    }

    .s {
        padding-top: 50px;
        text-align: center;
    }
</style>

<body><br>

    <div class="container">
        <div class="col-sm-12">
            <h2 style="text-align: center;">Subir Archivos Word & PDF | SoftCodEPM</h2>
            <br>
            <div>
                <a href="agregar.php">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar"> Agregar
                    </button>

                </a>

            </div>

            <br><br><br>
            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Estudiante</th>
                            <th>Descripcion</th>
                            <th>Archivo</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require_once "C:/xampp/htdocs/SENA/db.php";
                        $consulta = mysqli_query($conexion, "SELECT * FROM documento");
                        while ($fila = mysqli_fetch_assoc($consulta)) :
                        ?>
                            <tr>
                                <td>
                                    <?php echo $fila['id']; ?>
                                </td>
                                <td>
                                    <?php
                                    echo $fila['apellido_est'] . '&nbsp;' . $fila['nombre_est'];
                                    ?>
                                </td>
                                <td>
                                    <?php echo $fila['descripcion']; ?>
                                </td>
                                <td>
                                    <?php echo $fila['archivo']; ?>
                                </td>
                                <td>
                                    <a href="C:/xampp/htdocs/SENA/db.php?id= <?php echo $fila['id']; ?>"> <button>Abrir
                                            Documento</button>
                                    </a>


                                </td>
                            <?php endwhile; ?>

                            </tr>
                    </tbody>
                </table>

            </div>
        </div>

</body>

</html>