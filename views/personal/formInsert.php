<form class="w3-container" action="<?php echo constant('URL');?>pesonal/create" method="post" enctype="multipart/form-data"> 
    <p class="w3-xlarge">Nom</p>
    <input type='text' name='nom' class="w3-input w3-border" />

    <p class="w3-xlarge">Sub-categoria</p>

    <select name='sub_categoria'>
        <option>Selecciona...</option>
        <option value='Ninguno'>Ninguno</option>
        <option value='Sistemas'>Sistemas</option>
        <option value='Programacion'>Programacion</option>
        <option value='Otros'>Otros</option>
    </select>

    <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Create</button>

</form>