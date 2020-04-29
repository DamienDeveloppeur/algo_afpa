<?php
ob_start();
echo "
Exercice 5.2 (A)
a) Ecrire un algorithme qui demande un nombre compris entre 10 et 20,<br>
 jusqu’à ce que la réponse convienne. En cas de réponse supérieure à 20,<br>
 on fera apparaître un message : « Plus petit ! », et inversement,<br> « Plus grand ! » si le nombre est inférieur à 10.";
$enonce = ob_get_clean();

ob_start();
?>

<form method="POST" action="exo52.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>

<?php 


if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];

    if($nbr < 10 || $nbr > 20)
    {
        if ($nbr < 10)
        {
            echo "Plus grand !";
        }
        elseif ($nbr > 20)
        {
            echo "Plus petit ! ";
        }
    
    }
    else 
    {
        echo "Bravo !";
    }
}
$formulaire = ob_get_clean();

require('../template.html');