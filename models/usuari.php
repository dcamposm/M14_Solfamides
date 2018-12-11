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
        
        $req = $db->prepare('SELECT * FROM usuaris WHERE alias_usuari =:alias_usuari');
        
        $req->execute(array('alias_usuari' => $alias_usuari));
        $user = $req->fetch();
        return new Usuari($user['alias_usuari'], $user['nom_usuari'], $user['primer_cognom_usuari'], $user['segon_cognom_usuari'], $user['email_usuari'], $user['telefon_usuari'], $user['contrasenya_usuari'], $user['id_rol']);
    }
    //Metode per donar d'alta
    public static function alta($alias_usuari, $nom_usuari, $primer_cognom_usuari, $segon_cognom_usuari, 
                                    $email_usuari, $telefon_usuari, $contrasenya_usuari, $id_rol) {
        $db = Db::getInstance();
        
        $req = $db->prepare('INSERT INTO usuaris SET alias_usuari = :alias_usuari, nom_usuari = :nom_usuari, primer_cognom_usuari = :primer_cognom_usuari, segon_cognom_usuari = :segon_cognom_usuari, email_usuari = :email_usuari, telefon_usuari = :telefon_usuari, contrasenya_usuari = :contrasenya_usuari, id_rol = :id_rol');

        $req->execute(array('alias_usuari' => $alias_usuari, 'nom_usuari' => $nom_usuari, 'primer_cognom_usuari' => $primer_cognom_usuari, 'segon_cognom_usuari' => $segon_cognom_usuari, 'email_usuari' => $email_usuari, 'telefon_usuari' => $telefon_usuari, 'contrasenya_usuari' => $contrasenya_usuari, 'id_rol' => $id_rol));
    }
    //Metoda per fer update
    public static function modificar($id, $author, $content, $titol, $image, $id_categoria) {
        $db = Db::getInstance();
        
        $req = $db->prepare('UPDATE posts SET author = :author, content = :content, titol = :titol, image = :image, id_categoria = :id_categoria WHERE id = :id');

        $req->execute(array('id' => $id,'author' => $author, 'content' => $content, 'titol' => $titol, 'image' => $image, 'id_categoria' => $id_categoria));
    }
    //Metoda per fer delete
    public static function eliminar($id) {
        $db = Db::getInstance();
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
    }
    
    
}
?>
