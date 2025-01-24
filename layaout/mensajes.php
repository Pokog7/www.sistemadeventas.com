<?php
if( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) ){
    $respuesta = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
    ?>

    <script>
        swal({
            title: "<?php echo $respuesta ;?>",
            text: "",
            icon: "<?php echo $icono; ?>",
            button: "continuar",
        });
    </script>
    <?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
}

?>