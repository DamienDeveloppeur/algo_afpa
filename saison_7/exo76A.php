<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.6A</p>
  <p>Ecrire un algorithme qui calcule le plus grand<br>
     écart dans un tableau de X entiers positifs.<br>
    </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
array76A en array numérique<br>
DEBUT<br>
ecrire "entrez les valeurs dans le tableau"<br>
lire array76A Si valeur entrée > 0 <br>

La première valeur est la plus basse par defaut <br>
on trouve la plus basse du tableau avec une boucle <br>
pareil pour la plus haute <br>



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


<form method="POST" action="exo76A.php">

<div class="nes-field is-inline" id="FJS76A1G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez la taille du tableau souhaitée</label>
  <input type="number" id="FJS76A1" class="nes-input is-dark"  name="tailleArray76A"/> 
  </div>

  <div class="nes-field is-inline" id="FJS76A2G" style="visibility: hidden">
<label for="dark_field" style="color:#fff;">Entrez les valeurs POSITIVES</label>
  <input type="number" id="FJS76A2" class="nes-input is-dark"  name="nbr2"/> 
  </div>

  <div id="FC76A" style="display: none" >
    <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
    <?php
    $_POST["tailleArray76A"] = intval($_POST["tailleArray76A"]);
    for ($i=0; $i < $_POST["tailleArray76A"] ; $i++)
        {
            echo '<div class="nes-field is-inline"> 
            <input id="FJS76AC'.$i.'" type="number" name="nbrc'.$i.'"/> <br> </div>';
            
        }
  ?>
 </div>

  <input  onclick="exo76A()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo76Ajq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
  </form>
  <?php
  session_start();
/*
  $_SESSION["max"] = NULL;
  $_SESSION["mini"] = NULL;
  $_SESSION["solution76A"] = NULL;
  $_SESSION["arrayphp"] = NULL;
  $_SESSION["nbrc1"] = NULL;
  $_SESSION["tailleArray76A"] = NULL;
*/
    if (isset($_SESSION["tailleArray76A"]) || (!empty($_POST["tailleArray76A"])))
    {

  exo76A();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS76A" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
      //var_dump($_SESSION["max"]);
     // var_dump( $_SESSION["mini"]);
   
          echo $_SESSION["solution76A"] . "<br>";
        echo  $_SESSION["mini"] . "<br>";
         echo $_SESSION["max"]. "<br>";
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