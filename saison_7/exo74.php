<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.4</p>
  <p>
  Ecrivez un algorithme qui permette à l’utilisateur de supprimer <br>
  une valeur d’un tableau préalablement saisi.<br>
L’utilisateur donnera l’indice de la valeur qu’il souhaite supprimer.<br>
 Attention, il ne s’agit pas de remettre une valeur<br>
à zéro, mais bel et bien de la supprimer du tableau lui-même !<br>
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
?>


<form method="POST" action="exo74.php">

<div class="nes-field is-inline" id="FJS741G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nombre d'éléments souhaitée</label>
  <input type="text" value="" id="FJS741" class="nes-input is-dark"  name="tailleArray74"/> 
  </div>

  <div id="FC74" style="display: none" >
  <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <?php
$_POST["tailleArray74"] = intval($_POST["tailleArray74"]);
  for ($i=0; $i < $_POST["tailleArray74"] ; $i++)
      {
          echo '<div class="nes-field is-inline"> 
          <input id="FJS74C'.$i.'" type="number" name="nbrc'.$i.'"/> <br> </div>';
          
      }
  ?>
 </div>


  <div class="nes-field is-inline" id="FJS742G" style="visibility: hidden">
<label for="dark_field" style="color:#fff;">Entrez les valeur dans le tableau</label>
  <input  value="" id="FJS742" class="nes-input is-dark"  name="nbrArray74"/> 
  </div>

  <div class="nes-field is-inline" id="FJS743G" style="visibility: hidden">
<label for="dark_field" style="color:#fff;">Entrez l'indice que vous souhaitez supprimer</label>
  <input  value="" id="FJS743" class="nes-input is-dark"  name="nbrIndice74"/> 
  </div>


  <input  onclick="exo74()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo74jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>


</form>

<?php
session_start();
/*
$_SESSION["compteur74"] = NULL;
$_SESSION["arrayphp"] = NULL;
$_SESSION["nbrIndice74"] = NULL;
$_SESSION["arrayTemp74"] = NULL;
$_SESSION["nbrc1"] = NULL;
$_SESSION["tailleArray74"] = NULL;
*/

  if ((!empty($_POST["tailleArray74"])) || isset($_SESSION["tailleArray74"]))
  {

$soluce = exo74();

  }

?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS714" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
         //var_dump( $_SESSION["compteur74"]);
        //  var_dump( $_SESSION["tailleArray74"]);
         // var_dump($_SESSION["arrayphp"]);
         // var_dump($_SESSION["arrayTemp74"]);
          //var_dump($_SESSION["solution74"]);
         // var_dump($_SESSION["tailleArray74"]);
         // var_dump(intval($_POST["nbrIndice74"]));
    echo "Array après : " .$_SESSION["solution74"];

      
          
         
          
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