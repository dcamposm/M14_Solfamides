<?php
class Categoria {
    
    public $id;
    public $nom;
    public $sub_categoria;
    public $creacio;

    public function __construct($id, $nom, $sub_categoria, $creacio) {
        $this->id = $id;
        $this->nom = $nom;
        $this->sub_categoria = $sub_categoria;
        $this->creacio = $creacio;
    }
    //Metoda per mostrar totes les insertccions de la taula categoria
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria');
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }
    //Metoda per filtra un nom de categoria
    public static function search($nom) {
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM categoria WHERE nom LIKE :nom');
        $req->execute(array('nom' => $nom));
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }
    //Metodes per ordenar
    public static function ordByName() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria ORDER BY nom ASC');
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }
    public static function ordBySub() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria ORDER BY sub_categoria ASC');
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }
    public static function ordByDate() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria ORDER BY creacio ASC');
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }
    //Metoda per buscar per id
    public static function find($id) {
        $db = Db::getInstance();
        
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM categoria WHERE id = :id');
        
        $req->execute(array('id' => $id));
        $cat = $req->fetch();
        return new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
    }
    //Metoda per fer insert
    public static function insert($nom, $sub_categoria) {
        $db = Db::getInstance();
        
        $req = $db->prepare('INSERT INTO categoria SET nom = :nom, sub_categoria = :sub_categoria');
        
        $req->execute(array('nom' => $nom, 'sub_categoria' => $sub_categoria));
    }
    //Metoda per der update
    public static function modificar($id, $nom, $sub_categoria) {
        $db = Db::getInstance();
        
        $req = $db->prepare('UPDATE categoria SET nom = :nom, sub_categoria = :sub_categoria WHERE id = :id');

        $req->execute(array('nom' => $nom, 'sub_categoria' => $sub_categoria, 'id' => $id));
    }
    //Metoda per fer delete
    public static function eliminar($id) {
        $db = Db::getInstance();
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('DELETE FROM categoria WHERE id = :id');
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
    }
}

