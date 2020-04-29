<?php
ob_start();
?>
<h1>Exercice 5.7</h1>
Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.<br>
NB : la factorielle de 8, notée 8 !, <br> vaut
1 x 2 x 3 x 4 x 5 x 6 x 7 x 8
<?php

$enonce = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo57.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$somme = 1;

for ($i = 1; $i != $nbr + 1; $i++  )
{
    $somme = $somme * $i;
    if ($i == $nbr)
    {

    echo $somme ;
    }
    
}
}
$formulaire = ob_get_clean();
ob_start();

$showphp = ob_get_clean();

require('../template.html'); ?>