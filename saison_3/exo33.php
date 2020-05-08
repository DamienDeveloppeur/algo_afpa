<?php
ob_start();
?>
<div class="nes-container with-title is-centered">
  <p class="title">exercice 3.3</p>
  <p>Ecrire un algorithme qui demande trois noms à l’utilisateur et <br>
    l’informe ensuite s’ils sont rangés ou non dans l’ordre alphabétique.</p>
</div>
<?php
$enonce = ob_get_clean();
ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-Code</p>
  <p>
DEBUT<br>
ECRIRE "Entrez un nombre : "<br>
lire nbr <br>
SI (nbr > 0) ALORS <br>
Ecrire "votre nombre est positif"<br>
sinon <br>
ecrire "votre nombre est negatif"<br>
FIN de si <br>
FIN<br>

  </p>
</div>

<?php
$pseudocode = ob_get_clean();

ob_start();
?>
  <form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un premier nom  </label>
  <input type="text" id="FJS3331" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <label for="dark_field" style="color:#fff;">Entrez un deuxieme nom </label>
  <input type="text" id="FJS3332" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <label for="dark_field" style="color:#fff;">Entrez un troisième nom </label>
  <input type="text" id="FJS3333" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo33()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS33" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();
ob_start();

$jquerry = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


include '../template.html';
?>
