<?php  
class Category {
    private $id;
    private $name; 
    const TABLE = 'category';
    
    public function __construct($id=null,$name=null) {
        $this->id = $id;
        $this->name = $name; 
    }
    public function id($id=null) {
        if($id)
            $this->id=$id;
        return $this->id;
    }
    public function name($name=null) {
        if($name)
            $this->name = $name; 
        return $this->name;
    } 
    public function save() {
        $conexion = new Conexion(); 
        if ($this->id) /* Edita */ {
            $query = $conexion->prepare('UPDATE ' . self::TABLE . ' SET name = :name WHERE id = :id');
            $query->bindParam(':name', $this->name); 
            $query->bindParam(':id', $this->id);
            $query->execute();
        } else /* Inserta */ {
            $query = $conexion->prepare('INSERT INTO ' . self::TABLE . ' (name) VALUES(:name)');
            $query->bindParam(':name', $this->name);
            $query->execute();  
            $this->id = $conexion->lastInsertId(); 
        }
        $conexion = null;
    }
    
    public function delete(){
        $conexion = new Conexion();
        $query = $conexion->prepare('DELETE FROM ' . self::TABLE . ' WHERE id = :id');
        $query->bindParam(':id', $this->id);
        $query->execute();
        $conexion = null;
    }
    public static function find($id) {
        $conexion = new Conexion();
        $query = $conexion->prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $row = $query->fetch();
        $conexion = null; 
        if ($row) {
            return new self($id,$row['name']);
        } else {
            return false;
        }
    }
    public static function all() {
        $conexion = new Conexion();
        $query = $conexion->prepare('SELECT * FROM ' . self::TABLE);
        $query->execute();
        $registros = $query->fetchAll();
        $conexion = null;
        return $registros;
    }
}