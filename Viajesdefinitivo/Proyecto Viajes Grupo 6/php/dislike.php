<?php

include_once 'con_bd.php';

$id = $_GET['id'];

$sql = "UPDATE experiencies SET cont_negatiu = 'cont_negatiu + 1' WHERE id = '$id'";

if(!mysqli_query($conexio, $sql)){
    echo "like no afegit";
}

$sql = "SELECT cont_negatiu FROM experiencies WHERE id = '$id'";

$resultat = mysqli_query($conexio, $sql);

foreach($resultat as $res){
    echo $res['cont_negatiu'];
}

?>