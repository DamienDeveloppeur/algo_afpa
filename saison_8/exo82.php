<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 8.2</p>
  <p>Quel résultat produira cet algorithme ?</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  Tableau X(1, 2) en Entier <br>
   Variables i, j, val en Entier <br>
Début <br>
     Val ← 1  <br>
     Pour i ← 0 à 1 <br>
      Pour j ← 0 à 2 <br>
       X(i, j) ← Val <br>
        Val ← Val + 1  <br>
        j Suivant <br>
         i Suivant  <br>
         Pour i ← 0 à 1 <br>
          Pour j ← 0 à 2 <br>
           Ecrire X(i, j) <br>
            j Suivant  <br>
            i Suivant <br>
 Fin <br>

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


<form method="POST" action="exo82.php">


<input  onclick="exo82()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo82jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input type="hidden" value="" name="exephp"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

    if (isset($_POST["exephp"]))
    {
      $soluce = exo82();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS82" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
      if (isset($soluce))
      {
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