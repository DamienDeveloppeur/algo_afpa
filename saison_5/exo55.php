<?php
ob_start();
?>
<h1>Exercice 5.5</h1>
Ecrire un algorithme qui demande un nombre de départ, et qui ensuite <br>
écrit la table de multiplication de ce nombre, présentée comme suit<br> (cas où l'utilisateur entre le nombre 7) :<br>
<?php

$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nombre et solution en numérique<br>
DEBUT<br>
Ecrire "entrez un nombre"<br>
Lire nbr;<br>
index = 0;<br>

POUR index < 11<br>
<br>
ecrire nbr + "*" + index + "="+ nbr*index<br>
Fin de POUR<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo55.php"> 

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS55" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo55()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo55jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php
if (isset($_POST["nbr"]))
{
  $nbr = $_POST["nbr"];
  $i = 0;
 $control = "";
  for ($i = 0;  $i <  11; $i++)
  {
      
     $control = $control . "<br>". $nbr ."*". $i ."=". $nbr * $i;
  }
}
?>

<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS55" class="nes-balloon from-left">
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

ob_start();

$showphp = ob_get_clean();

require('../template.html');