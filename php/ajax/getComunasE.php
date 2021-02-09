<?php

/**
 * Conexión a la base de datos
 */
require_once('../conexion.php');

/**
 * Consulta SQL para listar las comunas
 */

$v_prev = $_POST['idprev'];
$v_examen = $_POST['idexamen'];


$stmt_cmnas = $con->prepare("
SELECT comuna.nombrecomuna, comuna.idcomuna
FROM comuna, centroatencion, centroatencionexamenes, centroatencionprevision
WHERE comuna.idcomuna = centroatencion.idcomuna
AND centroatencionprevision.idcentroatencion = centroatencion.idcentroatencion
AND centroatencionexamenes.idcentroatencion = centroatencion.idcentroatencion
AND centroatencionprevision.idprevision = ". $v_prev ."
AND centroatencionexamenes.idexamenes = ". $v_examen ."
GROUP BY comuna.nombrecomuna, comuna.idcomuna"
);

$stmt_cmnas->execute();
$comunas = $stmt_cmnas->fetchAll();

foreach ($comunas as $comuna) { ?>
    <option></option>
    <option value="<?php echo $comuna['idcomuna']; ?>">
        <?php echo $comuna['nombrecomuna']; ?>
    </option>
<?php }