<?php

require_once('DBAbstractModel.php');

class Experiencia extends DBAbstractModel {
	
        private $titol;
        private $img;
        private $descrip;
        private $cont_positiu;
        private $cont_negatiu;
        private $id_usuari;
        private $id_categoria;
  
  function __construct() {
    $this->db_name = "a19alvsildur_viajes";
    //echo "constant " . parent::DBPASS;
    }
  
  function __toString() {
    return "(" . $this->titol . ", " . $this->img . ", " . $this->descrip . ", " . $this->cont_positiu . ", " . $this->cont_negatiu . ", " . $this->id_usuari . ", " . $this->id_categoria .")";
  }
    public function insert($userData = array()) {
      
        foreach ($userData as $property => $value)
          $$property = $value;
        $this->query="INSERT INTO experiencies (titol ,img ,descrip ,cont_positiu ,cont_negatiu ,id_usuari ,id_categoria) VALUES('$titol','$img','$descrip','$cont_positiu','$cont_negatiu','$id_usuari','$id_categoria');";
        $this->execute_single_query();

//        if (count($this->rows)==1) {
//          foreach ($this->rows[0] as $property => $value)
//            $this->$property = $value;
//          }
    }      
    
  public function selectlogin($nom_usuari, $contrasena) {
  }
  
  public function update ($userData = array()) {
    foreach ($userData as $property => $value)
      $$property = $value;
    $this->query = "UPDATE users SET firstname='$firstname', lastname= '$lastname',
    password = '$password' WHERE email='$email'";
    $this->execute_single_query($this->query);
  }
  
  public function delete ($userEmail="") {
    $this->query = "DELETE FROM users WHERE email ='$userEmail'";
    $this->execute_single_query($this->query);
  }
 
    
}

?>
