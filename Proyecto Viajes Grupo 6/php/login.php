<?php


    error_reporting(-1);

	ini_set('display_errors','On');
    require_once('user.php');
    
    $nom_usuari = $_GET['nombre'];
    
    $contrasena = $_GET['contra'];   

    $usuari = new User();

    $usuari -> selectlogin($nom_usuari, $contrasena); 
    
    echo json_encode($usuarios);
    
    
    
?>
