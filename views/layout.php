<DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <header>
            <a href='<?php echo constant('URL');?>'>Home</a>
            <a href='<?php echo constant('URL');?>posts/index'>Posts</a>
            <a href='<?php echo constant('URL');?>categoria/index'>Categorias</a>
            <a href='<?php echo constant('URL');?>posts/formCreate'>Afegir post</a>
            <a href='<?php echo constant('URL');?>categoria/formCreate'>Afegir categoria</a>
        </header>
                <?php require_once('routes.php'); ?>
        <footer>
            Copyright
        </footer>
    </body>
</html>