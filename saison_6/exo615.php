<?php
ob_start();
?>
<h1>Exercice 6.15  </h1>
Pour sa naissance, la grand-mère de TITI place <br>
une somme de 1000 Euros sur son compte épargne rémunéré<br>
au taux de 2.75% (chaque année le compte est augmenté de 2.75%).<br>
Développer un algorithme permettant<br>
de stocker dans un tableau sur 20 ans associant à chaque anniversaire de TITI la somme acquise sur son compte.<br>
Puis, la grand-mère de TITI aura la possibilité de saisir un âge (compris entre 1 et 20 ans) <br>
et l'algorithme affichera la somme correspondante qu'il y'aura alors sur le compte.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable arraySomme en tableau numérique <br>
variable sommeCompte et I en numérique<br>
constante taux en numérique<br>
DEBUT<br>
arraySomme[0] = 1000<br>
    POUR index de 1 à index 20<br>
    var I = (sommeCompte * taux) / 100<br>
    sommeCompte = I + sommeCompte<br>
    arraySomme[i] = sommeCompte <br>
    FIN DU POUR <br>
Ecrire entrez l'annee du compte <br>
lire arraySome[nbr]<br>
<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
?>
<div class="nes-field is-inline">

<input  onclick="exo615()" value="Envoyer" class="nes-btn is-error"></input>
</div>
<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS615" class="nes-balloon from-left">
      
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