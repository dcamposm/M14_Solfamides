<?php
class Usuari {
    public $alias_usuari;
    public $nom_usuari;
    public $primer_cognom_usuari;
    public $segon_cognom_usuari;
    public $email_usuari;
    public $telefon_usuari;
    public $contrasenya_usuari;
    public $id_rol;

    public function __construct($alias_usuari, $nom_usuari, $primer_cognom_usuari, $segon_cognom_usuari, 
                                    $email_usuari, $telefon_usuari, $contrasenya_usuari, $id_rol) {
        
        $this->alias_usuari = $alias_usuari;
        $this->nom_usuari = $nom_usuari;
        $this->primer_cognom_usuari = $primer_cognom_usuari;
        $this->segon_cognom_usuari = $segon_cognom_usuari;
        $this->email_usuari = $email_usuari;
        $this->telefon_usuari = $telefon_usuari;
        $this->contrasenya_usuari = $contrasenya_usuari;
        $this->id_rol = $id_rol;
    }
    
    public static function mostrarTots() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM usuari ORDER BY alias_usuari');
        
        foreach($req->fetchAll() as $user) {
            $list[] = new Usuari($user['alias_usuari'], $user['nom_usuari'], $user['primer_cognom_usuari'], $user['segon_cognom_usuari'], $user['email_usuari'], $user['telefon_usuari'], $user['contrasenya_usuari'], $user['id_rol']);
        }
        return $list;
    }
    
    public static function buscar($alias_usuari) {
        $db = Db::getInstance();
        
        $req = $db->prepare('SELECT * FROM usuari WHERE alias_usuari =:alias_usuari');
        
        $req->execute(array('alias_usuari' => $alias_usuari));
        $user = $req->fetch();
        return new Usuari($user['alias_usuari'], $user['nom_usuari'], $user['primer_cognom_usuari'], $user['segon_cognom_usuari'], $user['email_usuari'], $user['telefon_usuari'], $user['contrasenya_usuari'], $user['id_rol']);
    }
    //Metode per donar d'alta
    public static function alta($alias_usuari, $nom_usuari, $primer_cognom_usuari, $segon_cognom_usuari, 
                                    $email_usuari, $telefon_usuari, $contrasenya_usuari) {
        $db = Db::getInstance();
        
        $req = $db->prepare('INSERT INTO usuari SET alias_usuari = :alias_usuari, nom_usuari = :nom_usuari, primer_cognom_usuari = :primer_cognom_usuari, segon_cognom_usuari = :segon_cognom_usuari, email_usuari = :email_usuari, telefon_usuari = :telefon_usuari, contrasenya_usuari = :contrasenya_usuari');

        if ($req->execute(array('alias_usuari' => $alias_usuari, 'nom_usuari' => $nom_usuari, 'primer_cognom_usuari' => $primer_cognom_usuari, 'segon_cognom_usuari' => $segon_cognom_usuari, 'email_usuari' => $email_usuari, 'telefon_usuari' => $telefon_usuari, 'contrasenya_usuari' => $contrasenya_usuari))) {
            return true;
        } else {
            return false;
        }
    }
    //Metode per modificar
    public static function modificar($alias_usuari, $nom_usuari, $primer_cognom_usuari, $segon_cognom_usuari, 
                                    $email_usuari, $telefon_usuari, $contrasenya_usuari) {
        $db = Db::getInstance();
        
        $req = $db->prepare('UPDATE usuari SET alias_usuari = :alias_usuari, nom_usuari = :nom_usuari, primer_cognom_usuari = :primer_cognom_usuari, segon_cognom_usuari = :segon_cognom_usuari, email_usuari = :email_usuari, telefon_usuari = :telefon_usuari, contrasenya_usuari = :contrasenya_usuari WHERE alias_usuari = :alias_usuari');

        if ($req->execute(array('alias_usuari' => $alias_usuari, 'nom_usuari' => $nom_usuari, 'primer_cognom_usuari' => $primer_cognom_usuari, 'segon_cognom_usuari' => $segon_cognom_usuari, 'email_usuari' => $email_usuari, 'telefon_usuari' => $telefon_usuari, 'contrasenya_usuari' => $contrasenya_usuari))) {
            return true;
        } else {
            return false;
        }
    }
    //Metode per eliminar
    public static function eliminar($alias_usuari) {
        $db = Db::getInstance();
        
        $req = $db->prepare('DELETE FROM usuari WHERE alias_usuari = :alias_usuari');
        
        $req->execute(array('alias_usuari' => $alias_usuari));
    }
    
    //Metode per fer login
    
    public static function login($alias_usuari, $contrasenya_usuari) {
        $db = Db::getInstance();
        
        $req = $db->query('SELECT alias_usuari, contrasenya_usuari FROM usuari WHERE alias_usuari LIKE "'.$alias_usuari.'" AND contrasenya_usuari LIKE "'.$contrasenya_usuari.'"');
        
        $count = 0;
        
        foreach($req->fetchAll() as $user) {
            $count++;
        }
        if ($count == 1) {
            return 1;
        } else {
            return 0;
        }
 
    }
}
?>
