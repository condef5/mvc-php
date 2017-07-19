<?php 

class Conexion extends PDO {
    private $dbtype = 'mysql';
    private $host = 'localhost';
    private $dbname = 'cine';
    private $user = 'root';
    private $password = '';
    public function __construct() {
        //Sobreescribo el método constructor de la clase PDO.
        try {
            parent::__construct($this->dbtype . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
        // Para mostrar las excepciones y errores , PDO por defecto no arroja exepciones
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
}