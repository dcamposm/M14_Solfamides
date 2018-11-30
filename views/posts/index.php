<p><strong>Listado de los posts:</strong></p>
<?php foreach($posts as $post) { ?>
    <p>
        <?php echo $post->author; ?>
        <a href='<?php echo constant('URL');?>posts/show&id=<?php echo $post->id; ?>'>Ver contenido</a>
        <a href='<?php echo constant('URL');?>posts/formUpdate&id=<?php echo $post->id; ?>'>Modificar</a>
        <a href='<?php echo constant('URL');?>posts/delete&id=<?php echo $post->id; ?>'>Eliminar</a>
    </p>
<?php } ?>