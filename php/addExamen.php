<?php

    //Solicitamos Conexion
    include 'conexion.php';

    /**
     * Form paso 1
     */
    $idtipo = $_POST['idTipoE'];
    $prev = $_POST['prevSaludE'];
    $espe = '0';
    $examen = $_POST['tipoExamenE'];
    $centro = $_POST['centroMedicoE'];
    $medico = $_POST['medicosE'];

    /**
     * Form paso 2
     */
    $name = $_POST['nameUserE'];
    $rut = $_POST['rutUserE'];
    $phone = $_POST['phoneUserE'];
    $email = $_POST['emailUserE'];
    $comunas = $_POST['comunasE'];
    $address = '0';
    $orgDateA = $_POST['dateAtencionE'];
    $dateA = date("Y-m-d", strtotime($orgDateA));
    $hourA = $_POST['hourAtencionE'];

    $query = "INSERT INTO reservaweb (idtipo, prevision, especialidad, examen, centromedico, comuna, direccion, medico, nombre, rut, telefono, correo, fecha, hora)
    VALUES ('$idtipo','$prev','$espe','$examen','$centro','$comunas','$address','$medico','$name','$rut','$phone','$email','$dateA','$hourA')";
    $resultado = $con1->query($query);
    if ($resultado) {
        echo "ok";
    } else {
        die("Error" . mysqli_error($con1));
    }
