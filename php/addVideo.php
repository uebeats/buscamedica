<?php

    //Solicitamos Conexion
    include 'conexion.php';

    /**
     * Form paso 1
     */
    $idtipo = $_POST['idTipoV'];
    $prev = $_POST['prevSaludV'];
    $espe = $_POST['espeMedicaV'];
    $examen = '0';
    $centro = '0';
    $medico = '0';

    /**
     * Form paso 2
     */
    $name = $_POST['nameUserV'];
    $rut = $_POST['rutUserV'];
    $phone = $_POST['phoneUserV'];
    $email = $_POST['emailUserV'];
    $comunas = '0';
    $address = '0';
    $orgDateA = $_POST['dateAtencionV'];
    $dateA = date("Y-m-d", strtotime($orgDateA));
    $hourA = $_POST['hourAtencionV'];

    $query = "INSERT INTO reservaweb (idtipo, prevision, especialidad, examen, centromedico, comuna, direccion, medico, nombre, rut, telefono, correo, fecha, hora)
    VALUES ('$idtipo','$prev','$espe','$examen','$centro','$comunas','$address','$medico','$name','$rut','$phone','$email','$dateA','$hourA')";
    $resultado = $con1->query($query);
    if ($resultado) {
        echo "ok";
    } else {
        die("Error" . mysqli_error($con1));
    }
