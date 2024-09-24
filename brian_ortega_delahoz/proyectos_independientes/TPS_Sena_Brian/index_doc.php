<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_doc.css">
    <title>Inicio</title>
</head>

<body>
    <section class="showcase">
        <header>
            <h2 class="logo">Academia Regional</h2>
            <div class="toggle"></div>
        </header>
        <div class="overlay"></div>
        <div class="text">
            <h2>Bienvenido Docente</h2>
            <h3>A nuestro campus virtual</h3>
            <p></p>
            <a href="#">Explore</a>
        </div>
        <ul class="social">
            <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
    </section>
    <div class="menu">
        <ul>
            <li><a href="actividad_doc.php">Actividades</a></li>
            <li><a href="list_est.php">Estudiantes</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="login-register.php">Salir</a></li>
        </ul>
    </div>
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