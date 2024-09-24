<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'gestion_notas');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$tipo_usuario = $_POST['id_tipoUS'];
$username = $_POST['usuario'];
$password = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $username);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if ($password == $user['contrasena']) {
        if (strcasecmp($tipo_usuario, $user['nom_tipo_usu']) == 0) {
            $_SESSION['usuario'] = $username;
            if ($tipo_usuario == "docente") {
                header('Location: index_doc.php');
            } else {
                header('Location: index.php');
            }
            exit;
        } else {
            echo "<script>
                    alert('Tipo de usuario incorrecto, vuelva a intentarlo');
                    window.location.href='login-register.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Contraseña incorrecta, vuelva a intentarlo');
                window.location.href='login-register.php';
              </script>";
    }
} else {
    echo "<script>
            alert('El usuario no existe, vuelva a intentarlo');
            window.location.href='login-register.php';
          </script>";
}

$mysqli->close();
