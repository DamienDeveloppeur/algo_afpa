<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.3</p>
  <p>Ecrire un algorithme qui déclare un <br>
    tableau de 9 notes, dont on fait ensuite<br>
     saisir les valeurs par l’utilisateur.<br>
    </p>
</div>

 <?php 
$enonce = ob_get_clean();


ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array => tableau en numérique et nbr en numérique<br>
DEBUT<br>
POUR index == 0 à index == 8<br>
    ecrire "entrez une note"<br>
    lire nbr <br>
    ajouter nbr à array<br>
FIN DU POUR<br>
ecrire array<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
?>

<form>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<!-- <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS63" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
-->

  <input  onclick="exo63()" value="Testez le programme !" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS63" class="nes-balloon from-left">
        
      </div>
    </section>

<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>