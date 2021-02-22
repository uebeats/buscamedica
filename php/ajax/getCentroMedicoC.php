<?php

/**
 * Conexión a la base de datos
 */
require_once('../conexion.php');

/**
 * Consulta SQL para listar las especialidades
 */

$v_prev = filter_var($_POST['idprev'], FILTER_SANITIZE_NUMBER_INT);
$v_espe = filter_var($_POST['idespe'], FILTER_SANITIZE_NUMBER_INT);
$v_comuna = filter_var($_POST['idcomuna'], FILTER_SANITIZE_NUMBER_INT);


$stmt_cntro = $con->prepare(" 
SELECT centroatencion.nombrecentroatencion, centroatencion.idcentroatencion, centroatencion.nombrecomuna, centroatencion.idcomuna
FROM centroatencion, centroatencionespecialidad, centroatencionprevision
WHERE centroatencion.idcomuna = " . $v_comuna . "
AND centroatencionprevision.idcentroatencion = centroatencion.idcentroatencion
AND centroatencionespecialidad.idcentroatencion = centroatencion.idcentroatencion
AND centroatencionprevision.idprevision = " . $v_prev . "
AND centroatencionespecialidad.idespecialidad = " . $v_espe . "
GROUP BY centroatencion.nombrecentroatencion, centroatencion.idcentroatencion
"
);

$stmt_cntro->execute();
$centros = $stmt_cntro->fetchAll();
?>
<option value="0">Selecciona una opción </option>
<?php foreach ($centros as $centro) { ?>
    <option value="<?php echo $centro['idcentroatencion']; ?>">
        <?php echo $centro['nombrecentroatencion']; ?>
    </option>
<?php }