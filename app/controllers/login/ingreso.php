<?php

//seiones

global $pdo, $URl;
include ('../../config.php');

$email = $_POST['email'] ?? '';
$password_user = $_POST['password_user'] ?? '';


$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuario = $query->fetchAll( fetch_style: PDO::FETCH_ASSOC);
foreach ($usuario as $usuario) {
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
}


if ( ($contador > 0) && (password_verify($password_user, $password_user_tabla)) ) {

    echo "Datos Correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: ' . $URl . '/index.php');

}else {

    echo "Datos incorrectos, vuelve a intentar";
    session_start();
    $_SESSION['mensaje'] = "Datos incorrectos, vuelve a intentar";
    header('location: ' .$URl.'/login');

}