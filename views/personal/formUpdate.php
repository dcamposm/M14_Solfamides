<h2>Modificar Categoria #<?php echo $cat->id; ?></h2>
<form class="w3-container" action="<?php echo constant('URL');?>categoria/update&id=<?php echo $cat->id; ?>" method="post" enctype="multipart/form-data"> 
    <p class="w3-xlarge">Nom</p>
    <input type='text' name='nom' value='<?php echo $cat->nom; ?>' class="w3-input w3-border" />
    
    <p class="w3-xlarge">Sub-categoria</p>
    <select class="w3-select w3-border" name='sub_categoria'>
        <option>Selecciona...</option>
        <option value='Ninguno' <?php if($cat->sub_categoria=='Ninguno'){ echo 'selected'; } ?>>Ninguno</option>
        <option value='Sistemas' <?php if($cat->sub_categoria=='Sistemas'){ echo 'selected'; } ?>>Sistemas</option>
        <option value='Programacion' <?php if($cat->sub_categoria=='Programacion'){ echo 'selected'; } ?>>Programacion</option>
        <option value='Otros' <?php if($cat->sub_categoria=='Otros'){ echo 'selected'; } ?>>Otros</option>
    </select>

    <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Modificar</button>
</form>