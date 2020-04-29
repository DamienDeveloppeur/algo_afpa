<?php
ob_start();
?>
<h1>Exercice 5.6</h1>
Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu’à ce nombre. <br>
Par exemple, si l’on entre 5, le programme doit calculer :<br>
1 + 2 + 3 + 4 + 5 = 15<br>
<?php

$enonce = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo56.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$somme = 0;

for ($i = 1; $i != $nbr + 1; $i++  )
{
    $somme = $somme + $i;
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