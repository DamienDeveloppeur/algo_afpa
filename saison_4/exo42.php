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
<form method="POST" action="exo42.php">
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les heure </label>
  <input type="number" id="FJS421" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez les minutes </label>
  <input type="number" id="FJS422" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo42()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS42" class="nes-balloon from-left">
        
      </div>
    </section>
    
    <?php
$JS = ob_get_clean();
ob_start();
?>
<form  method="POST" action="exo42.php">  
            <label>Indiquer l'heure : </label>
            <input type="number" name="heure"/>
            

            <label>Indiquer les minutes</label>
            <input type="number" name="minutes"/>
            

            
            <input type="submit" value="Envoyer"/> 



    </form>

<?php




if (isset($_POST["heure"]) && isset($_POST["minutes"]) )
{
    $minutes = $_POST["minutes"];
    $heure = $_POST["heure"];
    if ($minutes < 59 && $heure < 24)
    {
        $minutes += 1;
        
        echo " Dans une minute, il sera " . $_POST["heure"] . "H" . $minutes;
    }
    elseif ($heure < 23 && $minutes = 59)
    {
        $heure += 1;
        $minutes = 00;
        echo " Dans une minute, il sera " . $heure . "H" . $minutes;
    }
    elseif($heure = 23 && $minutes =59)
    {
        $heure = 00;
        $minutes = 00;
        echo " Dans une minute, il sera " . $heure . "H" . $minutes;
    }

}
$formulaire = ob_get_clean();


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

