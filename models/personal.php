<?php
class Personal {
    
    public $dni_personalExtern;
    public $nom_personalExtern;
    public $primer_cognom_personalExtern;
    public $segon_cognom_personalExtern;
    public $email_personalExtern;
    public $telefon_personalExtern;
    public $direccio_personalExtern;
    public $naixement_personalExtern;
    public $nss_personalExtern;
    public $iban_personalExtern;
    public $id_idioma;

    public function __construct($dni_personalExtern, $nom_personalExtern, $primer_cognom_personalExtern, $segon_cognom_personalExtern, $email_personalExtern, $telefon_personalExtern,
                                 $direccio_personalExtern, $naixement_personalExtern, $nss_personalExtern, $iban_personalExtern, $id_idioma) {
        $this->dni_personalExtern = $dni_personalExtern;
        $this->nom_personalExtern = $nom_personalExtern;
        $this->primer_cognom_personalExtern = $primer_cognom_personalExtern;
        $this->segon_cognom_personalExtern = $segon_cognom_personalExtern;
        $this->email_personalExtern = $email_personalExtern;
        $this->telefon_personalExtern = $telefon_personalExtern;
        $this->direccio_personalExtern = $direccio_personalExtern;
        $this->naixement_personalExtern = $naixement_personalExtern;
        $this->nss_personalExtern = $nss_personalExtern;
        $this->iban_personalExtern = $iban_personalExtern;
        $this->id_idioma = $id_idioma;
    }
    //Metoda per mostrar totes les insertccions de la taula categoria
    public static function mostrarTots() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM personalextern ORDER BY dni_personalExtern');
        
        foreach($req->fetchAll() as $personal) {
            $list[] = new Personal($personal['dni_personalExtern'], $personal['nom_personalExtern'], $personal['primer_cognom_personalExtern'], $personal['segon_cognom_personalExtern'], $personal['email_personalExtern'], $personal['telefon_personalExtern'],$personal['direccio_personalExtern'], $personal['naixement_personalExtern'], $personal['nss_personalExtern'], $personal['iban_personalExtern'], $personal['id_idioma']);
        }
        return $list;
    }
    
    //Metoda per filtra un nom de categoria
    public static function search($nom) {
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM categoria WHERE nom LIKE :nom');
        $req->execute(array('nom' => $nom));
        foreach($req->fetchAll() as $personal) {
            $list[] = new Categoria($personal['id'], $personal['nom'], $personal['sub_categoria'], $personal['creacio']);
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

