<h1>LOGIN</h1>
<div class="spacing_login">
    <form action="<?php echo constant('URL');?>usuari/login" method="post" enctype="multipart/form-data">
        <div>
            <div>
                <p>Username<p>
                <input type='text' name='user'/>
            </div>

            <div>
                <p>Password<p>
                <input type='text' name='pass'/>
            </div>
            <label><input type="checkbox" id="check" value="rem"> Remember username</label>
        </div>
        <div>
            <a href='<?php echo constant('URL');?>pages/rem'>Forgotten your username or password?</a>
        </div>
        <button type="submit">Click</button><!--Cambiar el boton por una imagen(Mirar plantillas)-->
    </form>
</div>

