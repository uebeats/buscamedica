<?php

/**
 * Conexión a la base de datos
 */
require_once('../conexion.php');

/**
 * Consulta SQL para listar las especialidades
 */
$v_tipo = $_POST['idtipos'];
$v_prev = $_POST['idprev'];

$stmt_examen = $con->prepare("
SELECT examenes.nombreexamen, examenes.idexamen
FROM examenes, medicoexamen, previsionexamen
WHERE examenes.idexamen = medicoexamen.idexamen
AND SUBSTRING(medicoexamen.tipo, ". $v_tipo .", 1) <> '0'
AND medicoexamen.tipo <> ''
AND previsionexamen.idprevision = ". $v_prev ."
AND previsionexamen.idexamen = examenes.idexamen
GROUP BY examenes.nombreexamen, examenes.idexamen"
);

$stmt_examen->execute();
$examenes = $stmt_examen->fetchAll();
?>
<option value="0">Selecciona una opción </option>
<?php foreach ($examenes as $examen) { ?>
    <option value="<?php echo $examen['idexamen']; ?>">
        <?php echo $examen['nombreexamen']; ?>
    </option>
<?php }