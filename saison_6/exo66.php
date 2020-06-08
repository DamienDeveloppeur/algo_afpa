<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.6</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  <br>
  Tableau N(6) en Entier <br>
  Variables i, k en Entier <br>
  Début<br>
   N(0) ← 1<br>
    Pour k ← 1 à 6 <br>
    N(k) ← N(k-1) + 2 <br>
    k Suivant <br>
    Pour i ← 0 à 6<br>
     Ecrire N(i)<br>
      i suivant<br>
       Fin<br>
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
require './FunctionPhp6.php';
?>


<form method="POST" action="exo66.php">
<input  onclick="exo66()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo66jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="hidden" name="exephp" value="">
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>

<?php

if (isset($_POST["exephp"]))
{

}


?>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS66" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
            if (isset($showSoluce))
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




require('../template.html');