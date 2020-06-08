<?php
session_start();
ob_start();

?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.7</p>
  <p>Ecrivez la fin de l’algorithme 6.3 afin que le calcul <br>
    de la moyenne des notes soit effectué et affiché à l’écran.<br>
  </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  variable array => tableau en numérique, nbr, somme et moy en numérique<br>
DEBUT<br>
POUR index  0 à index 8<br>
    ecrire "entrez une note"<br>
    lire nbr <br>
    ajouter nbr à array<br>
    somme = somme + nbr 
    moy = somme / array.lenght
FIN DU POUR<br>
ecrire somme et moy<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php';
?>


<form method="POST" action="exo67.php">
<div class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS67" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

<input  onclick="exo67()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo67jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
if (!empty($_POST["nbr"]))
{
$moy = exo67();

}
?>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS67" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
            if (isset($_SESSION["moy"]))
            {
              echo "Somme : " . $_SESSION["somme"] . "<br>";
             echo "moy : " . $_SESSION["moy"];
             
       
            
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