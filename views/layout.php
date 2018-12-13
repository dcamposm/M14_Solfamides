<DOCTYPE html>
<html>
    <head>
    </head>
    <link rel="stylesheet" type="text/css" href="http://localhost/m14_proyecto/estil.css" />
    <body>
        <div class="container">
            <header>
                <div class="header"> 
                    <img src="http://localhost/m14_proyecto/assets/images/sonilab_logo.png" alt="Sonilab Studios" class="logo">
                    <div class="menu">
                        <div class="nav">
                            <a href='#'>Projecte</a>
                            <a href='<?php echo constant('URL');?>personal/index'>Personal</a>
                            <a href='#'>Calendari</a>
                            <a href='#'>Registres</a>
                            <a href='<?php echo constant('URL');?>usuari/index'>Usuaris</a>
                            <a href='<?php echo constant('URL');?>'>Perfil</a>
                        </div>
                        <a href='#'>
                            <img src="http://localhost/m14_proyecto/assets/images/logout.png" alt="Sonilab Studios" class="logout">
                        </a>
                    </div>
                </div>
            </header>
            
            <div class="main">
                <?php require_once('routes.php'); ?>
            </div>
            
            <footer>
                <div class="footer">
                    <div class="info">
                        <p>Copyright</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
