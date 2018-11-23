<form action="?controller=posts&action=create" method="post" enctype="multipart/form-data"> 
    <table>
        <tr>
            <td>Author</td>
            <td><input type='text' name='author' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Titol</td>
            <td><input type='text' name='titol' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Post</td>
            <td><textarea name='content' class='form-control'></textarea></td>
        </tr>
 		<tr>
		    <td>Imagen</td>
		    <td><input type="file" name="image" /></td>
		</tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>