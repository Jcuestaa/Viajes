<?php

include_once 'user.php';

$id = $_GET['id'];

$sql = "UPDATE experiencies SET cont_positiu = 'cont_positiu + 1' WHERE id = '$id'";

if(!mysqli_query($conexio, $sql)){
    echo "like no afegit";
}

$sql = "SELECT cont_positiu FROM experiencies WHERE id = '$id'";

$resultat = mysqli_query($conexio, $sql);

foreach($resultat as $res){
    echo $res['cont_positiu'];
}

?>
