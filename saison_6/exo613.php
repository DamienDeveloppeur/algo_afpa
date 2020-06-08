<?php
ob_start();
session_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6. 13</p>
  Ecrivez un algorithme permettant, toujours sur le même principe,<br>
 à l’utilisateur de saisir un nombre déterminé<br>
de valeurs. Le programme, une fois la saisie terminée,<br>
 renvoie la plus grande valeur en précisant quelle position <br>
elle occupe dans le tableau. On prendra soin d’effectuer<br>
 la saisie dans un premier temps, et la recherche de la plus <br>
grande valeur du tableau dans un second temps. <br>
</div>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
 PAS sur
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php';
?>
<form method="POST" action="exo613.php">
<div class="nes-field is-inline" id="FJS6131G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nombre de valeur souhaitée</label>
  <input type="number" id="FJS6131" class="nes-input is-dark"  name="nbr1"/> 
  </div>

  <div class="nes-field is-inline" style="visibility: hidden" id="FJS6132G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs souhaitées</label>
  <input type="number" id="FJS6132" class="nes-input is-dark"  name="nbr2"/>
  </div>

<input  onclick="exo613()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo613jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

if (isset($_POST["nbr1"]) || !empty($_SESSION["nbr1"]))
{
  $soluce = exo613();
}

?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS613" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
              
           if(isset($_SESSION["max"]))
           {
              echo "Voici le chifre max : ". $_SESSION["max"] . "<br>";
              echo "A la position :". $_SESSION["position"] . "<br>";
              echo "Il reste encore ". $_SESSION["compteurTemp613"]. " valeur à rentrer";

           
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