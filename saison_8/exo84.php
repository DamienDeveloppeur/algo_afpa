<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 8.4</p>
  <p>Quel résultat produira cet algorithme ?</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

Tableau T(3, 1) en Entier<br>
Variables k, m, en Entier<br>
Début <br>
    Pour k ← 0 à 3<br>
        Pour m ← 0 à 1<br>
            T(k, m) ← k + m<br>
        m Suivant<br>
    k Suivant<br>
    Pour k ← 0 à 3<br>
        Pour m ← 0 à 1<br>
            Ecrire T(k, m)<br>
        m Suivant<br>
    k Suivant<br>
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


<form method="POST" action="exo84.php">
<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
  <input type="number" id="FJS6141" class="nes-input is-dark"  name="nbr1"/> 
  </div>


<input  onclick="exo84()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo84jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
<input type="hidden" value="" name="exephp"> </input>
</form>
<?php

    if (isset($_POST["exephp"]))
    {
      $soluce = exo84();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS84" class="nes-balloon from-left is-dark">
         


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