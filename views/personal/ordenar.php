<form action="<?php echo constant('URL');?>categoria/index" method="post" enctype="multipart/form-data"> 
    <select name='obj'>
        <option>id</option>
        <option value='nombre'>Nombre</option>
        <option value='sub_categoria'>Sub-Categoria</option>
        <option value='creacio'>Fecha de creacion</option> 
    </select>
    <button type="submit" class="w3-button w3-teal w3-padding-small">Ordenar</button>
</form>

