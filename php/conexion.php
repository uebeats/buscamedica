<?php

    require('db.php');

    # conectare la base de datos
    global $con;
    try {
        $con1 = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        $con = new PDO('mysql:host=' . DB_HOST_ISS . ';dbname=' . DB_NAME_ISS . ';charset=utf8', DB_USER_ISS, DB_PASS_ISS);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
