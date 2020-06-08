<?php
ob_start();

?>
<h1> Exercice 6.10 </h1>
Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis.<br>
Le nouveau tableau sera la somme des éléments des deux tableaux de départ. <br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  variable array1 => tableau en numérique [4,8,7,9,1,5,4,6]<br>
  variable array2 => tableau en numérique [7,6,5,2,1,3,7,4]<br>
  variable array3 = [];<br>
    variable nbr1 et nbr 2 en numérique<br>

DEBUT<br>
    POUR index  0 à taille du tableau array1<br>
        variable nbr1 = array1 à l'index de i <br>
        variable nbr2 = array1 à l'index de i <br>
        array3 = (nbr1 + nbr2) <br>

FIN DU POUR<br>
ecrire array3<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php';
?>

<form method="POST" action="exo610.php">

<input  onclick="exo610()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo610jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="hidden" name="exephp" value="">
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
if (isset($_POST["exephp"]))
{
    $showSoluce = exo610();

}
?>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS610" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php

           if(isset($showSoluce))
           {
              echo $showSoluce;
           
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