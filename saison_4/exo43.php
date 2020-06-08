<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">exercice 4.3</p>
  De même que le précédent, cet algorithme doit demander une heure et en afficher une autre.<br>
  Mais cette fois, il doit gérer également les secondes, et afficher l'heure qu'il sera une seconde plus tard.<br>

Par exemple, si l'utilisateur tape 21, puis 32, puis 8, l'algorithme doit répondre :<br>
 "Dans une seconde, il sera 21 heure(s), 32 minute(s) et 9 seconde(s)". <br>
NB : là encore, on suppose que l'utilisateur entre une date valide.
  </div>
<h1> exercice 4.3</h1> <br>

<?php 
$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable heure, minutes et secondes en numérique<br>
DEBUT<br>
ecrire entrez une heure <br>
lire heure <br>
ecrire entrez les minutes <br>
lire minute<br>
ecrire entrez les secondes<br>
lire secondes<br>

    SI minute < 59 et heure < 24 et secondes < 59<br>
    ALORS secondes = secondes +1<br>
    ecrire "dans une minute il sera " heure + "H" + minute + "min" + seconde + "sec"<br>

    SINON SI heure < 23 et minute < 59 et secondes == 59<br>
    ALORS minutes += 1<br>
          secondes = 0<br>
          ecrire "dans une minute il sera " heure + "H" + minute + "min" + seconde + "sec"<br>

    SINON SI  heure < 23 et minute ==59 et secondes == 59<br>
                secondes += 1<br>
                minute += 1<br>
                ecrire "dans une minute il sera " heure + "H" + minute + "min" + seconde + "sec"<br>

    SINON SI secondes ==59 et minutes == 59 et heure == 23<br>
            ALORS secondes = 0<br>
                  minute = 0<br>
                  heure =0<br>
                  ecrire "dans une minute il sera " heure + "H" + minute + "min" + seconde + "sec"<br>
    SINON "entrez une heure valide"<br>
    FIN DU SI<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();


$formulaire = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo43.php">
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les heure </label>
  <input type="number" id="FJS431" class="nes-input is-dark"  name="heure"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les minutes </label>
  <input type="number" id="FJS432" class="nes-input is-dark"  name="minutes"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les secondes </label>
  <input type="number" id="FJS433" class="nes-input is-dark"  name="secondes"/> <br><br><br>
</div>

  <input  onclick="exo43()" value="Envoyer" class="nes-btn is-error"></input>
  <input  onclick="exo43jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
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
        
        $control = " Dans une minute, il sera" . $heure . "H" . $minutes . "Min" . $secondes ;
    }
    elseif ($secondes = 59 && $heure < 23 && $minutes < 59)
    {
        $secondes = 00;
        $minutes += 1;
        $control = " Dans une minute, il sera" . $heure . "H" . $minutes . "Min" . $secondes ;
    }
    elseif($secondes = 59 && $minutes = 59 && $heure < 23)
    {
       $secondes += 1;
        $minutes += 1;
        $control = " Dans une minute, il sera" . $heure . "H" . $minutes . "Min" . $secondes ;
    }
    elseif($secondes = 59 && $minutes = 59 && $heure = 23)
    {
        $secondes = 0;
        $minutes = 0;
        $heure = 0;
        $control = " Dans une minute, il sera" . $heure . "H" . $minutes . "Min" . $secondes ;
    }

}

?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS43" class="nes-balloon from-left">
        <?php
      if (isset($minutes))
        {
         
          echo " Dans une minute, il sera " . $heure . "H" . $minutes . "Min" . $secondes . "secondes" ;
         
        }
        ?>
      </div>
    </section>

    <?php
$JS = ob_get_clean();
require '../template.html';
?>
