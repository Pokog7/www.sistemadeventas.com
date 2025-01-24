<?php
global $pdo, $URl;
include ('../../config.php');

$id_usuario = $_POST['id_usuario'];

$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario=:id_usuario");

    $sentencia->bindParam(':id_usuario', $id_usuario);
    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Se elimino Exitosamente";
    $_SESSION['icono'] = "success";
    header('location:' . $URl .'/usuarios/');
