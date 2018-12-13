<!--PONER QUE SI $user ES FALSE QUE SALGA UN MENSAJE DE ERROR-->

<h2>Modificar Usuari #<?php echo $user->alias_usuari; ?></h2>
<form action="<?php echo constant('URL');?>usuari/update?alias=<?php echo $user->alias_usuari; ?>" method="post" enctype="multipart/form-data"> 
    <p>Alias</p>
    <input type='text' name='alias' value='<?php echo $user->alias_usuari; ?>' readonly="readonly"/> 
    
    <p>Password</p>
    <input type='password' name='pass' value='<?php echo $user->contrasenya_usuari; ?>'/> 
    
    <p>Nom</p>
    <input type='text' name='nom' value='<?php echo $user->nom_usuari; ?>'/>        
    
    <p>Cognom 1</p>
    <input type='text' name='cog1' value='<?php echo $user->primer_cognom_usuari; ?>'/> 
    
    <p>Cognom 2</p>
    <input type='text' name='cog2' value='<?php echo $user->segon_cognom_usuari; ?>'/>
    
    <p>Email</p>
    <input type='email' name='email' value='<?php echo $user->email_usuari; ?>'/> 
    
    <p>Telefon</p>
    <input type='text' name='tel' value='<?php echo $user->telefon_usuari; ?>'/>
    <br>
    <button type="submit">Modificar</button>
</form>
