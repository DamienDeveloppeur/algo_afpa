<?php
ob_start();
?>
<h1> exercice 4.3</h1> <br>
De même que le précédent, cet algorithme doit demander une heure et en afficher une autre.<br>
  Mais cette fois, il doit gérer également les secondes, et afficher l'heure qu'il sera une seconde plus tard.<br>

Par exemple, si l'utilisateur tape 21, puis 32, puis 8, l'algorithme doit répondre :<br>
 "Dans une seconde, il sera 21 heure(s), 32 minute(s) et 9 seconde(s)". <br>
NB : là encore, on suppose que l'utilisateur entre une date valide.
<?php 
$enonce = ob_get_clean();
ob_start();
?>

<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo43.php">
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les heure </label>
  <input type="number" id="FJS431" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les minutes </label>
  <input type="number" id="FJS432" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les secondes </label>
  <input type="number" id="FJS433" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo43()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS43" class="nes-balloon from-left">
        
      </div>
    </section>

    <?php
$JS = ob_start();
ob_start();

?>
<form method="POST" action="exo42.php">  
            <label>Indiquer l'heure</label>
            <input type="number" name="heure"/>
            

            <label>Indiquer les minutes</label>
            <input type="number" name="minutes"/>
            
            <label>Indiquer les secondes</label>
            <input type="number" name="secondes"/>
            
            <input type="submit" value="Envoyer"/> 



    </form>

    <?php

if (isset($_POST["heure"]) && isset($_POST["minutes"]) && isset($_POST["secondes"]) )
{
    $minutes = $_POST["minutes"];
    $heure = $_POST["heure"];
    $secondes = $_POST["secondes"];

    if ( $secondes < 59)
    {
        $secondes += 1;
        
        echo " Dans une minute, il sera" + $heure + "H" + $minutes +"Min" + $secondes ;
    }
    elseif ($secondes = 59 && $heure < 23 && $minutes < 59)
    {
        $secondes = 00;
        $minutes += 1;
        echo " Dans une minute, il sera" + $heure + "H" + $minutes +"Min" + $secondes ;
    }
    elseif($secondes = 59 && $minutes = 59 && $heure < 23)
    {
       $secondes += 1;
        $minutes += 1;
        echo " Dans une minute, il sera" + $heure + "H" + $minutes +"Min" + $secondes ;
    }
    elseif($secondes = 59 && $minutes = 59 && $heure = 23)
    {
        $secondes = 0;
        $minutes = 0;
        $heure = 0;
        echo " Dans une minute, il sera" + $heure + "H" + $minutes +"Min" + $secondes ;
    }

}
$formulaire = ob_get_clean();

require('../template.html');
?>
