<?php

$inc = include("con_db.php");
if ($inc){
    $consulta = "SELECT * FROM experiencies";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $titol = $row['titol'];
            $img = $row['img'];
            $descrip = $row['descrip'];
            $cont_positiu = $row['cont_positiu'];
            $cont_negatiu = $row['cont_negatiu'];
            $id_usuari = $row['id_usuari'];
            $id_categoria = $row['id_categoria'];
            ?>
            <div>
                <h2><?php echo $titol; ?> </h2>
                <div>
                    <p>
                        <b></b><?php echo $img; ?>
                        <b>Descripción:</b> <?php echo $descrip; ?>
                        <b></b> <?php echo $cont_positiu; ?>
                        <b></b> <?php echo $cont_negatiu; ?>
                    </p>
                </div>
            </div>
<?php
        }
    }
}
?>