<br>
<h2>Listado de el personal:</h2>
<a href='<?php echo constant('URL');?>personal/formCreate'>Insertar Personal</a>
<br>
<?php foreach($pers as $personal) { ?>
    <p>
        <?php echo $personal->nom_personalExtern; ?>
        <a href='<?php echo constant('URL');?>personal/show&dni=<?php echo $personal->dni_personalExtern; ?>'>Ver contenido</a>
        <a href='<?php echo constant('URL');?>personal/formUpdate&dni=<?php echo $personal->dni_personalExtern; ?>'>Modificar</a>
        <a href='<?php echo constant('URL');?>personal/delete&dni=<?php echo $personal->dni_personalExtern; ?>'>Eliminar</a>
    </p>
<?php } ?>
