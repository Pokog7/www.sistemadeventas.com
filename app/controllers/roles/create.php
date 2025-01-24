<?php

global $pdo, $URl;
include ('../../config.php');

$rol = $_POST["rol"];


    $sentencia = $pdo->prepare("INSERT INTO tb_roles (rol, fyh_creacion) VALUES (:rol, :fyh_creacion)");

    $sentencia->bindParam(':rol', $rol);
    $sentencia->bindParam(':fyh_creacion', $fechaHora);
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se Registro el Rol Exitosamente";
        $_SESSION['icono'] = "success";
        header('location:' . $URl .'/roles/');

    }else{
        // echo "error las contraseñas no coinciden";
        session_start();
        $_SESSION['mensaje'] = "Error no se Pudo Registrar el Rol";
        $_SESSION['icono'] = "error";
        header('location:' . $URl .'/roles/create.php');
    }






