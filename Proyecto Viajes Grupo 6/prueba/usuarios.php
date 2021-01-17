<?php
    private $nombreusuario:
    
    private $contrasena;
    
    private $email;
    
    private $admin = 0;
    
    
    function __construct () {
    
        $this->db_name = "a19alvsildur_viajes";
    }
    
    // con esta funcion se pasa a string el objeto para que lo podamos leer    
    function __toString() {
        
        return "(". $this ->nombreusuario .",". $this ->contrasena .",". $this ->email .",". $this ->admin .")";
    }

    
    //funcion de registrar
    ?>
