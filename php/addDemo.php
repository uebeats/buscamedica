<?php

//Solicitamos Conexion
include 'conexion.php';

    /**
     * Form suscripción
     */
    $mailS = $_POST['mailsuscriptor'];

    $query = "INSERT INTO correos_subscritos (mailsuscriptor) VALUES ('$mailS')";
    $resultado = $con1->query($query);
    if ($resultado) {
        echo "ok";
    } else {
        die("Error" . mysqli_error($con1));
    }
