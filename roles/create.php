<?php

global $pdo, $URl;
include ('../app/config.php');
include ('../layaout/sesion.php');

include ('../layaout/parte1.php');

?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Registro de un nuevo Rol</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-5">
                        <div class="card card-primary" bis_skin_checked="1">
                            <div class="card-header" bis_skin_checked="1">
                                <h3 class="card-title">Llene los Datos</h3>

                                <div class="card-tools" bis_skin_checked="1">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" bis_skin_checked="1" style="display: block;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="../app/controllers/roles/create.php" method="post">
                                            <div class="form-group">
                                                <label for="">Nombres del Rol</label>
                                                <input type="text" name="rol" class="form-control" placeholder="Escriba aqui su Rol" required>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>

<?php include ('../layaout/mensajes.php'); ?>
<?php include ('../layaout/parte2.php'); ?>