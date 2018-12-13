<br>
<form action="<?php echo constant('URL');?>personal/create" method="post" enctype="multipart/form-data"> 
    <p>DNI</p>
    <input type='text' name='dni'/>

    <p>Nom</p>
    <input type='text' name='nom'/>
    <p>Primer Cognom</p>
    <input type='text' name='cog1'/>
    <p>Segon Cognom</p>
    <input type='text' name='cog2' />
    <p>Email</p>
    <input type='email' name='email' />
    <p>Telefon</p>
    <input type='text' name='telefon'/>
    <p>Direcció</p>
    <input type='text' name='dire'/>
    <p>Data de Naixement</p>
    <input type='date' name='naix' />
    <p>NSS</p>
    <input type='text' name='nss' />
    <p>IBAN</p>
    <input type='text' name='iban' />
    <!--<p>Idioma</p>
    <input type='text' name='idioma' />-->

    <br>
    <!--<br>
    <p>Sub-categoria</p>

    <select name='sub_categoria'>
        <option>Selecciona...</option>
        <option name='actor'>Actor</option>
        <option name='traductor'>Traductor</option>
        <option name='ajustador'>Ajustador</option>
        <option name='linguista'>Lingüista</option>
        <option name='direcDbl'>Director de doblatge</option>
        <option name='tecSala'>Tècnic de sala</option>
        <option name='direcProd'>Director de producció</option>
    </select>-->

    <button type="submit">Create</button>

</form>
