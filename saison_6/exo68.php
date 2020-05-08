<?php
ob_start();
?>
<h1> Exercice 6.8 </h1>
Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, <br>
 qui devront être stockées dans un tableau.<br>
 L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir. <br>
Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée,<br>
 le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives. <br>
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

<input  onclick="exo68()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS68" class="nes-balloon from-left">
      
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