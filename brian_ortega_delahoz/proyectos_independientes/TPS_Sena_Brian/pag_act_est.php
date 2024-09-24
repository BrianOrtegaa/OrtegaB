<?php
include 'conexion.php';
$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['id_act'])) {
    $actividades = $_POST['id_act'];

    $sql = "SELECT * FROM actividades WHERE  id_act= $actividades ";
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
                <title>Actividades</title>
                <style>
                    body {
                        display: grid;
                        grid-template-rows: auto 1fr;
                        font-family: Arial, sans-serif;
                        max-width: 1700px;
                    }

                    header {
                        position: absolute;
                        top: 0;
                        background-color: #000033;
                        left: 0;
                        width: 1700px;
                        padding: 2px 100px;
                        z-index: 1000;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }

                    header .logo {
                        color: #fff;
                        text-transform: uppercase;
                        cursor: pointer;
                    }

                    .logo-left {
                        margin-left: 0px;
                    }

                    .content {
                        display: flex;
                        justify-content: flex-start;
                        padding: 20px;
                        margin-left: 150px;
                        font-family: 'Gill Sans MT';
                    }

                    .nom_act {
                        padding: 30px;
                        font-size: 50px;

                    }

                    .desc_act {
                        padding: 30px;
                    }

                    .fech_act {
                        padding: 30px;

                    }

                    .file_act {
                        padding: 30px;

                    }

                    .info-box {
                        width: 50%;
                        padding: 20px;
                    }

                    p {
                        color: gray;
                        font-style: italic;
                    }

                    .login-box {
                        background-color: #F5F5F5;
                        width: 20%;
                        padding: 20px;
                        margin-left: 300px;
                        margin-top: 50px;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                        border-radius: 10px;
                    }

                    input[type="text"],
                    input[type="submit"] {
                        display: block;
                        margin: 10px 0;
                        padding: 10px;
                        border-radius: 12px;
                    }

                    input[type="submit"] {
                        background-color: #00008B;
                        color: white;
                        border: none;
                        cursor: pointer;
                    }

                    input[type="submit"]:hover {
                        background-color: #0000FF;
                    }



                    header {
                        position: relative;
                        display: flex;
                        justify-content: space-between;
                    }

                    .toggle {
                        cursor: pointer;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-around;
                        width: 2rem;
                        height: 2rem;
                        background: transparent;
                        border: none;
                        z-index: 10;
                    }

                    .toggle span {
                        width: 2rem;
                        height: 0.25rem;
                        background: #fff;
                        border-radius: 10px;
                        transition: all 0.3s linear;
                    }

                    #menu {
                        position: fixed;
                        top: 0;
                        right: -100%;
                        width: 8%;
                        height: 100vh;
                        background: #fff;
                        transition: all 0.4s ease-in-out;
                    }

                    #menu ul {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                    }

                    #menu ul li a {
                        display: block;
                        color: black;
                        text-decoration: none;
                        padding: 1rem;
                        height: 80%;
                    }

                    body {
                        transition: all 0.4s ease-in-out;
                    }

                    .upload-button {
                        background-color:#000033;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        border-radius: 20px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                    }
                </style>
            </head>

            <body>
                <header>
                    <a href="asignaturas.php">
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
                            <li><a href="act-razo.php">Salir</a></li>
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
                            <a href="dowl.php? id_act= <?php echo $row['id_act']; ?>"> <button>Descargar archivo</button>
                            </a>
                            
                        </h3>
                    </div>

                    <div class="login-box">
                        <h2>Entregar Evidencia</h2>
                        <form action="agregar.php" method="post" enctype="multipart/form-data">
                            <button type="submit" name="upload" class="upload-button">Subir Archivo</button>
                            
                        </form>


                    </div>
                </div> 

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