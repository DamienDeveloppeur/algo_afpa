<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.11</p>
  Toujours à partir de deux tableaux précédemment saisis,<br>
 écrivez un algorithme qui calcule le « Toon » <br>
 des deux tableaux. Pour calculer le « Toon »,<br>
  il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2,<br>
et additionner le tout.<br>
</div>

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
require './FunctionPhp6.php';
?>

<form method="POST" action="exo611.php">

<input  onclick="exo611()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo611jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="hidden" name="exephp" value="">
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
if (isset($_POST["exephp"]))
{
    $sommeTOTALE = exo611();

}
?>

<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS611" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php

           if(isset($sommeTOTALE))
           {
              echo $sommeTOTALE;
           
           }
          
          ?>
        </div>
        <i class="nes-bcrikko"></i>
      </section>
    </section>
  </section>
</section>
  <?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>