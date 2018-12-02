<?php
class CategoriaController {
    public function index() {
        if (!isset($_POST['obj']) && !isset($_POST['search'])){
            // Guardamos todos los posts en una variable
            $cats = Categoria::all();
            require_once('views/categoria/index.php');
        }
        elseif (isset($_POST['obj'])) {
            switch ($_POST['obj']){
                case 'nombre':
                    $cats = Categoria::ordByName();
                    require_once('views/categoria/index.php');
                    break;
                case 'sub_categoria':
                    $cats = Categoria::ordBySub();
                    require_once('views/categoria/index.php');
                    break;
                case 'creacio':
                    $cats = Categoria::ordByDate();
                    require_once('views/categoria/index.php');
                    break;
            }
        }
        elseif (isset($_POST['search'])) {
            $cats = Categoria::search($_POST['search']);
            require_once('views/categoria/index.php');
        }
    }
    //Metoda que crida el meoda find del post
    public function show() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }

        $cat = Categoria::find($_GET['id']);
        //$categoria = $post->id_categoria;
        require_once('views/categoria/show.php');
    }
    //Metoda per carregar el formulari de insert per categoria
    public function formCreate() {
        require_once('views/categoria/formInsert.php');
    }
    //Metoda que executa el metoda de creacio de categoria
    public function create() {
        if (!isset($_POST['nom'])){
            return call('pages', 'error');
        }
        
        Categoria::insert($_POST['nom'], $_POST['sub_categoria']);

        require_once('views/categoria/formInsert.php');
    }
    //Metoda que carrega el formulari de update per categoria
    public function formUpdate() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $cat = Categoria::find($_GET['id']);
        
        require_once('views/categoria/formUpdate.php');
    }
    //Metoda que executa el metoda update del model categoria
    public function update() {
        if (!isset($_POST['nom'])){
            return call('pages', 'error');
        }

        Categoria::modificar($_GET['id'], $_POST['nom'], $_POST['sub_categoria']);
        
        $cats = Categoria::all();
        
        require_once('views/categoria/index.php');
    }
    //Metoda que executa el metoda eliminar del model categoria
    public function delete() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
       
        Categoria::eliminar($_GET['id']);
        $cats = Categoria::all();
        require_once('views/categoria/index.php');
    }
}