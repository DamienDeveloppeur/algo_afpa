<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.6</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  <br>
  Tableau N(6) en Entier <br>
  Variables i, k en Entier <br>
  Début<br>
   N(0) ← 1<br>
    Pour k ← 1 à 6 <br>
    N(k) ← N(k-1) + 2 <br>
    k Suivant <br>
    Pour i ← 0 à 6<br>
     Ecrire N(i)<br>
      i suivant<br>
       Fin<br>
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
<div  class="nes-field is-inline ">

<input  onclick="exo66()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS66" class="nes-balloon from-left">
      
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