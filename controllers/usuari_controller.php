<?php
class UsuariController {
    public function index() {

        $users = Usuari::mostrarTots();
        require_once('views/usuari/index.php');
    }
    
    public function login() {
        
        $ver = Usuari::login($_POST['user'],$_POST['pass']);
        
        if ($ver === true){
            $users = Usuari::mostrarTots();
            require_once('views/usuari/index.php');
        }
        else {
            require_once('views/pages/login.php');
        }
    }
    
    //Metoda per carregar el formulari de insert per categoria
    public function formCreate() {
        require_once('views/usuari/formInsert.php');
    }
    //Metoda que executa el metoda de creacio de categoria
    public function create() {
        if (!isset($_POST['nom'])){
            return call('pages', 'error');
        }
        
        Usuari::insert();

        require_once('views/usuari/formInsert.php');
    }
    //Metoda que carrega el formulari de update per categoria
    public function formUpdate() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $user = Usuari::find($_GET['id']);
        
        require_once('views/usuari/formUpdate.php');
    }
    //Metoda que executa el metoda update del model categoria
    public function update() {
        if (!isset($_POST['nom'])){
            return call('pages', 'error');
        }

        Usuari::modificar();
        
        $users = Usuari::mostrarTots();
        
        require_once('views/usuari/index.php');
    }
    //Metoda que executa el metoda eliminar del model categoria
    public function delete() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
       
        Usuari::eliminar($_GET['id']);
        $users = Usuari::mostrarTots();
        require_once('views/usuari/index.php');
    }
}