<?php
$nombrePagina = "Nuevo Ingreso";
    include 'plantilla.php';
    include 'header.php';
?>

      <div class="contenedor-nuevo-ingreso">
        <form action="" id="nuevoIngreso"
            <h3><strong>Información del vehículo:</strong></h3>

            <div class="control-form">
                <label>Tipo vehículo:</label>
                <select>
                    <option value="">Carro</option>
                    <option value="">Moto</option>
                    <option value="">Otro</option>
                </select>
            </div>
            <div class="control-form">
                    <label>Marca:</label>
                    <input type="text" id="marca"/>
            </div>
            <div class="control-form">
                <label>Color:</label>
                <input type="text" id="color"/>
            </div>
            <div class="control-form">
                <label>Placa:</label>
                <input type="text" id="placa"/>
            </div>
            <div class="control-form">
                <label>Observaciones:</label>
                <input type="text" id="observaciones"/>
            </div>
            <button class="botonNuevoVehiculo">Ingresar vehículo</button>
        </form>
      </div>

<?php include 'footer.php'; ?>