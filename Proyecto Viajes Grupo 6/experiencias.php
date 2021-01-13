<?php

$servername = "labs.iam.cat";
$username = "a19alvsildur_bd";
$password = "123456789";
$dbname = "a19alvsildur_viajes";

try{
  
  $DBcon = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username,$password);
  $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 }catch(PDOException $ex){
  
  die($ex->getMessage());
 }

if ($_GET['cat']==9999){
  $sql = "SELECT * FROM experiencies";
}
else{
  $sql = "SELECT * FROM experiencies  WHERE id_categoria=".$_GET['cat'];
}
$stmt = $DBcon->prepare($sql);
$stmt->execute();
$arrResultat = array();

// output data of each row
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){    
    $arrResultat[] = $row;        
  }
  
  
  $show_json = json_encode($arrResultat );
    echo($show_json);
  

?>
