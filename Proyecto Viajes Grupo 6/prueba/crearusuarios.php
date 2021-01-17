<?php


    error_reporting(-1);

	ini_set('display_errors','On');
    require_once('user.php');
    
    $nom_usuari = $_GET ['nombre'];
    
    $contrasena = $_GET['contra'];
    

    $arrayusuario = array ("nom" => $nom_usuari, "admin" => "0" , "contra" => $contrasena);
    echo $nom_usuari;
    $usuari = new User() ;

    $usuari -> insert($arrayusuario); 

   
?>
