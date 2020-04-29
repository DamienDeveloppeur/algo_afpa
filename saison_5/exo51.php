<?php 

  ob_start();

echo "
 Exercice 5.1<br>
 Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à ce que la réponse convienne.
 ";
$enonce = ob_get_clean();
ob_start();


$JS = ob_get_clean();
ob_start();

?>

<p>Veuillez entrer un chiffre entre 1 et 3 </p>
 

        
          <form method="POST" action="exo51.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
    
    <?php
    if (isset($_POST["nbr"]))
    {

    
    if ($_POST["nbr"] < 1 || $_POST["nbr"] > 3)
    {
        echo "not good";
        
    }
    else 
    {
        echo "Bravo !";
    }
}
$formulaire = ob_get_clean();
 
include "../template.html";
