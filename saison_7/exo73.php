<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

DEBUT

FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();



ob_start();

$showJS= ob_get_clean();

ob_start();

$showjquerry = ob_get_clean();

ob_start();

$showphp = ob_get_clean();

ob_start();
?>
<form>

<div class="nes-field is-inline noircnoir">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS73" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo73()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>
<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS73" class="nes-balloon from-left">
      
    </div>
  </section>
<?php
$JS = ob_get_clean();

ob_start();

$jquerry = ob_get_clean();

ob_start();
?>

<?php
$formulaire = ob_get_clean();


require('../template.html');