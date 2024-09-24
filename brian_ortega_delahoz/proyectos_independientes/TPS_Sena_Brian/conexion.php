<?php
$servidor = 'localhost';
$bd = 'gestion_notas';
$user = 'root';
$pass = '';

try {
    $conexion = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec('SET NAMES utf8');
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}

return $conexion;
?>
