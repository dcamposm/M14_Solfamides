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
    
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria');
        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub-categoria'], $cat['creacio']);
        }
        return $list;
    }
    
    public static function find($id) {
        $db = Db::getInstance();
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM categoria WHERE id = :id');
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
        $cat = $req->fetch();
        return new Categoria($cat['id'], $cat['nom'], $cat['sub-categoria'], $cat['creacio']);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

