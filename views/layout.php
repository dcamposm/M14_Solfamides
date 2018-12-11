<DOCTYPE html>
<html>
    <head>
    </head>
    <link rel="stylesheet" type="text/css" href="http://localhost/m14_proyecto/estil.css" />
    <body>
        <header>
            <a href='<?php echo constant('URL');?>'>Perfil</a>
            <a href='<?php echo constant('URL');?>usuari/index'>Usuaris</a>
            <a href='<?php echo constant('URL');?>personal/index'>Perosonal</a>
        </header>
        <main>
            <?php require_once('routes.php'); ?>
        </main>
        <footer>
            Copyright
        </footer>
    </body>
</html>