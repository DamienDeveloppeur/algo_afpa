<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 9.1</p>
  <p>Parmi ces affectations (considérées indépendamment les unes des autres),<br>
       lesquelles provoqueront des erreurs, et pourquoi ?<br>
    </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  Variables A, B, C en Numérique <br>
  Variable D en Caractère<br>
   A ← Sin(B)<br>
    A ← Sin(A + B * C) <br>
    B ← Sin(A) – Sin(D)<br>
     C ← Sin(A / B) <br>
     C ← Cos(Sin(A)<br>
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
//require './FunctionPhp6.php';
?>


<form method="POST" action="exo91.php">
<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
  <input type="number" id="FJS6141" class="nes-input is-dark"  name="nbr1"/> 
  </div>


<input  onclick="exo91()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo91jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

    if (isset($control))
    {
      
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS91" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
      if (isset($control))
      {
       

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