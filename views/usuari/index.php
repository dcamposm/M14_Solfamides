<h2>Usuaris:</h2>
<?php foreach($users as $user) { ?>
<table>
    <tr>
            <th>Alias #</th>
            <th>Nom</th>
            <th>Cognom</th>
            <th>Segon Cognom</th>
            <th>email</th>
            <th>Telèfon</th>
        </tr>

    <tr>
        <?php echo $user->alias_usuari; ?>
        <?php echo $user->nom_usuari; ?>
        <?php echo $user->primer_cognom_usuari; ?>
        <?php echo $user->segon_cognom_usuari; ?>
        <?php echo $user->email_usuari; ?>
        <?php echo $user->telefon_usuari; ?>
    </tr>
    </table>
<?php } ?>
