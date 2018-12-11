<!--PONER QUE SI $user ES FALSE QUE SALGA UN MENSAJE DE ERROR-->

<form action="<?php echo constant('URL');?>usuari/create" method="post" enctype="multipart/form-data"> 
    <p>Author</p>
    <input type='text' name='author' class="w3-input w3-border" /> 
    
    <p>Titol</p>
    <input type='text' name='titol' class="w3-input w3-border" />        
    
    <p class="w3-xlarge">Post</p>
    <textarea name='content' class="w3-input w3-border"></textarea>

    <p class="w3-xlarge">Categoria</p>
    <select class="w3-select w3-border" name='id_categoria'>
        <option>Selecciona la categoria</option>
        <?php foreach($cats as $cat) { ?>
            <option value='<?php echo $cat->id; ?>'><?php echo $cat->nom; ?></option>
        <?php } ?>
    </select>

    <p class="w3-xlarge">Imagen</p> 
    <input type="file" name="image" class="w3-input w3-border"/>

    <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Create</button>
</form>