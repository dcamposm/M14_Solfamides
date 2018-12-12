<?php
class PersonalController {
    public function index() {

        $pers = Personal::mostrarTots();
        require_once('views/personal/index.php');
    }

    //Metoda que carrega el form per fer Inserts
    public function formCreate() {     
        require_once('views/personal/formInsert.php');
    }
    //Metoda que crida al metoda de inserts del model post
    public function create() {
        if (!isset($_POST['dni'])){
            return call('pages', 'error');
        }

        Personal::alta($_POST['dni'], $_POST['nom'], $_POST['cog1'], $_POST['cog2'], $_POST['email'], $_POST['telefon'], $_POST['dire'], $_POST['naix'], $_POST['nss'], $_POST['iban'],$_POST['idioma']);

        require_once('views/personal/formInsert.php');
    }
    //Metoda que carrega el formulari de modificar
    public function formUpdate() {
        if (!isset($_GET['dni'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $per = Personal::buscar($_GET['dni']);
        
        require_once('views/personal/formUpdate.php');
    }
    //Metoda que crida al metoda update del post
    public function update() {
        if (!isset($_GET['dni'])){
            return call('pages', 'error');
        }

        Personal::modificar($_GET['dni'], $_POST['nom'], $_POST['cog1'], $_POST['cog2'], $_POST['email'], $_POST['telefon'], $_POST['dire'], $_POST['naix'], $_POST['nss'], $_POST['iban']);
        
        $pers = Personal::mostrarTots();
        
        require_once('views/personal/index.php');
    }
    //Metoda que crida el metoda d'eliminar del post
    public function delete() {
        if (!isset($_GET['dni'])) {
            return call('pages', 'error');
        }
       
        Personal::eliminar($_GET['dni']);
        $pers = Personal::mostrarTots();
        require_once('views/personal/index.php');
    }
}
?>