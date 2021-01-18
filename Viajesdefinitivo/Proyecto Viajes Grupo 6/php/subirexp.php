<?php

    error_reporting(-1);

	ini_set('display_errors','On');
    require_once('experiencies.php');
    
    $titol = $_GET['titulo'];
    $img = $_GET['imagen'];
    $descrip = $_GET['descripcion'];
    $cont_positiu = $_GET['like_positivo'];
    $cont_negatiu = $_GET['like_negativo'];
    $id_categoria = $_GET['id_categoria'];
    

    $arrayexperiencia = array ( "titol" => $titol , "img" => $img , "descrip" => $descrip , "cont_positiu" => $cont_positiu , "cont_negatiu" => $cont_negatiu , "id_usuari" => 1 , "id_categoria" => $id_categoria);
    
//$_SESSION['usuariologeado']
    $usuari = new Experiencia();

    $usuari -> insert($arrayexperiencia); 

?>
