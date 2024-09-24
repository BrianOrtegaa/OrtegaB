<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Actividad</title>
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
        <a href="actividad_doc.php"><h2 class="logo" >Academia Regional</h2></a>
            <div class="toggle"></div>
        </header>
    </section>
    <form action="eli.act_process.php" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar la actividad?')">
    <div class="login-box">
            <h2>Eliminar actividad</h2>
            
                <p>Ingresa el codigo de la actividad que desea eliminar </p>
                <div class="user-box">
                
                <input type="number" name="id_act" id="id_act" required="">
                <label>Codigo</label>
            </div>



    <input type="submit" value="Enviar">




    
    

    </form>
        
 

</body>

</html>