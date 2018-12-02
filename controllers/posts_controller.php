<?php
class PostsController {
    public function index() {
        if (!isset($_POST['obj']) && !isset($_POST['search'])){
            $posts = Post::all();
            require_once('views/posts/index.php');
        }
        elseif (isset($_POST['obj'])) {
            switch ($_POST['obj']){
                case 'author':
                    $posts = Post::ordByAuthor();
                    require_once('views/posts/index.php');
                    break;
                case 'titol':
                    $posts = Post::ordByTitol();
                    require_once('views/posts/index.php');
                    break;
                case 'categoria':
                    $posts = Post::ordByCategoria();
                    require_once('views/posts/index.php');
                    break;
            }
        }
        elseif (isset($_POST['search'])) {
            $posts = Post::search($_POST['search']);
            require_once('views/posts/index.php');
        }
    }

    public function show() {
        // esperamos una url del tipo ?controller=posts&action=show&id=x
        // si no nos pasan el id redirecionamos hacia la pagina de error, el id tenemos que buscarlo en la BBDD
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        $cat = Categoria::find($post->id_categoria);
        //$categoria = $post->id_categoria;
        require_once('views/posts/show.php');
    }

    public function formCreate() {
        $cats = Categoria::all();
        
        require_once('views/posts/formInsert.php');
    }

    public function create() {
        if (!isset($_POST['author'])){
            return call('pages', 'error');
        }

        $image=!empty($_FILES["image"]["author"])
            ? sha1_file($_FILES['image']['tmp_author']) . "-" . basename($_FILES["image"]["author"]) : "";

        Post::insert($_POST['author'], $_POST['content'], $_POST['titol'], $image, $_POST['id_categoria']);

        require_once('views/posts/formInsert.php');
    }
    
    public function formUpdate() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        $cats = Categoria::all();
        
        require_once('views/posts/formUpdate.php');
    }
    
    public function update() {
        if (!isset($_POST['author'])){
            return call('pages', 'error');
        }

        $image=!empty($_FILES["image"]["author"])
            ? sha1_file($_FILES['image']['tmp_author']) . "-" . basename($_FILES["image"]["author"]) : "";
        
        Post::modificar($_GET['id'], $_POST['author'], $_POST['content'], $_POST['titol'], $image, $_POST['id_categoria']);
        
        $posts = Post::all();
        
        require_once('views/posts/index.php');
    }
    
    public function delete() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
       
        Post::eliminar($_GET['id']);
        $posts = Post::all();
        require_once('views/posts/index.php');
    }
}
?>