<?php
class PagesController {
    public function login() {
        // simulación de datos obtenidos de un modelo
        require_once('views/pages/login.php');
    }
    public function error() {
        require_once('views/pages/error.php');
    }
}
?>