<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.2</p>
  <p>Ecrivez un algorithme qui trie un tableau dans l’ordre décroissant.<br>
Vous écrirez bien entendu deux versions de cet algorithme,<br>
 l'une employant le tri par insertion, l'autre le tri à bulles.<br>
</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array en tableau [5,4,9,2,1]<br>
variable temp en numérique <br>
DEBUT<br>
    POUR index (i) de 0 à taille du tableau <br>
    temp = array[i]<br>
            POUR index (j) de i jusqu'a j > 0 et array[j - 1] < temp, j-- <br>
            array[j] = array[j-1]<br>
            FIN DU POUR <br>
        array[j] = temp <br>
    FIN DU POUR <br>
    ecrire array <br>
FIN<br>

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
<form method="POST" action="exo72.php">


  <input  onclick="exo72()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo72jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe php" class="nes-btn is-error"></input>
  <input  type="hidden" name="exephp" value="">
</form>
<?php
if (isset($_POST["exephp"]))
{
  $array72 = exo72();
}

?>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS72" class="nes-balloon from-left">
      <p>Array avant la fonction: (5,-9,3,7,-7,12,4) </p><br>
      <?php
      if (isset($array72))
      {
        print_r($array72);
      }
      ?>
    </div>
  </section>
<?php
$JS = ob_get_clean();

ob_start();

$jquerry = ob_get_clean();

ob_start();
?>

<?php
$formulaire = ob_get_clean();


require('../template.html');