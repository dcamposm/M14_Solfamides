<h2>Listado de las categorias:</h2>
<?php require_once('ordenar.php');?>
<?php require_once('search.php');?>
<?php foreach($cats as $cat) { ?>
    <p class="w3-display-container w3-panel w3-border-top w3-border-bottom">
        <?php echo $cat->nom; ?>
        <a class="w3-button w3-green w3-margin-left" href='<?php echo constant('URL');?>categoria/show&id=<?php echo $cat->id; ?>'>Ver contenido</a>
        <a class="w3-display-middle w3-button w3-blue" href='<?php echo constant('URL');?>categoria/formUpdate&id=<?php echo $cat->id; ?>'>Modificar</a>
        <a class="w3-display-right w3-button w3-red" href='<?php echo constant('URL');?>categoria/delete&id=<?php echo $cat->id; ?>'>Eliminar</a>
    </p>
<?php } ?>
