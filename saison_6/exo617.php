<?php
ob_start();
?>
<h1> Exercice 6.17 </h1>

Ecrire un algorithme permettant de saisir 100 valeurs et qui les range au fur et<br>
 à mesure dans un tableau. Cela s'appelle le tri à la volée (qui est une forme de tri par insertion)<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array en tableau numérique<br>
variable nbr,temp, i et p en numérique<br>
DEBUT<br>
        POUR index (p) de 0 à 99<br>
        ecrire entrez une valeurs<br>
        lire nbr <br>
        ajouter nbr au tableau array <br>
              POUR index (i) de 0 à longeur de array <br>
                    SI array[i] > array[i + 1] <br>
                          TANT QUE array[i] > array[i + 1] <br>
                              var temp = array[i]<br>
                              array[i] = array[i + 1] <br>
                              array[i + 1] = temp <br>
                              i = 0 <br>
                          FIN DU TANT QUE <br>
                    FIN DU SI <br>
              FIN DU POUR <br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
session_start();
require './FunctionPhp6.php';
?>
<form method="POST" action="exo617.php">
<div class="nes-field is-inline" id="FJS6141G" style="display: block">
<label for="dark_field" style="color:#fff;">Entrez le nombre de valeur souhaitée dans le tableau</label>
  <input type="number" id="FJS6141" class="nes-input is-dark"  name="nbr1"/> 
  </div>


  <div class="nes-field is-inline" style="visibility: hidden" id="FJS6142G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs souhaitées</label>
  <input type="number" id="FJS6142" class="nes-input is-dark"  name="nbr2"/>
  </div>


 
    <div id="FC619" style="display: none" >
  <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <?php
$_POST["nbr1"] = intval($_POST["nbr1"]);
  for ($i=0; $i < $_POST["nbr1"] ; $i++)
      {
          echo '<div class="nes-field is-inline"> <input id="FJS617'.$i.'" type="number" name="nbrc'.$i.'"/> <br> </div>';
          
      }
  ?>
 </div>

<input  onclick="exo617()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo617jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

//$_SESSION["compteur617"] = NULL;

if ((isset($_POST["nbr1"]) && !empty($_POST["nbr1"]) && $_POST["nbr1"] != 0) || (isset($_SESSION["nbr1"]) && !empty($_SESSION["nbr1"])))
{
   
    ?>
<script> 
document.getElementById("FC619").style.display = "block";
</script>
    <?php
     $soluce = exo617();
}

?>

<br>

<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS617" class="nes-balloon from-left is-dark">
        <!-- <p>Array JQ et jquery avant l'éxécution du programme : [12,6,-5,8,3,9,-8] </p> -->
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
         var_dump($_SESSION["compteur617"]);

            print_r($_SESSION["array617"]);

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