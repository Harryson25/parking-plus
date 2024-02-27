<?php

$nombrePagina ="Ingreso correcto";

include 'plantilla.php';
include 'header.php';

?>

<div class="mensaje-exito">
    <h3>Ingreso Ok del vehículo</h3>
    <p>El nuevo vehículo ha sido ingresado correctamente</p>
</div>

<?php include 'footer.php'; ?>

<script>
    //Redirigir automáticamente después de 2 segundos
    setTimeout(function () {
        window.location.href = "nuevoIngreso.php";
    }, 2000);
</script>