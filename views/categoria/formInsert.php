<form action="?controller=categoria&action=create" method="post" enctype="multipart/form-data"> 
    <table>
        <tr>
            <td>Nom</td>
            <td><input type='text' name='author' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Sub-categoria</td>
            <td>
                <select class='form-control' name='category_id'>
                    <option>Selecciona</option>
                    <?php foreach ($sub_cat as $value) {
                        echo "<option value=\"$value\">$value</option>";
                    }
                    ?>                                  
                </select>
            </td>
        </tr>
        <tr
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>