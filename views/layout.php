<DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <header>
            <a href='/blog_php_mvc'>Home</a>
            <a href='?controller=posts&action=index'>Posts</a>
            <a href='?controller=categoria&action=index'>Categorias</a>
            <a href='?controller=posts&action=formCreate'>Afegir post</a>

        </header>
                <?php require_once('routes.php'); ?>
        <footer>
            Copyright
        </footer>
    </body>
</html>