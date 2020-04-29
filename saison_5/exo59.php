<?php
ob_start();
?>
<h1> Exercice 5.9  </h1>
Réécrire l’algorithme précédent, <br>
mais cette fois-ci on ne connaît pas d’avance combien<br>
 l’utilisateur souhaite saisir de nombres. La saisie des nombres<br>
  s’arrête lorsque l’utilisateur entre un zéro.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">
    var array = [];



do {

    var nbr=prompt("Entrer le nombre pour troller", ""); 
array.push(nbr);

} while (nbr != 0);


var test = Math.max.apply(null, array);
document.write(test);
      </script>
<?php
$JS = ob_get_clean();

ob_start();
/*
$array = array();

    do 
    {
        ?>
        <form method="POST" action="exo59.php">  
        <input type="number" name="nbr"/>
        <input type="submit" value="Envoyer"/> 
        </form>
    <?php
    echo "ça marche ?";
    } while ($_POST["nbr"] != 0);
    var_dump($_POST["nbr"]);
    
 


*/
$formulaire = ob_get_clean();

require '../template.html';
?>
