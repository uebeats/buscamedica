<?php

/**
 * Conexión a la base de datos
 */
require_once('../conexion.php');

/**
 * Consulta SQL para listar las especialidades
 */

$v_prev = filter_var($_POST['idprev'], FILTER_SANITIZE_NUMBER_INT);
$v_examen = filter_var($_POST['idexamen'], FILTER_SANITIZE_NUMBER_INT);

$stmt_cntro = $con->prepare("
SELECT centroatencion.nombrecentroatencion, centroatencion.idcentroatencion, centroatencion.nombrecomuna, centroatencion.idcomuna
FROM centroatencion, centroatencionexamenes, centroatencionprevision
WHERE centroatencionprevision.idcentroatencion = centroatencion.idcentroatencion
AND centroatencionexamenes.idcentroatencion = centroatencion.idcentroatencion
AND centroatencionprevision.idprevision = " . $v_prev . "
AND centroatencionexamenes.idexamenes = " . $v_examen . "
GROUP BY centroatencion.nombrecentroatencion, centroatencion.idcentroatencion"
);

$stmt_cntro->execute();
$centros = $stmt_cntro->fetchAll();

foreach ($centros as $centro) { ?>
    <option></option>
    <option value="<?php echo $centro['idcentroatencion']; ?>">
        <?php echo $centro['nombrecentroatencion']; ?>
    </option>
<?php }