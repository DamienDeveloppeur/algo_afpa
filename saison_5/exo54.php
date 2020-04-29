<?php
ob_start();
?>
<h1>Exercice 5.4</h1>
Réécrire l'algorithme précédent, en utilisant cette fois l'instruction Pour
<?php

$enonce = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo54.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];

for ($i = $nbr + 1;  $i < $nbr + 11; $i++)
{
    
    echo "$i";
}
}

$formulaire = ob_get_clean();


ob_start();

$showphp = ob_get_clean();

require('../template.html');