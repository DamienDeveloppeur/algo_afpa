<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.3</p>
  Ecrire un algorithme qui demande un nombre de départ, <br>et qui ensuite affiche les dix nombres suivants.<br>
 Par exemple, si l'utilisateur entre le nombre 17,<br> le programme affichera les nombres de 18 à 27.<br>";
</div>
<?php

$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  variable nbr en numérique<br>
  variable index en numérique<br>
  variable listeNombre en string <br>
DEBUT<br>
    ecrire "entrez un nombre"<br>
    lire nbr <br>
    index = nbr +1<br>
    TANT QUE index != nbr + 11<br>
    index ++<br>
    ecrire index<br>
    listeNombre = listeNombre +  index + " "; <br>
    FIN DU TANT QUE<br>
   Ecrire = listeNombre<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
?>

<form method="POST" action="exo53.php">  
<div class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS53" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo53()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo53jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
  
</form>
<?php
  if (isset($_POST["nbr"]))
  {
    $control = "";
      $nbr = $_POST["nbr"];
      $i = $nbr;
  while ($i < $nbr + 10)
  {
      $i++;
      $control = $control . " ". " $i";
  }
}
?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS53" class="nes-balloon from-left">
      <?php
      if (isset($control))
        {
        
         
           echo $control;
         
        }
        ?>
      </div>
    </section>
    <?php
$JS = ob_get_clean();


require('../template.html');