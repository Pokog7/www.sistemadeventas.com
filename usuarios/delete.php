<?php

global $pdo, $URl, $id_usuario_get, $nombres, $email;
include ('../app/config.php');

include ('../layaout/sesion.php');
include ('../app/controllers/usuarios/show_usuario.php');
include ('../layaout/parte1.php');

?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Datos del Usuario</h1>
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
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">¿Estas seguro de eliminar al usuario?</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="...">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="../app/controllers/usuarios/delete_usuario.php" method="post">
                                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden>
                                            <div class="form-group">
                                                <label for="">Nombres</label>
                                                <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $email;?>" disabled>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <a href="index.php" class="btn btn-secondary">Volver</a>
                                                <button class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
<?php include ('../layaout/parte2.php'); ?>