<?php

require_once('DBAbstractModel.php');

class User extends DBAbstractModel {
	
  private $id;
  private $nom;
  private $admin;
  private $contra;
  
  
  function __construct() {
    $this->db_name = "a19alvsildur_viajes";
    //echo "constant " . parent::DBPASS;
    }
  
  function __toString() {
    return "(" . $this->id . ", " . $this->nom . ", " . $this->admin . ", " . $this->contra . ")";
  }
  
  // public function select($userEmail="") {
  //   if ($userEmail!="") {
  //     $this->query = "SELECT id, nom, admin, contra
  //                   FROM users
  //                   WHERE email='$userEmail'";
  //     $this->get_results_from_query();
      
  //   }
  //   // Any register selected
  //   if (count($this->rows)==1) {
  //     foreach ($this->rows[0] as $property => $value)
  //       $this->$property = $value;
  //     }
  // }

  public function selectlogin($nom_usuari, $contrasena) {
    
    $this->query = "SELECT * FROM usuario WHERE nom = '$nom_usuari' and contra ='$contrasena';";
    $this->get_results_from_query();
   
  // Any register selected
  if (count($this->rows)==1) {
    foreach ($this->rows[0] as $property => $value)
      $this->$property = $value;
   
    session_start();
    $_SESSION['usuariologeado']  = $this->rows[0]['id'];
    
    return $this->rows;
  }
  else {
      return false;
  }
}
  
  public function insert($userData = array()) {
      
        foreach ($userData as $property => $value)
          $$property = $value;
        $this->query="INSERT INTO usuario (nom, admin, contra)
                      VALUES ('$nom', '$admin', '$contra');";
        $this->execute_single_query();
      
      $this->query = "SELECT * FROM usuario WHERE nom = '$nom' and contra ='$contra';";
      $this->get_results_from_query();
      
      session_start();
      $_SESSION['usuariologeado']  = $this->rows[0]['id'];
      setcookie("TestCookie", $_SESSION['usuariologeado'] , time()+3600);
      

//        if (count($this->rows)==1) {
//          foreach ($this->rows[0] as $property => $value)
//            $this->$property = $value;
//          }
    }
    public function insertexperiencias($userData = array()) {
      
        foreach ($userData as $property => $value)
          $$property = $value;
        $this->query="INSERT INTO experiencies (titol ,img ,descrip ,cont_positiu ,cont_negatiu ,id_usuari ,id_categoria) VALUES('$titol','$img','$descrip','$cont_positiu','$cont_negatiu','$id_usuari','$id_categoria');";
        $this->execute_single_query();

//        if (count($this->rows)==1) {
//          foreach ($this->rows[0] as $property => $value)
//            $this->$property = $value;
//          }
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
