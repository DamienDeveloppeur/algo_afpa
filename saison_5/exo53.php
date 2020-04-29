<?php
ob_start();
echo "Exercice 5.3<br>
a) Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants.<br>
 Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.<br>";

$enonce = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo53.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php
if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$i = $nbr + 1;
while ($i < $nbr + 11)
{
    $i++;
    echo "$i";
}
}
$formulaire = ob_get_clean();

require('../template.html');