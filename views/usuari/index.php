<h2>Usuaris:</h2>
<a href='<?php echo constant('URL');?>usuari/formCreate'>Insertar Usuari</a>
<table>
    <tr>
        <th>Alias #</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Segon Cognom</th>
        <th>Email</th>
        <th>Telèfon</th>
    </tr>
<?php foreach($users as $user) { ?>
    <tr>
        <td><?php echo $user->alias_usuari; ?></td>
        <td><?php echo $user->nom_usuari; ?></td>
        <td><?php echo $user->primer_cognom_usuari; ?></td>
        <td><?php echo $user->segon_cognom_usuari; ?></td>
        <td><?php echo $user->email_usuari; ?></td>
        <td><?php echo $user->telefon_usuari; ?></td>
        <td><a href='<?php echo constant('URL');?>usuari/formUpdate&alias=<?php echo $user->alias_usuari; ?>'>Modificar</a></td>
        <td><a href='<?php echo constant('URL');?>usuari/delete&alias=<?php echo $user->alias_usuari; ?>'>Eliminar</a></td>
    </tr>
    

<?php } ?>
    </table>