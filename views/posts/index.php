<h2>Listado de los posts:</h2>
<?php foreach($posts as $post) { ?>
    <p class="w3-display-container w3-panel w3-border-top w3-border-bottom">
        <?php echo $post->author; ?>
        <a class="w3-button w3-green w3-margin-left" href='<?php echo constant('URL');?>posts/show&id=<?php echo $post->id; ?>'>Ver contenido</a>
        <a class="w3-display-middle w3-button w3-blue" href='<?php echo constant('URL');?>posts/formUpdate&id=<?php echo $post->id; ?>'>Modificar</a>
        <a class="w3-display-right w3-button w3-red" href='<?php echo constant('URL');?>posts/delete&id=<?php echo $post->id; ?>'>Eliminar</a>
    </p>
<?php } ?>