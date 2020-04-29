<?php

ob_clean();

echo "Exercice 5.2 B <br>

b) Ecrire un algorithme qui choisit un nombre au hasard compris entre 1 et 100.<br>
 Pour ceci, on utilise la fonction : iNombreHasard <- random[1..100] <br>
 Demander à l'utilisateur de trouver le nombre. On fera apparaître un message : « Plus petit ! »,<br>
  et inversement, « Plus grand ! » jusqu’à ce que l'utilisateur ait trouvé et afficher en combien de coups.<br>";

  $enonce = ob_get_clean();

  ob_start();

?>
<div class="refresh">
    <?php
  $nbr1 = rand (1, 1000);
?>
</div>


<form method="POST" action="exo52B.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>

<?php 


if (isset($_POST["nbr"]) && isset($nbr1))
{
    
$nbr = $_POST["nbr"];
    if ($nbr != $nbr1)
    {
        
            if ($nbr < $nbr1)
            {
                echo "Plus grand !";
            }
            elseif ($nbr > $nbr1)
            {
                echo "Plus petit ! ";
            }
        
        }
        

else if ($nbr == $nbr1)
{
    echo "bien joué !";
}
}
echo $nbr1;
 $formulaire = ob_get_clean();

 require('../template.html');
 ?>