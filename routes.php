<?php
function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
    switch($controller) {
    case 'pages':
        $controller = new PagesController();
        break;
    case 'usuari':
        // necesitamos el modelo para después consultar a la BBDD
// desde el controlador
        require_once('models/usuari.php');
        $controller = new UsuariController();
        break;
    case 'personal':
        require_once('models/personal.php');
        $controller = new CategoriaController();
        break;
    }
    // llama al método guardado en $action
    $controller->{ $action }();
}
// lista de controladores que tenemos y sus acciones
// consideramos estos valores "permitidos"
// agregando una entrada para el nuevo controlador y sus acciones.
$controllers = array( 'pages' => ['login', 'error'],
                      'usuari' => ['index', 'show', 'formCreate', 'create', 'formUpdate', 'update', 'delete'],
                      'personal' => ['index', 'show', 'formCreate', 'create', 'formUpdate', 'update', 'delete']);
// verifica que tanto el controlador como la acción solicitados estén permitidos
// Si alguien intenta acceder a otro controlador y/o acción, será redirigido al método de error del controlador de pages.
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>