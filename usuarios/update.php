<?php

global $pdo, $URl, $nombres, $email, $id_usuario_get;
include ('../app/config.php');
include ('../layaout/sesion.php');
include ('../app/controllers/usuarios/update_usuario.php');
include ('../layaout/parte1.php');

?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editar Usuario</h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-5">
                        <div class="card card-success" bis_skin_checked="1">
                            <div class="card-header" bis_skin_checked="1">
                                <h3 class="card-title">Llene los Datos</h3>

                                <div class="card-tools" bis_skin_checked="1">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" bis_skin_checked="1" style="display: block;">
                                <div class="row">

                                    <div class="col-md-12">

                                        <form action="../app/controllers/usuarios/update.php" method="post">
                                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden>
                                            <div class="form-group">
                                                <label for="">Nombres</label>
                                                <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" placeholder="Escriba aqui su Usuario"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Escriba aqui su Correo" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Contraseña</label>
                                                <input type="text" name="password_user" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Repita la Contraseña</label>
                                                <input type="text" name="password_repeat" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                            </div>
                                        </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->


    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>


<?php include ('../layaout/mensajes.php'); ?>
<?php include ('../layaout/parte2.php');?>