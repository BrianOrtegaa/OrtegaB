<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Actividad</title>
    <link rel="stylesheet" href="modi_act.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <section class="showcase">
        <header>
            <a href="actividad_doc.php">
                <h2 class="logo">Academia Regional</h2>
            </a>
            <div class="toggle"></div>
        </header>
    </section>
    <form action="agg.act_process.php" method="POST">
        <div class="login-box">
            <h2>Nueva actividad</h2>
            <div class="user-box">
                <input type="number" name="id_act" id="id_act" required="">
                <label>Codigo</label>
            </div>
            <div class="user-box">
                <input type="text" name="nom_act" id="nom_act" required="">
                <label>Nombre</label>
            </div>
            <div class="user-box">
                <label>Asignatura</label><br>
                <select id="nom_asig" name="nom_asig" class="user-box-select" required="">
                    <option value=""></option>
                    <option value="RAZONAMIENTO Y REPRESENTACION MATEMATICA" class="input-field">RAZONAMIENTO Y REPRESENTACION MATEMATICA</option>
                    <option value="CALCULO DIFERENCIAL" class="input-field">CALCULO DIFERENCIAL</option>
                    <option value="FUNDAMENTOS DE ECONOMIA" class="input-field">FUNDAMENTOS DE ECONOMIA</option>
                    <option value="INGLES I - MY FIRST COMPANY" class="input-field">INGLES I - MY FIRST COMPANY</option>
                </select>
            </div>
            <div class="user-box">
                <input type="text" name="desc_act" id="desc_act" required="">
                <label>Descripción</label>
            </div>
            <div class="user-box">
                <input type="file" name="file_act" id="file_act" required="">
                

            </div>
            <div class="user-box"><br>
                <input type="date" name="fech_act" id="fech_act" required="">
                <label>Fecha de entrega</label>
            </div>

            <button type="submit" class="custom-btn btn-16">Subir</button>
            <p style="font-family: Andale Mono, monospace;">
            </p>

        </div>

        </div>

    </form>

</body>

</html>
<script>
document.getElementById('file_act').addEventListener('change', function() {
   var fileName = this.value.split('\\').pop();
   document.getElementById('downloadButton').href = URL.createObjectURL(this.files[0]);
   document.getElementById('downloadButton').download = fileName;
   document.getElementById('downloadButton').style.display = 'block';
});
</script>
