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
    public static function buscar($dni_personalExtern) {
        
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM usuaris WHERE dni_personalExtern =:dni_personalExtern');
        
        $req->execute(array('dni_personalExtern' => $dni_personalExtern));
        $personal = $req->fetch();
        return new Personal($personal['dni_personalExtern'], $personal['nom_personalExtern'], $personal['primer_cognom_personalExtern'], $personal['segon_cognom_personalExtern'], $personal['email_personalExtern'], $personal['telefon_personalExtern'],$personal['direccio_personalExtern'], $personal['naixement_personalExtern'], $personal['nss_personalExtern'], $personal['iban_personalExtern'], $personal['id_idioma']);
        }
    
    
    //Metodes per donar d'alta
    public static function alta() {
         $db = Db::getInstance();
        
        $req = $db->prepare('INSERT INTO personalextern SET dni_personalExtern = :dni_personalExtern, nom_personalExtern = :nom_personalExtern, primer_cognom_personalExtern = :primer_cognom_personalExtern, segon_cognom_personalExtern = :segon_cognom_personalExtern, email_personalExtern = :email_personalExtern, telefon_personalExtern = :telefon_personalExtern, direccio_personalExtern = :direccio_personalExtern, nss_personalExtern = :nss_personalExtern, iban_personalExtern = :iban_personalExtern, id_idioma = :id_idioma');

        if ($req->execute(array('dni_personalExtern' => $dni_personalExtern, 'nom_personalExtern' => $nom_personalExtern, 'primer_cognom_personalExtern' => $primer_cognom_personalExtern, 'segon_cognom_personalExtern' => $segon_cognom_personalExtern, 'email_personalExtern' => $email_personalExtern, 'telefon_personalExtern' => $telefon_personalExtern, 'direccio_personalExtern' => $direccio_personalExtern, 'nss_personalExtern' => $nss_personalExtern, 'iban_personalExtern' => $iban_personalExtern, 'id_idioma' => $id_idioma))) {
            return true;
        } else {
            return false;
        }
    }
    
    //Metodes per modificar
    public static function modificar() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria ORDER BY sub_categoria ASC');
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }
    
    //Eliminar
    public static function eliminar() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM categoria ORDER BY creacio ASC');
        
        foreach($req->fetchAll() as $cat) {
            $list[] = new Categoria($cat['id'], $cat['nom'], $cat['sub_categoria'], $cat['creacio']);
        }
        return $list;
    }

}

