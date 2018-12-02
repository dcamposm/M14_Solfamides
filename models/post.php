<?php
class Post {
    // definimos tres atributos
    // los declaramos como públicos para acceder directamente $post->author
    public $id;
    public $author;
    public $content;
    public $titol;
    public $image;
    public $id_categoria;

    public function __construct($id, $author, $content, $titol, $image, $id_categoria) {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
        $this->titol = $titol;
        $this->image = $image;
        $this->id_categoria = $id_categoria;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts ORDER BY id');
        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image'], $post['id_categoria']);
        }
        return $list;
    }
    
    public static function search($author) {
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM posts WHERE author LIKE :author');
        $req->execute(array('author' => $author));
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image'], $post['id_categoria']);
        }
        return $list;
    }
    
    public static function ordByAuthor() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts ORDER BY author ASC');
        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image'], $post['id_categoria']);
        }
        return $list;
    }
    public static function ordByTitol() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts ORDER BY titol ASC');
        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image'], $post['id_categoria']);
        }
        return $list;
    }
    public static function ordByCategoria() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts ORDER BY id_categoria ASC');
        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image'], $post['id_categoria']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        return new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image'], $post['id_categoria']);
    }

    public static function insert($author, $content, $titol, $image, $id_categoria) {
        $db = Db::getInstance();
        
        $req = $db->prepare('INSERT INTO posts SET author = :author, content = :content, titol = :titol, image = :image, id_categoria = :id_categoria');

        $req->execute(array('author' => $author, 'content' => $content, 'titol' => $titol, 'image' => $image, 'id_categoria' => $id_categoria));
    }
    
    public static function modificar($id, $author, $content, $titol, $image, $id_categoria) {
        $db = Db::getInstance();
        
        $req = $db->prepare('UPDATE posts SET author = :author, content = :content, titol = :titol, image = :image, id_categoria = :id_categoria WHERE id = :id');

        $req->execute(array('id' => $id,'author' => $author, 'content' => $content, 'titol' => $titol, 'image' => $image, 'id_categoria' => $id_categoria));
    }
    
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