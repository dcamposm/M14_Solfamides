<DOCTYPE html>
<html>
    <head>
    </head>
    <link rel="stylesheet" type="text/css" href="http://localhost/m14_proyecto/estil.css" />
    <body>
        <div class="container">
            <header>
                <div class="header"> 
                    
                    <div class="nav">
                        <a href='<?php echo constant('URL');?>'>Perfil</a>
                        <a href='<?php echo constant('URL');?>usuari/index'>Usuaris</a>
                        <a href='<?php echo constant('URL');?>personal/index'>Perosonal</a>
                    </div>
                </div>
            </header>
            <main>
                <?php require_once('routes.php'); ?>
            </main>
            <footer>
                Copyright
            </footer>
        </div>
    </body>
</html>