<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Container.is-dark</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  variable array => tableau en numérique, nbr, somme et moy en numérique<br>
DEBUT<br>
POUR index  0 à index 8<br>
    ecrire "entrez une note"<br>
    lire nbr <br>
    ajouter nbr à array<br>
    somme = somme + nbr 
    moy = somme / array.lenght
FIN DU POUR<br>
ecrire somme et moy<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<div class="nes-field is-inline">

<input  onclick="exo67()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS67" class="nes-balloon from-left">
      
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