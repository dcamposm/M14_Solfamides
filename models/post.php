<?php
class Post {
    // definimos tres atributos
    // los declaramos como públicos para acceder directamente $post->author
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content, $titol, $image) {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
        $this->titol = $titol;
        $this->image = $image;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts');
        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image']);
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
        return new Post($post['id'], $post['author'], $post['content'], $post['titol'], $post['image']);
    }

    public static function insert($author, $content, $titol, $image) {
        $db = Db::getInstance();
        
        $req = $db->prepare('INSERT INTO posts SET author = :author, content = :content, titol = :titol, image = :image');

        $req->execute(array('author' => $author, 'content' => $content, 'titol' => $titol, 'image' => $image));
        
        return $req;
    }
}
?>