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
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub-categoria'], $cat['creacio']);
        }
        return $list;
    }
    
    public static function find($id) {
        $db = Db::getInstance();
        
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM categoria WHERE id = :id');
        
        $req->execute(array('id' => $id));
        $cat = $req->fetch();
        return new Categoria($cat['id'], $cat['nom'], $cat['sub-categoria'], $cat['creacio']);
    }
    
    public static function findSub() {
        $db = Db::getInstance();

        $req = $db->prepare('SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = categoria AND COLUMN_NAME = sub-categoria');
        
        $req->execute();
        $resultat = $req->fetch();
        $enumList = explode(",", str_replace("'", "", substr($resultat['COLUMN_TYPE'], 5, (strlen($resultat['COLUMN_TYPE'])-6))));
        return $enumList;
    }
    //$field = "enumField"; // The field that contains the ENUM $result=mysql_query('show columns from '.$table.';'); while($tuple=mysql_fetch_assoc($result)) { if($tuple['Field'] == $field) { $types=$tuple['Type']; $beginStr=strpos($types,"(")+1; $endStr=strpos($types,")"); $types=substr($types,$beginStr,$endStr-$beginStr); $types=str_replace("'","",$types); $types=split(',',$types); if($sorted) sort($types); break; } } 
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

