<?php
ob_start();
?>
<h1> Exercice 6.16 </h1>
Ecrire un algorithme permettant de résoudre le problème suivant :<br>
– Données : un tableau tableau contenant 100 entiers<br>
– Résultat : “vrai” si les entiers sont consécutifs et “faux” sinon<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable controle en numérique <br>
variable array en tableau numérique dans l'ordre<br>
variable arrayTest en tableau numérique dans le désordre<br>
DEBUT<br>
    POUR index (i) de 1 à array.length - 1 <br>
          SI array[i] - 1 == array[i - 1] && array[i]  + 1== array[i +1]<br>
          ALORS controle = 1<br>
          sinon <br>
          ALORS controle = 2<br>
          FIN DE SI <br>
    FIN DU POUR <br>
  SI controlle ==1 <br>
    Alors ecrire tout est dans l'ordre <br>
  SINON <br>
  alors ecrire tout les dans l'ordre <br>
FIN<br>
<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();

?>
  <div class="nes-field is-inline">

<input  onclick="exo616()" value="Envoyer" class="nes-btn is-error"></input>
</div>
<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS616" class="nes-balloon from-left">
      
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