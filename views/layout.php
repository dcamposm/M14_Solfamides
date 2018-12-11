<DOCTYPE html>
<html>
    <head>
    </head>
    <link rel="stylesheet" type="text/css" href="http://localhost/blog_php_mvc/estil.css" />
    <body>
        <header class="w3-container w3-teal w3-bar">
            <a class="w3-bar-item w3-button" href='<?php echo constant('URL');?>'>Home</a>
            <a class="w3-bar-item w3-button" href='<?php echo constant('URL');?>posts/index'>Posts</a>
            <a class="w3-bar-item w3-button" href='<?php echo constant('URL');?>categoria/index'>Categorias</a>
            <a class="w3-bar-item w3-button" href='<?php echo constant('URL');?>posts/formCreate'>Afegir post</a>
            <a class="w3-bar-item w3-button" href='<?php echo constant('URL');?>categoria/formCreate'>Afegir categoria</a>
        </header>
        <main class="w3-container  w3-padding">
                <?php require_once('routes.php'); ?>
        </main>
        <footer class="w3-container w3-teal w3-right-align w3-display-bottommiddle" style="width: 100%;">
            Copyright
        </footer>
    </body>
</html>