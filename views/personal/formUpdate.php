<!--PONER QUE SI $user ES FALSE QUE SALGA UN MENSAJE DE ERROR-->

<h2>Modificar Personal #<?php echo $per->nom_personalExtern; ?></h2>
<form action="<?php echo constant('URL');?>personal/update?dni=<?php echo $per->dni_personalExtern; ?>" method="post" enctype="multipart/form-data"> 
    <p>DNI</p>
    <input type='text' name='dni' value='<?php echo $per->dni_personalExtern; ?>' readonly="readonly"/> 
    
    <p>Nom</p>
    <input type='text' name='nom' value='<?php echo $per->nom_personalExtern; ?>'/> 
    
    <p>Cognom 1</p>
    <input type='text' name='cog1' value='<?php echo $per->primer_cognom_personalExtern; ?>'/>        
    
    <p>Cognom 2</p>
    <input type='text' name='cog2' value='<?php echo $per->segon_cognom_personalExtern; ?>'/> 
    
    <p>Email</p>
    <input type='email' name='email' value='<?php echo $per->email_personalExtern; ?>'/> 
    
    <p>Telefon</p>
    <input type='text' name='telefon' value='<?php echo $per->telefon_personalExtern; ?>'/>
    
    <p>Direcció</p>
    <input type='text' name='dire' value='<?php echo $per->direccio_personalExtern; ?>'/>
    
    <p>Data de Naixement</p>
    <input type='date' name='naix' value='<?php echo $per->naixement_personalExtern; ?>'/>
    
    <p>NSS</p>
    <input type='text' name='nss' value='<?php echo $per->nss_personalExtern; ?>'/>
    
    <p>IBAN</p>
    <input type='text' name='iban' value='<?php echo $per->iban_personalExtern; ?>'/>
    <br>
    <button type="submit">Modificar</button>
</form>