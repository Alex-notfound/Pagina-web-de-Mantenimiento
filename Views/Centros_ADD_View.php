<?php

class Centros_ADD_View {

    function __construct() {

        $this->render();
    }

    function render() {
        if (!isset($_SESSION['idioma'])) {
            $_SESSION['idioma'] = 'SPANISH';
        }

        include '../Views/Header.php';
        ?>
        <h2><?php echo $strings['Añadir centro']; ?></h2>        

        <section>
            <form class="form_add" method="post" action="../Controllers/Centros_Controller.php" onsubmit="return validacionSubmitEdit();">
                <fieldset id="fieldset_add">
                    <div class="form-group">
                        <label for="nombre"><?php echo $strings['Nombre'] ?>  *</label> 
                        <input class="form-control" name="nombre" type="text" size="25" id="nombre" onblur="comprobarTexto(this, 10);"/> 
                    </div><div class="form-group">
                        <label for="lugar"><?php echo $strings['Lugar'] ?>  *</label> 
                        <input class="form-control" name="lugar" type="text" size="25" id="lugar" onblur="comprobarTexto(this, 30);"/> 
                    </div><div class="form-group">
                        <label for="usuarioAsignado"><?php echo $strings['Usuario asignado'] ?>  *</label> 
                        <input class="form-control" name="usuarioAsignado" type="text" size="25" id="usuarioAsignado" onblur="comprobarTexto(this, 9);"/> 
                    </div>
                </fieldset>
                <span>* <?php echo $strings['Campos obligatorios']; ?> </span><br>
                <!-- Boton submit -->
                <button class="btn btn-outline-primary" name="action" type="submit" value="ADD"><i class="fas fa-check"></i></button>

            </form>
        </section>
        <script src='../Views/js/validaciones.js'></script>
        <?php
        include '../Views/Footer.php';
    }

}
?>

