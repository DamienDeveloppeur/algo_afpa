<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 8.6</p>
  <p>Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques. <br>
Écrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.<br>

</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  Tableau utilisé pour l'exercice : <br>
    arrayMax[0] = [5,78,95,14,23,64,49,98,51,32,15,21]; <br>
    arrayMax[1] = [98,48,74,51,32,98,956,874,12]; <br>
    arrayMax[2] = [965,633,712,122,343,248,786,337,365] <br>
    arrayMax[3] = [116,463,393,831,13,748,452,532,43] <br>
    arrayMax[4] = [163,142,282,281,84,570,249,250,931] <br>
    arrayMax[5] = [868,66,546,549,962,366,928,213,661] <br>
    arrayMax[6] = [794,335,32,217,348,160,548,689,343] <br>
    arrayMax[7] = [33,384,212,722,915,577,561,419,361] <br>
    arrayMax[8] = [811,664,101,957,558,972,905,313,936] <br>
    arrayMax[9] = [57,895,818,1004,968,584,339,99,374] <br>
    arrayMax[10] = [874,132,830,78,343,713,824,182,85] <br>
    arrayMax[11] = [296,539,816,788,384,376,393,313,839] <br>
    arrayMax[12] = [809,652,843,345,519,225,102,334,314] <br>

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
require './FunctionPhp8.php';
?>


<form method="POST" action="exo86.php">


<input  onclick="exo86()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo86jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
<input type="hidden" value="" name="exephp"> </input>
</form>
<?php

if (isset($_POST["exephp"]))
{
  session_start();
  $soluce = exo86();
}



?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS86" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
      if (isset($soluce))
      {
        var_dump($_SESSION["compteurtroll"]);
       echo $soluce;

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


require('../template.html');