<?php

global $pdo, $URl;
include ('../../config.php');

$nombres = $_POST["nombres"];
$email = $_POST["email"];
$password_user = $_POST["password_user"];
$password_repeat = $_POST["password_repeat"];

if ($password_user == $password_repeat) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios (nombres, email, password_user, fyh_creacion) VALUES (:nombres, :email, :password_user, :fyh_creacion)");

    $sentencia->bindParam(':nombres', $nombres);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':password_user', $password_user);
    $sentencia->bindParam(':fyh_creacion', $fechaHora);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se Registro Exitosamente";
    header('location:' . $URl .'/usuarios/');

} else{
   // echo "error las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Error las contraseñas no coinciden";
    header('location:' . $URl .'/usuarios/create.php');

}


