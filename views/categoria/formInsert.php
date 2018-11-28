<form action="?controller=categoria&action=create" method="post" enctype="multipart/form-data"> 
    <table>
        <tr>
            <td>Nom</td>
            <td><input type='text' name='nom' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Sub-categoria</td>
            <td>
                <select class='form-control' name='sub_categoria'>
                    <option>Selecciona...</option>
                    <option value='Ninguno'>Ninguno</option>
                    <option value='Sistemas'>Sistemas</option>
                    <option value='Programacion'>Programacion</option>
                    <option value='Otros'>Otros</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>