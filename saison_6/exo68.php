<?php
ob_start();
session_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.8</p>
  Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, <br>
 qui devront être stockées dans un tableau.<br>
 L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir. <br>
Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée,<br>
 le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives. <br>
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
<form method="POST" action="exo68.php">
<div class="nes-field is-inline" id="FJS681G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nombre de valeur souhaitée</label>
  <input type="number" id="FJS681" class="nes-input is-dark"  name="nbr1"/> <br><br><br>
  </div>

  <div class="nes-field is-inline" style="visibility: hidden" id="FJS682G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs souhaitées</label>
  <input type="number" id="FJS682" class="nes-input is-dark"  name="nbr2"/> <br><br><br>
  </div>

<input  onclick="exo68()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo68jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

        if (!empty($_POST["nbr1"]) || isset($_SESSION["nbr1"]) )
        {
          
          $soluce = exo68();
        }


?>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS68" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
         /* var_dump($_SESSION["compteur"]);
          var_dump($_SESSION["nbr1"]);
          var_dump($_POST["nbr2"]);*/
            if (isset($_SESSION["control1"]) && isset($_SESSION["control2"]) && isset($_SESSION["control3"]))
            { 
                echo "Voici les nombres positifs : " .$_SESSION["control1"] . "<br>";
                echo "Voici les nombres négatifs : " . $_SESSION["control2"] . "<br>";
                echo "Il y a eu  ". $_SESSION["control3"] . " zéro dans votre saisie";
          
            
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



require '../template.html';
?>