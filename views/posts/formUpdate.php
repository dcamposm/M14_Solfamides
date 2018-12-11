<h2>Modificar Post #<?php echo $post->id; ?></h2>
<form class="w3-container" action="<?php echo constant('URL');?>posts/update&id=<?php echo $post->id; ?>" method="post" enctype="multipart/form-data"> 
    <p class="w3-xlarge">Author</p>
    <input type='text' name='author' value='<?php echo $post->author; ?>' class="w3-input w3-border" />

    <p class="w3-xlarge">Titol</p>
    <input type='text' name='titol' value='<?php echo $post->titol; ?>' class="w3-input w3-border" />

    <p class="w3-xlarge">Post</p>
    <textarea name='content' class="w3-input w3-border"><?php echo $post->content; ?></textarea>

    <p class="w3-xlarge">Categoria</p>
    <select class="w3-select w3-border"  name='id_categoria'>
        <option>Selecciona la categoria</option>
        <?php foreach($cats as $cat) { ?>
            <?php if($post->id_categoria==$cat->id){?>
                <option value='<?php echo $cat->id; ?>' selected>  
            <?php }
            else { ?>
                <option value='<?php echo $cat->id; ?>'>
            <?php }
             echo $cat->nom; ?></option>
        <?php } ?>
    </select>

    <p class="w3-xlarge">Imagen</p>
    <input type="file" name="image" value='<?php echo $post->image; ?>' class="w3-input w3-border"/>

    <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Modificar</button>

    </table>
</form>
