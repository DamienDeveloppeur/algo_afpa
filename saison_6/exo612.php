<?php
ob_start();
?>
<h1> Exercice 6.12 </h1>
Ecrivez un algorithme qui permette la saisie d’un nombre quelconque de valeurs, sur le principe de l’ex 6.8. <br>
Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveau tableau sera affiché à l’écran.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  variable array1 = [];<br>
  variable nbr1 et nbr2 en numérique<br>
DEBUT<br>
ecrire "entrez le nombre de valeur souhaitée"<br>
lire nbr1 <br>
    POUR index  0 à nbr1<br>
        ecrire "entrez un nombre qui sera incrémenté et ajoutez au tableau"<br>
        lire nbr3<br>
        variable nbr4 = nbr3 +1<br>
       ajoutez nbr4 au tableau<br>
    FIN DU POUR<br>
ecrire array<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
    <div class="nes-field is-inline">

<input  onclick="exo612()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS612" class="nes-balloon from-left">
      
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