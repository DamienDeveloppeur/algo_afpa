<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.3</p>
  <p>Ecrivez un algorithme qui inverse l’ordre des éléments <br>
  d’un tableau dont on suppose qu'il a été préalablement saisi <br>
  (« les premiers seront les derniers… »)<br>
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
array[0] = array[aLength]
array[1] = array[aLentgh - 1]

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
?>
<form method="POST" action="exo73.php">

<div class="nes-field is-inline" id="FJS731G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez la taille du tableau</label>
  <input type="number" id="FJS731" class="nes-input is-dark" name="PAHT"/>
  </div>

  <div class="nes-field is-inline" id="FJS732G" style="visibility: hidden">
<label for="dark_field" style="color:#fff;">Entrez les valeurs du tableau</label>
  <input type="text" id="FJS732" class="nes-input is-dark"  name="nbr1"/> 
  </div>

  <input  onclick="exo73()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo73jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="hidden" name="exephp" value="">
  <input type="submit" value="Exe PHP" class="nes-btn is-error"></input>
 
</form>
<?php
if($_POST["exephp"])
{
    $array73 = exo73();
}
?>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS73" class="nes-balloon from-left">
      <?php
      if(isset($array73))
      {
        var_dump("test");
        print_r($array73);
      }
      ?>
    </div>
  </section>
<?php
$JS = ob_get_clean();



require('../template.html');