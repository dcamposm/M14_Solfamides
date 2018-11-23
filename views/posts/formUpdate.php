<p><strong>Modificar Post #<?php echo $post->id; ?></strong></p>
<form action="?controller=posts&action=update&id=<?php echo $post->id; ?>" method="post" enctype="multipart/form-data"> 
    <table>        
        <tr>
            <td>Author</td>
            <td><input type='text' name='author' value='<?php echo $post->author; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Titol</td>
            <td><input type='text' name='titol' value='<?php echo $post->titol; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Post</td>
            <td><textarea name='content' class='form-control'><?php echo $post->content; ?></textarea></td>
        </tr>
            <tr>
                <td>Imagen</td>
                <td><input type="file" name="image" value='<?php echo $post->image; ?>'/></td>
            </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </td>
        </tr>
    </table>
</form>
