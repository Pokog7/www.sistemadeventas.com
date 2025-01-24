<?php

global $pdo, $email_session, $nombres_sesion, $URl;

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Ventas</title>



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $URl;?>public/templates/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $URl;?>public/templates/AdminLTE-3.1.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URl;?>public/templates/AdminLTE-3.1.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URl;?>public/templates/AdminLTE-3.1.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URl;?>public/templates/AdminLTE-3.1.0/dist/css/adminlte.min.css">
    <!--sweet alert libreria-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">

<script>

    swal({
        title: "Bienvenido al Sistema <?php echo $email_session;?>",
        text: "Haga click en continuar",
        icon: "success",
        button: "continuar",
    });

</script>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">SISTEMA DE VENTAS</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="<?php echo $URl;?>" class="brand-link">
            <img src="<?php echo $URl?>/public/images/logo%20e-software.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SISTEMA DE VENTAS</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo $URl?>public/templates/AdminLTE-3.1.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $nombres_sesion;?></a>
</div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Usuarios
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo $URl ;?>/usuarios" class="nav-link ">
                        <i class="far fa-address-book"></i>
                        <p>Lista de Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $URl ;?>/usuarios/create.php" class="nav-link">
                        <i class="far fa-user"></i>
                        <p>Creacion de Usuarios</p>
                    </a>
                </li>
            </ul>
        </li>



        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-address-card"></i>
                <p>
                    Roles
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo $URl ;?>/roles" class="nav-link ">
                        <i class="far fa-address-book"></i>
                        <p>Listado de Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $URl ;?>/roles/create.php" class="nav-link">
                        <i class="far fa-user"></i>
                        <p>Creacion de Roles</p>
                    </a>
                </li>
            </ul>
        </li>



        <li class="nav-item">
            <a href="<?php echo $URl;?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #ee3148">
                <i class="nav-icon fas fa-door-closed"></i>
                <p>
                    Cerrar Sesion
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>