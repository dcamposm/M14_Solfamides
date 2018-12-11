<form action="<?php echo constant('URL');?>posts/index" method="post" enctype="multipart/form-data"> 
    <select name='obj'>
        <option>id</option>
        <option value='author'>Autor</option>
        <option value='titol'>Titol</option>
        <option value='categoria'>Categoria</option> 
    </select>
    <button type="submit" class="w3-button w3-teal w3-padding-small">Ordenar</button>
</form>