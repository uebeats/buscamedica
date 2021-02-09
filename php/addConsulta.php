<?php

	//Solicitamos Conexion
    include 'conexion.php';
    
    /**
     * Form paso 1
     */
	$idtipo = $_POST['idTipoC'];
	$prev = $_POST['prevSaludC'];
	$espe = $_POST['espeMedicaC'];
	$comunas = $_POST['comunasC'];
	$centro = $_POST['centroMedicoC'];
    $medico = $_POST['medicoC'];

    /**
     * Form paso 2
     */
    $name = $_POST['nameUser'];
	$rut = $_POST['rutUser'];
	$phone = $_POST['phoneUser'];    
    $email = $_POST['emailUser'];
	$dateA = $_POST['dateAtencion'];
	$hourA = $_POST['hourAtencion'];

	//Evitar la inyecciones sql
	$con->real_escape_string($idtipo);
	$con->real_escape_string($prev);
	$con->real_escape_string($espe);
	$con->real_escape_string($comunas);
	$con->real_escape_string($centro);
    $con->real_escape_string($medico);
    
    $con->real_escape_string($name);
	$con->real_escape_string($rut);
	$con->real_escape_string($phone);
    $con->real_escape_string($email);
    $con->real_escape_string($dateA);
	$con->real_escape_string($hourA);

	//Valido que los campos no esten vacios
    if (empty($idtipo) || empty($prev) || empty($espe) || empty($comunas) 
    || empty($centro) || empty($medico) || empty($name) || empty($rut)
    || empty($phone) || empty($email) || empty($dateA) || empty($hourA)) {
	    echo "vacio";

	} else {
	    $query = "INSERT INTO registroUsuarios (agent_designated,date_register,owner_group,name_owner,rut_owner,phone_owner,email_owner,obs_owner) VALUES ('$agent','$date','$owner','$name','$rut','$phone','$email','$obs')";
	    $resultado = $con->query($query);
	    if ($resultado) {
	        echo "ok";
	    }else{
	        die("Error" . mysqli_error($con));
	    }
	}