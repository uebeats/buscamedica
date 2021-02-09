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

$stmt_espe = $con->prepare("
    SELECT especialidad.nombreespecialidad, especialidad.idespecialidad
    FROM especialidad, medicoespecialidad, previsionespecialidad
    WHERE especialidad.idespecialidad = medicoespecialidad.idespecialidad
    AND SUBSTRING(medicoespecialidad.tipo, " . $v_tipo . ", 1) <> '0'
    AND medicoespecialidad.tipo <> ''
    AND previsionespecialidad.idprevision = " . $v_prev . "
    AND previsionespecialidad.idespecialidad = especialidad.idespecialidad
    GROUP BY especialidad.nombreespecialidad, especialidad.idespecialidad"
);

$stmt_espe->execute();
$especialidades = $stmt_espe->fetchAll();

foreach ($especialidades as $especialidad) { ?>
    <option></option>
    <option value="<?php echo $especialidad['idespecialidad']; ?>">
        <?php echo $especialidad['nombreespecialidad']; ?>
    </option>
<?php }