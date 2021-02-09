<?php

/**
 * Conexión a la base de datos
 */
require_once('../conexion.php');

/**
 * Consulta SQL para listar las comunas
 */

$v_prev = $_POST['idprev'];
$v_espe = $_POST['idespe'];


$stmt_cmnas = $con->prepare("
SELECT comuna.nombrecomuna, comuna.idcomuna
FROM comuna, centroatencion, centroatencionespecialidad, centroatencionprevision
where comuna.idcomuna = centroatencion.idcomuna
and centroatencionprevision.idcentroatencion = centroatencion.idcentroatencion
and centroatencionespecialidad.idcentroatencion = centroatencion.idcentroatencion
and centroatencionprevision.idprevision = " . $v_prev . "
and centroatencionespecialidad.idespecialidad = " . $v_espe . "
group by comuna.nombrecomuna, comuna.idcomuna"
);

$stmt_cmnas->execute();
$comunas = $stmt_cmnas->fetchAll();

foreach ($comunas as $comuna) { ?>
    <option></option>
    <option value="<?php echo $comuna['idcomuna']; ?>">
        <?php echo $comuna['nombrecomuna']; ?>
    </option>
<?php }