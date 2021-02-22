<?php

    //Solicitamos Conexion
    include 'conexion.php';

    /**
     * Form paso 1
     */
    $idtipo = $_POST['idTipoH'];
    $prev = '0';
    $espe = '0';
    $examen = '0';
    $centro = '0';
    $medico = '0';

    /**
     * Form paso 2
     */
    $name = $_POST['nameUserH'];
    $rut = $_POST['rutUserH'];
    $phone = $_POST['phoneUserH'];
    $email = $_POST['emailUserH'];
    $comunas = $_POST['comunasH'];
    $address = $_POST['addressH'];
    $orgDateA = $_POST['dateAtencionH'];
    $dateA = date("Y-m-d", strtotime($orgDateA));
    $hourA = $_POST['hourAtencionH'];

    $query = "INSERT INTO reservaweb (idtipo, prevision, especialidad, examen, centromedico, comuna, direccion, medico, nombre, rut, telefono, correo, fecha, hora)
    VALUES ('$idtipo','$prev','$espe','$examen','$centro','$comunas','$address','$medico','$name','$rut','$phone','$email','$dateA','$hourA')";
    $resultado = $con1->query($query);
    if ($resultado) {
        echo "ok";
    } else {
        die("Error" . mysqli_error($con1));
    }
