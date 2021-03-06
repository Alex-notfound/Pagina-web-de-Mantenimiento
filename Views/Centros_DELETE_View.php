<!--17-01-2019/Bravo/Vista que nos permite eliminar un centro -->

<?php
include_once '../Functions/Authentication.php';

class Centros_DELETE_View {

    function __construct($tupla) {    //Constructor de la clase
        $this->render($tupla);
    }

    function render($tupla) {
        if (!isset($_SESSION['idioma'])) {   //Si no hay idioma seleccionado
            $_SESSION['idioma'] = 'ESPAÑOL'; //por defecto ponemos español
        }

        include '../Views/Header.php';
        ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col"><?php echo $strings['Nombre']; ?></th>
                    <th scope="col"><?php echo $strings['Lugar']; ?></th>
                    <th scope="col"><?php echo $strings['Usuario asignado']; ?></th>
                    <th scope="col"><?php echo $strings['Confirmar borrado']; ?></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $tupla['nombre']; ?></td>
                    <td><?php echo $tupla['lugar']; ?></td>
                    <td><?php echo $tupla['usuarioAsignado']; ?></td>
                    <td>
                        <!--Botones para realizar acciones en cada tupla-->
                        <form class="form-inline my-2 my-lg-0" name='form_delete' action="../Controllers/Centros_Controller.php" method="post">
                            <input type="hidden" name="nombre" value=<?php echo $tupla['nombre'] ?>>
                            <button name="action" value="DELETE" type="submit" class="btn btn-outline-primary">
                                <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        include '../Views/Footer.php';
    }

}
?>


