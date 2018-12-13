<?php
class UsuariController {
    public function index() {

        $users = Usuari::mostrarTots();
        require_once('views/usuari/index.php');
    }
    
    public function login() {
        
        $ver = Usuari::login($_POST['user'],$_POST['pass']);

        if ($ver == true){
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
        if (!isset($_POST['alias'])){
            return call('pages', 'error');
        }
        
        $user = Usuari::alta($_POST['alias'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass']);
        
        require_once('views/usuari/formInsert.php');
    }
    //Metoda que carrega el formulari de update per categoria
    public function formUpdate() {
        if (!isset($_GET['alias'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $user = Usuari::buscar($_GET['alias']);
        
        require_once('views/usuari/formUpdate.php');
    }
    //Metoda que executa el metoda update del model categoria
    public function update() {
        if (!isset($_GET['alias'])){
            return call('pages', 'error');
        }

        Usuari::modificar($_GET['alias'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass']);
        
        $users = Usuari::mostrarTots();
        
        require_once('views/usuari/index.php');
    }
    //Metoda que executa el metoda eliminar del model categoria
    public function delete() {
        if (!isset($_GET['alias'])) {
            return call('pages', 'error');
        }
       
        Usuari::eliminar($_GET['alias']);
        $users = Usuari::mostrarTots();
        require_once('views/usuari/index.php');
    }
}