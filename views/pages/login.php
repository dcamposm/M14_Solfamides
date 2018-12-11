<p>LOGIN<p>
<form action="<?php echo constant('URL');?>usuari/login" method="post" enctype="multipart/form-data"> 
    <p>Username<p>
    <input type='text' name='user'/> 
    <p>Password<p>
    <input type='text' name='pass'/>
    <br><label><input type="checkbox" id="check" value="rem"> Remember username</label>
    <br><a href='<?php echo constant('URL');?>pages/rem'>Forgotten your username or password?</a>
    <br><button type="submit">Click</button><!--Cambiar el boton por una imagen(Mirar plantillas)-->
</form>

