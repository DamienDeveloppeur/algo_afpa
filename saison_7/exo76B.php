<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.6B</p>
  <p>Ecrire un algorithme qui calcule le plus grand écart dans un tableau de X<br>
       entiers positifs, comme négatifs.<br>
    </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
array76B en array numérique<br>
DEBUT<br>
ecrire "entrez les valeurs dans le tableau"<br>
lire array76B<br>

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


<form method="POST" action="exo76B.php">
<div class="nes-field is-inline" id="FJS76B1G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez la taille du tableau souhaitée</label>
  <input type="number" id="FJS76B1" class="nes-input is-dark"  name="tailleArray76B"/> 
  </div>

  <div id="FC76B" style="display: none" >
    <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
    <?php
    $_POST["tailleArray76B"] = intval($_POST["tailleArray76B"]);
    for ($i=0; $i < $_POST["tailleArray76B"] ; $i++)
        {
            echo '<div class="nes-field is-inline"> 
            <input id="FJS76BC'.$i.'" type="number" name="nbrc'.$i.'"/> <br> </div>';
            
        }
  ?>
 </div>

  <div class="nes-field is-inline" id="FJS76B2G" style="visibility: hidden">
<label for="dark_field" style="color:#fff;">Entrez les valeurs POSITIVES</label>
  <input type="number" id="FJS76B2" class="nes-input is-dark"  name="nbr2"/> 
  </div>

<input  onclick="exo76B()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo76Bjq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

  session_start();
/*
  $_SESSION["maxB"] = NULL;
  $_SESSION["mini"] = NULL;
  $_SESSION["solution76B"] = NULL;
  $_SESSION["nbrc1"] = NULL;
  $_SESSION["tailleArray76B"] = NULL;
  $_SESSION["compteur76B"] = NULL;
*/
  if (isset($_SESSION["tailleArray76B"]) || (!empty($_POST["tailleArray76B"])))
  {

 exo76B();
  }

  ?>
  <br>
  <section class="nes-container is-dark">
     <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS76B" class="nes-balloon from-left is-dark">
         <?php

           // var_dump($_SESSION["maxB"]);
           // var_dump( $_SESSION["miniB"]);
            /*
            var_dump($_SESSION["solution76B"]);
           */
          // var_dump( $_SESSION["tailleArray76B"]);

  ?>
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
         
         echo "Valeur max : ".$_SESSION["maxB"] ."<br>";
         echo "Valeur mini : " .$_SESSION["miniB"] ."<br>";
         echo "Ecart entre les deux : ". $_SESSION["solution76B"] ."<br>";
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