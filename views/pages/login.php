<p>LOGIN<p>
<form action="<?php echo constant('URL');?>posts/create" method="post" enctype="multipart/form-data"> 
    <p>Username<p>
    <input type='text' name='user'/> 
    <p>Password<p>
    <input type='text' name='pass'/>
    <br><label><input type="checkbox" id="cbox1" value="remember"> Remember username</label>
    <br><a>Forgotten your username or password?</a>
    <br><button type="submit">Click</button><!--Cambiar el boton por una imagen(Mirar plantillas)-->
</form>

