<?php include 'plantilla.php'; ?>
    <div class="contenedor">
        <div class="contenedor-logo">
            <i class="fa-solid fa-square-parking rojo" style="font-size: 4rem;"></i>
            <h1>
                <span class="gris-oscuro">Parking</span>
                <span class="rojo">Plus</span>
            </h1>
        </div>

        <div class="contenedor-formulario">
            <p style="text-align: center; color: var (--grisOscuro);" al sistema</p>
            <form>
                <label style="font-weight: bold;">Usuario</label>
                <input type="text" id="usuario" />

                <label style="font-weight: bold;">Clave</label>
                <input type="password" id="clave" />

                <button onclick="ingresarAlSistema()">Ingresar</button>
            </form>
        </div>
        <p>&copy;Juan Astaiza - Systemplus Popayán</p>
    </div>

    <script>
        
        function ingresarAlSistema() {
        const inputUsuario = document.getElementById("usuario");
        const inputClave = document.getElementById("clave");

        if(inputUsuario.value == "andres" && inputClave.value == 123456) {
            alert("Puedes ingresar al sistema");
        }    else {
        alert("No estás autorizado a ingresar");
        }
     }
        
    </script>
  </body>
</html>

