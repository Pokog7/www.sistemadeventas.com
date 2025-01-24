<?php

global $pdo, $URl;

session_start();
if(isset($_SESSION['sesion_email'])){
    // echo "si existe la sesion de ".$_SESSION['sesion_email'];
    $email_session = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios WHERE email= '$email_session'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuario = $query->fetchAll( fetch_style: PDO::FETCH_ASSOC);
    foreach ($usuario as $usuario) {
        $nombres_sesion = $usuario['nombres'];
    }
}else{
    echo "no existe la sesion";
    header('Location: ' .$URl. '/login' );
}
