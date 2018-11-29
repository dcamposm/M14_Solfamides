<p><strong>Modificar Categoria #<?php echo $cat->id; ?></strong></p>
<form action="?controller=categoria&action=update&id=<?php echo $cat->id; ?>" method="post" enctype="multipart/form-data"> 
    <table>        
        <tr>
            <td>Nom</td>
            <td><input type='text' name='nom' value='<?php echo $cat->nom; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Sub-categoria</td>
            <td>
                <select class='form-control' name='sub_categoria'>
                    <option>Selecciona...</option>
                    <option value='Ninguno' <?php if($cat->sub_categoria=='Ninguno'){ echo 'selected'; } ?>>Ninguno</option>
                    <option value='Sistemas' <?php if($cat->sub_categoria=='Sistemas'){ echo 'selected'; } ?>>Sistemas</option>
                    <option value='Programacion' <?php if($cat->sub_categoria=='Programacion'){ echo 'selected'; } ?>>Programacion</option>
                    <option value='Otros' <?php if($cat->sub_categoria=='Otros'){ echo 'selected'; } ?>>Otros</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </td>
        </tr>
    </table>
</form>