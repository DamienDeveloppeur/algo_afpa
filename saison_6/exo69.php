<?php
ob_start();
?>
<h1> Exercice 6.9 </h1>
Ecrivez un algorithme calculant la somme des valeurs d’un tableau <br>
(on suppose que le tableau a été préalablementsaisi).
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  variable array => tableau en numérique [5,6,1,9,3,4,5,10]<br>
  variable somme en numérique <br>
DEBUT<br>
POUR index  0 à taille du tableau<br>

    somme = somme + arrayExemple à l'index de i <br>
 
FIN DU POUR<br>
ecrire somme<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
    
      <div class="nes-field is-inline">

<input  onclick="exo69()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS69" class="nes-balloon from-left">
      
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