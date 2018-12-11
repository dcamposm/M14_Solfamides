<?php
class PersonalController {
    public function index() {

        $posts = Post::all();
        require_once('views/posts/index.php');
    }

    //Metoda que carrega el form per fer Inserts
    public function formCreate() {
        $pers = Categoria::all();       
        require_once('views/personal/formInsert.php');
    }
    //Metoda que crida al metoda de inserts del model post
    public function create() {
        if (!isset($_POST['dni'])){
            return call('pages', 'error');
        }

        $image=!empty($_FILES["image"]["author"])
            ? sha1_file($_FILES['image']['tmp_author']) . "-" . basename($_FILES["image"]["author"]) : "";

        Post::insert($_POST['author'], $_POST['content'], $_POST['titol'], $image, $_POST['id_categoria']);

        require_once('views/posts/formInsert.php');
    }
    //Metoda que carrega el formulari de modificar
    public function formUpdate() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        $cats = Categoria::all();
        
        require_once('views/posts/formUpdate.php');
    }
    //Metoda que crida al metoda update del post
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
    //Metoda que crida el metoda d'eliminar del post
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