<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.2</p>
  <p>Ecrire un algorithme qui déclare et remplisse <br>
      un tableau contenant les six voyelles de l’alphabet latin..</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
var arrayLetter = tableau avec des variables de type string
DEBUT
pour index 0 à 5
    SI index ==0
    ALORS ajouter a dans arrayLetter

    SINON SI index == 1
    ajouter e dans arrayLetter 

    SINON SI index == 2
    ajouter i dans arrayLetter 

    SINON SI index == 3
    ajouter o dans arrayLetter 

    SINON SI index == 4
    ajouter u dans arrayLetter 

    SINON SI index == 5
    ajouter y dans arrayLetter 
    FIN DE SI
    Ecrire arrayLetter
FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">

  <input  onclick="exo62()" value="Envoyer" class="nes-btn is-error"></input>
  </div>


<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS62" class="nes-balloon from-left">
        
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