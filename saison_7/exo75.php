<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.5</p>
  <p>Ecrivez l'algorithme qui recherche un mot saisi au <br>
      clavier dans un dictionnaire. Le dictionnaire est supposé être codé<br>
dans un tableau préalablement rempli et trié.<br>
Dictionnaire de l'exo : <br> ["alphabet", "becasse", "caroline", "damier",<br>
 "elephant", "fifrelin", "girafe","helicoptere","iris","jhin","kaimorse",<br>
 "lumiere", "node", "voilier","zaza", "zebu"  ]<br>
</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

DEBUT

FIN

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
require './FunctionPhp7.php';
session_start();
?>


<form method="POST" action="exo75.php">
<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le mot recherché</label>
  <input type="text" id="FJS75" class="nes-input is-dark"  name="sMotRecherche"/> 
  </div>


<input  onclick="exo75()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo75jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
//$_SESSION["arrayTemp"] = NULL;
    if (!empty($_POST["sMotRecherche"]))
    {
  $control =    exo75();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS75" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
   echo $control;
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