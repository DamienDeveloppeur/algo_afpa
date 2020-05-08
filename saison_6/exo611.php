<?php
ob_start();
?>
<h1> Exercice 6.11 </h1>
Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le « Toon » <br>
 des deux tableaux. Pour calculer le « Toon », il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2,
et additionner le tout.
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array1 en tableau numérique = [4,8,7,9,1,5,4,6]<br>
variable array2 en tableau numérique = [7,6,5,2,1,3,7,4]<br>
variable arrayTOON en tableau numérique<br>
variable sommeTOTALE, produit, nbr1, nbr2, nbr3, tailleTOON et valeurTOON en numérique<br>
DEBUT<br>
    POUR index (i) de 0 à 7<br>
    variable nbr1 = array1[i]<br>
    variable nbr2 = array2[i]<br>
            POUR index (p) de 0 à 7<br>
            variable nbr3 = array2[p]<br>
            var produit = nbr1 *nbr3<br>
            arrayTOON push variable produit<br>
            FIN DU POUR<br>
    FIN DU POUR<br>
    variable tailleTOON = taille du taille arrayTOON<br>
    POUR index (m) de 0 à tailleTOON <br>
        variable valeurTOON = arrayTOON[m]<br>
        sommeTOTALE = sommeTOTALE + valeurTOON<br>
    FIN DU POUR <br>
    ecrire sommeTOTALE<br>
FIN<br>
<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
       <div class="nes-field is-inline">

<input  onclick="exo611()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS611" class="nes-balloon from-left">
      
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