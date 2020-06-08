<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">exercice 7.1</p>
  <p>Ecrivez un algorithme qui permette de saisir un nombre quelconque de valeurs,<br>
   et qui les range au fur et à mesure dans un tableau. Le programme,<br>
    une fois la saisie terminée, doit dire si les éléments du tableau sont tous consécutifs ou non.<br>
    </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable arrayExo71 en tableau numérique <br>
variable tailleTableau, temp, nbr en numérique <br>
DEBUT<br>
    ecrire "entrez le nombre de valeur souhaitée"<br>
    lire tailleTableau<br>
      POUR index (i) de 0 à taille de arrayExo71 <br>
            ecrire "entrez les valeurs souhaitée"<br>
            lire nbr <br>
            ajouter nbr dans arrayExo71<br>
                POUR index (p) de 0 à taille de arrayExo71<br>
                  TANT QUE array[i] > array[i + 1]<br>
                    SI array[i] > array[i + 1]<br>
                        var temp = array[i + 1]<br>
                        array[i + 1] = array[i]<br>
                        array[i] = temp<br>
                    FIN DE SI <br>
                  FIN DU TANT QUE<br>
                FIN DU POUR <br>
      FIN DU POUR <br>
      <br>
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
<form method="POST" action="exo71.php">

<div class="nes-field is-inline noircnoir" style="visibility: visible" id="FJS711G">
<label for="dark_field" style="color:#fff;">Entrez la taille du tableau</label>
  <input type="number" id="FJS71" class="nes-input is-dark"  name="tailleArray"/> 
  </div>

  <div class="nes-field is-inline noircnoir" style="visibility: hidden" id="FJS712G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs dans le tableau</label>
  <input type="number" id="FJS712" class="nes-input is-dark"  name="nbrArray"/> 
  </div>

  <input  onclick="exo71()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo71jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php 
session_start();
/*$_SESSION["compteur71"] = NULL;
$_SESSION["tailleArray"] = NULL;
$_SESSION["array71"] = NULL;*/
if (!empty($_POST["tailleArray"]) || $_SESSION["tailleArray"] )
{
  $solution = exo71();
}
 




?>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS71" class="nes-balloon from-left">
      <?php
            var_dump($_SESSION["compteur71"]);
            var_dump($_SESSION["tailleArray"]);
            var_dump($_SESSION["array71"]);
            var_dump($_SESSION["nbrArray"]);
 
      if (isset($solution))
      {
  
        echo $solution;
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