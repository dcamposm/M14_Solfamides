<p><strong>Listado de las categorias:</strong></p>
<?php foreach($cats as $cat) { ?>
    <p>
        <?php echo $cat->nom; ?>
        <a href='?controller=categoria&action=show&id=<?php echo $cat->id; ?>'>Ver contenido</a>
        <a href='?controller=categoria&action=formUpdate&id=<?php echo $cat->id; ?>'>Modificar</a>
        <a href='?controller=categoria&action=delete&id=<?php echo $cat->id; ?>'>Eliminar</a>
    </p>
<?php } ?>
