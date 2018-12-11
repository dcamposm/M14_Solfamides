<?php
    define('URL','http://localhost/m14_proyecto/');
    require_once('connection.php');

    /*if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }*/    
    if(isset($_GET['url'])){
        $url = $_GET['url']; // 'posts/index'

        // Quita / innecesarias a la derecha.
        $url= rtrim($url, '/');

        // Devuelve un array utilizando la / como delimitador.
        $url = explode('/', $url); // ['posts', 'index']
        
        $controller = $url[0];
        $action = $url[1];
    }else {
        $controller = 'pages';
        $action = 'login';
    }
    
    require_once('views/layout.php');
?>
