<?php
    $server="127.0.0.1";
    $user="root";
    $password="";
    $db="michitactics";
    
    $connect = mysqli_connect($server, $user, $password, $db);

    if(!$connect) {
    die("Error de conexión: " . mysqli_connect_error());
    }
?>