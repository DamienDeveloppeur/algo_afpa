<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 4.2</p>
  <p>Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !<br>
Il lira au clavier l’heure et les minutes, et il affichera l’heure <br>
qu’il sera une minute plus tard. Par exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :<br>
\"Dans une minute, il sera 21 heure(s) 33\".<br>
NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable heure et minute en numérique<br>
DEBUT<br>
ecrire entrez une heure <br>
lire heure <br>
ecrire entrez les minutes <br>
lire minute <br>
    SI minute < 59 et heure < 24 <br>
    ALORS minute = minute +1<br>
    ecrire "dans une minute il sera " heure + "H" + minute<br>

    SINON SI heure < 23 et minute == 59 <br>
    ALORS heure += 1<br>
          minute = 0<br>
          ecrire "dans une minute il sera " heure + "H" + minute<br>
    SINON SI  heure ==23 et minute ==59<br>
                heure = 0<br>
                minute = 0<br>
                ecrire "dans une minute il sera " heure + "H" + minute<br>
    SINON "entrez une heure valide"<br>
    FIN DU SI<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo42.php">
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les heure </label>
  <input type="number" id="FJS421" class="nes-input is-dark"  name="heure"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les minutes </label>
  <input type="number" id="FJS422" class="nes-input is-dark"  name="minutes"/> <br><br><br>
</div>

  <input  onclick="exo42()" value="Envoyer" class="nes-btn is-error"></input>
  <input  onclick="exo42jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>


<br>
<?php
if (isset($_POST["heure"]) && isset($_POST["minutes"]) )
{

    $minutes = $_POST["minutes"];
    $heure = $_POST["heure"];
    if ($minutes < 59 && $heure < 24)
    {
        $minutes += 1;
        
        $control = " Dans une minute, il sera " . $_POST["heure"] . "H" . $minutes;
    }
    elseif ($heure < 23 && $minutes = 59)
    {
        $heure += 1;
        $minutes = 00;
        $control =" Dans une minute, il sera " . $heure . "H" . $minutes;
    }
    elseif($heure = 23 && $minutes =59)
    {
        $heure = 00;
        $minutes = 00;
        $control = " Dans une minute, il sera " . $heure . "H" . $minutes;
    }

  }

?>


<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS42" class="nes-balloon from-left">
        <?php
        if (isset($minutes))
        {
         
          echo " Dans une minute, il sera " . $heure . "H" . $minutes;
         
        }
        ?>
      </div>
    </section>
    
    <?php
    


$JS = ob_get_clean();





ob_start();
echo "PHP<br><br>

            if (isset(\$_POST[\"heure\"]) && isset(\$_POST[\"minutes\"]) )<br>
{<br>
        \$minutes = \$_POST[\"minutes\"];<br>
     \$heure = \$_POST[\"heure\"];<br>
             if (\$minutes < 59 && \$heure < 24)<br>
    {<br>
        \$minutes += 1;<br>
                     <br>
                       echo \" Dans une minute, il sera\" . \$_POST[\"heure\"] . \"et\" . \$minutes;<br>
    }<br>
    elseif (\$heure < 23 && \$minutes = 59)<br>
    {<br>
        \$heure += 1;<br>
        \$minutes = 00;<br>
        echo\"Dans une minute, il sera\" . \$heure . \"et\" . \$minutes;<br>
    }<br>
    elseif(\$heure = 23 && \$minutes =59)<br>
    {<br>
        \$heure = 00;<br>
        \$minutes = 00;<br>
        echo \" Dans une minute, il sera\" . \$heure . \"et\" . \$minutes;<br>
    }<br>
}";
$showphp = ob_get_clean();

/*
var heure=prompt("entrer lheure","");
var minutes=prompt("entrer les minutes","");

 if (minutes < 59) 
    {
        minutes += 1;
        
        document.write(" Dans une minute, il sera" + heure +"et" + minutes);
    }
    else if (heure < 23 && minutes == 59)
    {
        heure += 1;
       minutes = 0;
        document.write(" Dans une minute, il sera "+ heure + "et"+  minutes);
    }
    else if(heure = 23 && minutes == 59)
    {
        heure = 00;
        minutes = 00;
       document.write(" Dans une minute, il sera "+ heure + "et"+  minutes);
    }

$content = ob_get_clean(); 
*/
require('../template.html');

