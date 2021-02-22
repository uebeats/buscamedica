<?php

    //Solicitamos Conexion
    include 'conexion.php';

    /**
     * Form paso 1
     */
    $idtipo = $_POST['idTipoC'];
    $prev = $_POST['prevSaludC'];
    $espe = $_POST['espeMedicaC'];
    $examen = '0';
    $centro = $_POST['centroMedicoC'];
    $medico = $_POST['medicoC'];

    /**
     * Form paso 2
     */
    $name = $_POST['nameUserC'];
    $rut = $_POST['rutUserC'];
    $phone = $_POST['phoneUserC'];
    $email = $_POST['emailUserC'];
    $comunas = $_POST['comunasC'];
    $address = '0';
    $orgDateA = $_POST['dateAtencionC'];
    $dateA = date("Y-m-d", strtotime($orgDateA));
    $hourA = $_POST['hourAtencionC'];

    $query = "INSERT INTO reservaweb (idtipo, prevision, especialidad, examen, centromedico, comuna, direccion, medico, nombre, rut, telefono, correo, fecha, hora)
    VALUES ('$idtipo','$prev','$espe','$examen','$centro','$comunas','$address','$medico','$name','$rut','$phone','$email','$dateA','$hourA')";
    $resultado = $con1->query($query);
    if ($resultado) {
        echo "ok";
    } else {
        die("Error" . mysqli_error($con1));
    }
