<?php
class PostsController {
    public function index() {
        // Guardamos todos los posts en una variable
        $posts = Post::all();
        require_once('views/posts/index.php');
    }

    public function show() {
        // esperamos una url del tipo ?controller=posts&action=show&id=x
        // si no nos pasan el id redirecionamos hacia la pagina de error, el id tenemos que buscarlo en la BBDD
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');
    }

    public function formCreate() {
        require_once('views/posts/formInsert.php');
    }

    public function create() {
        if (!isset($_POST['author'])){
            return call('pages', 'error');
        }

        $image=!empty($_FILES["image"]["author"])
            ? sha1_file($_FILES['image']['tmp_author']) . "-" . basename($_FILES["image"]["author"]) : "";

        $post = Post::insert($_POST['author'], $_POST['content'], $_POST['titol'], $image);

        require_once('views/posts/formInsert.php');
    }
    
    public function formUpdate() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        
        require_once('views/posts/formUpdate.php');
    }
    
    public function update() {
        if (!isset($_POST['author'])){
            return call('pages', 'error');
        }

        $image=!empty($_FILES["image"]["author"])
            ? sha1_file($_FILES['image']['tmp_author']) . "-" . basename($_FILES["image"]["author"]) : "";
        
        $post = Post::modificar($_GET['id'], $_POST['author'], $_POST['content'], $_POST['titol'], $image);
        
        $posts = Post::all();
        
        require_once('views/posts/index.php');
    }
}
?>