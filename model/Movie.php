<?php  
class Movie {
    private $id;
    private $name;
    private $description;
    private $year;
    private $image;
    private $category_id;
    const TABLE = 'movie';
    
    public function __construct($id=null,$name=null, $description=null, $year=null, $image=null, $category_id=null) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description; 
        $this->year = $year; 
        $this->image = $image;
        $this->category_id = $category_id;
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
    public function description($description=null) {
        if($description)
            $this->description = $description;
        return $this->description;
    }
    public function year($year=null) {
        if($year)
            $this->year = $year;
        return $this->year;
    }
    public function image($image=null) {
        if($image)
            $this->image = $image;
        return $this->image;
    } 
    public function category_id($category_id=null) {
        if($category_id)
            $this->category_id = $category_id;
        return $this->category_id;
    } 

    public function save() {
        $conexion = new Conexion(); 
        if ($this->id) /* Edita */ {
            $query = $conexion->prepare('UPDATE ' . self::TABLE . ' SET name = :name, description = :description, year = :year, image = :image, category_id = :category_id  WHERE id = :id');
            $query->bindParam(':name', $this->name);
            $query->bindParam(':description', $this->description);
            $query->bindParam(':year', $this->year);
            $query->bindParam(':image', $this->image);
            $query->bindParam(':category_id', $this->category_id);
            $query->bindParam(':id', $this->id);
            $query->execute();
        } else /* Inserta */ {
            $query = $conexion->prepare('INSERT INTO ' . self::TABLE . ' (name, description,year,image,category_id) VALUES(:name, :description, :year, :image, :category_id)');
            $query->bindParam(':name', $this->name);
            $query->bindParam(':description', $this->description);
            $query->bindParam(':year', $this->year);
            $query->bindParam(':image', $this->image);
            $query->bindParam(':category_id', $this->category_id);
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
            return new self($id,$row['name'], $row['description'], $row['year'], $row['image'],$row['category_id'] );
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