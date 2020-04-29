<?php
ob_start();
?>
<h1>Exercice 5.5</h1>
Ecrire un algorithme qui demande un nombre de départ, et qui ensuite <br>
écrit la table de multiplication de ce nombre, présentée comme suit (cas où l'utilisateur entre le nombre 7) :<br>
<?php

$enonce = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo55.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$i = 0;
$solution = $nbr * $i;
for ($i = 0;  $i <  11; $i++)
{
    
    echo $nbr ."*". $i ."=". $nbr * $i. "<br>";
}
}

$formulaire = ob_get_clean();


ob_start();

$showphp = ob_get_clean();

require('../template.html');