
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicio de Sesión | AR</title>
    <link rel="icon" href="lo.ico" type="png" sizes="1000">
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <img src="log.png" alt="" width="400px" height="150px" >
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Iniciar Sesión</button>
                <button class="btn" id="registerBtn" onclick="register()">Registrarse</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <!----------------------------- Form box ----------------------------------->
        <div class="form-box">

            <!------------------- login form -------------------------->
            <form action="login_process.php" method="post">
                <div class="login-container" id="login">
                    <div class="top">
                        <header>Iniciar Sesión</header>
                    </div>
                    <div class="input-field"><i class="bx bxs-graduation"></i>
                        <label>Tipo de Usuario:</label>
                        <select name="id_tipoUS" id="id_tipoUS">
                            <option value=""></option>
                            <option value="docente" class="input-field">Docente</option>
                            <option value="estudiante" class="input-field">Estudiante</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="input-field" name="usuario" id="usuario" placeholder="Ingresa tu usuario ">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="contrasena" id="contrasena" placeholder="Ingresa tu contraseña">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Iniciar sesión">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check"> Recuérdame </label>
                        </div>
                        <div class="two">
                            <label><a href="#">¿Has olvidado tu contraseña?</a></label>
                        </div>
                    </div>
                </div>
            </form>
            <!------------------- registration form -------------------------->
            <form action="register_process.php" method="post">
                <div class="register-container" id="register">
                    <div class="top">
                        <header>Regístrate</header>
                    </div>
                    <div class="two-forms">
                        <div class="input-field-select"><i class="bx bxs-user"></i>
                            <label for="tipo_id">Tipo Documento:</label>
                            <select name="tipo_id" id="tipo_id">
                                <option value=""></option>
                                <option value="Cedula de Ciudadania" class="input-field">CC</option>
                                <option value="Tarjeta de Identidad" class="input-field">TI</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="number" name="id_US" id="id_US" required class="input-field" placeholder="No. Documento">
                            <i class="bx bx-user"></i>
                        </div>
                    </div>

                    <div class="input-field"><i class="bx bxs-graduation"></i>
                        <label>Tipo de Usuario:</label>
                        <select class="opcion" name="id_tipoUS" id="id_tipoUS" >
                            <option value=""></option>
                            <option value="2" class="input-field">Docente</option>
                            <option value="3" class="input-field">Estudiante</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-field-select1" id="asignaturaInput">
                        <label for="asignatura">Nombre Asignatura:</label>
                        <select id="nom_asig" name="nom_asig" class="input-field-select">
                            <option value="" ></option>
                            <option value="1012602" class="input-field">RAZONAMIENTO Y REPRESENTACION MATEMATICA</option>
                            <option value="1012604" class="input-field">PROCESOS LECTORES Y ESCRITURALES</option>
                            <option value="2450031" class="input-field">OFIMATICA AVANZADA Y BASES DE DATOS</option>
                            <option value="3012601" class="input-field">CALCULO DIFERENCIAL</option>
                            <option value="4012601" class="input-field">INTRODUCCION A LOS NEGOCIOS INTERNACIONALES</option>
                            <option value="4072601" class="input-field">FUNDAMENTOS DE ECONOMIA</option>
                            <option value="4092601" class="input-field">INGLES I - MY FIRST COMPANY</option>
                        </select>
                    </div>
                    <br>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="input-field" name="nombre" id="nombre" required placeholder="Nombres">
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" name="apellido" id="apellido" required placeholder="Apellidos">
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="date" name="fech_na" id="fech_na" required class="input-field" placeholder="Fecha Nacimiento">
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-field-select"><i class="bx bx-user"></i>
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo">
                                <option value=""></option>
                                <option value="Hombre" class="input-field">Hombre</option>
                                <option value="Mujer" class="input-field">Mujer</option>
                            </select>
                        </div>

                    </div>
                    <div class="input-box">
                        <input type="email" name="correo" id="correo" required class="input-field" placeholder="Correo Electrónico">
                        <i class="bx bx-envelope"></i>
                    </div>

                    <div class="input-field-select1"><i class="bx bx-user"></i>
                        <label for="lugar_procedencia">Lugar Procedencia:</label>
                        <select name="lugar_procedencia" id="lugar_procedencia">
                            <option value=""></option>
                            <option value="Bogota" class="input-field">Bogota</option>
                            <option value="Medellin" class="input-field">Medellin</option>
                            <option value="Cali" class="input-field">Cali</option>
                            <option value="Barranquilla" class="input-field">Barranquilla</option>
                            <option value="Cartagena" class="input-field">Cartagena</option>
                            <option value="Santa Marta" class="input-field">Santa Marta</option>
                            <option value="Bucaramanga" class="input-field">Bucaramanga</option>
                            <option value="Pasto" class="input-field">Pasto</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="password" name="contrasena" id="contrasena" required class="input-field" placeholder="Contraseña">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Registrarme">
                    </div>
                </div>
        </div>
    </div>

    
    </form>

    
    <script src="habilitar.js"></script>
</body>

</html>
