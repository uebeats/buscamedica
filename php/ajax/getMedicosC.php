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
$v_centro = filter_var($_POST['idcentro'], FILTER_SANITIZE_NUMBER_INT);


$stmt_medico = $con->prepare(" 
SELECT m.nombremedico, m.idmedicos 
FROM medicos AS m
JOIN medicoprevision AS p ON m.idmedicos = p.idmedico
JOIN medicoespecialidad AS e ON m.idmedicos = e.idmedico
JOIN medicocentroatencion AS c ON m.idmedicos = c.idmedico
WHERE p.idprevision = " . $v_prev . "
AND e.idespecialidad = " . $v_espe . "
AND c.idcentroatencion = " . $v_centro . "
GROUP BY m.nombremedico, m.idmedicos"
);

$stmt_medico->execute();
$medicos = $stmt_medico->fetchAll();

foreach ($medicos as $medico) { ?>
    <option></option>
    <option value="<?php echo $medico['idmedicos']; ?>">
        <?php echo $medico['nombremedico']; ?>
    </option>
<?php }