<br>
<form class="w3-container" action="<?php echo constant('URL');?>personal/create" method="post" enctype="multipart/form-data"> 
    <p class="w3-xlarge">DNI</p>
    <input type='text' name='dni' class="w3-input w3-border" />
    <p class="w3-xlarge">Nom</p>
    <input type='text' name='nom' class="w3-input w3-border" />
    <p class="w3-xlarge">Primer Cognom</p>
    <input type='text' name='cog1' class="w3-input w3-border" />
    <p class="w3-xlarge">Segon Cognom</p>
    <input type='text' name='cog2' class="w3-input w3-border" />
    <p class="w3-xlarge">Email</p>
    <input type='email' name='email' class="w3-input w3-border" />
    <p class="w3-xlarge">Telefon</p>
    <input type='text' name='telefon' class="w3-input w3-border" />
    <p class="w3-xlarge">Direcció</p>
    <input type='text' name='dire' class="w3-input w3-border" />
    <p class="w3-xlarge">Data de Naixement</p>
    <input type='date' name='naix' class="w3-input w3-border" />
    <p class="w3-xlarge">NAF</p>
    <input type='text' name='nss' class="w3-input w3-border" />
    <p class="w3-xlarge">IBAN</p>
    <input type='text' name='iban' class="w3-input w3-border" />
    <p class="w3-xlarge">Idioma</p>
    <input type='text' name='idioma' class="w3-input w3-border" />
    
    <br>
    <br>
    <p class="w3-xlarge">Sub-categoria</p>

    <select class="w3-select w3-border" name='sub_categoria'>
        <option>Selecciona...</option>
        <option name='actor'>Actor</option>
        <option name='traductor'>Traductor</option>
        <option name='ajustador'>Ajustador</option>
        <option name='linguista'>Lingüista</option>
        <option name='direcDbl'>Director de doblatge</option>
        <option name='tecSala'>Tècnic de sala</option>
        <option name='direcProd'>Director de producció</option>
    </select>

    <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Create</button>

</form>