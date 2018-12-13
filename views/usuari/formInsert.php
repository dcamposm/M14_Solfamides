<!--PONER QUE SI $user ES FALSE QUE SALGA UN MENSAJE DE ERROR-->

<form action="<?php echo constant('URL');?>usuari/create" method="post" enctype="multipart/form-data"> 
    <p>Alias</p>
    <input type='text' name='alias'/> 
    
    <p>Password</p>
    <input type='password' name='pass'/> 
    
    <p>Nom</p>
    <input type='text' name='nom'/>        
    
    <p>Cognom 1</p>
    <input type='text' name='cog1'/> 
    
    <p>Cognom 2</p>
    <input type='text' name='cog2'/>
    
    <p>Email</p>
    <input type='email' name='email'/> 
    
    <p>Telefon</p>
    <input type='text' name='tel'/>
    <br>
    <button type="submit">Crear</button>
</form>