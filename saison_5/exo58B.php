<?php
ob_start();
?>
 Exercice 5.9
Réécrire l’algorithme précédent, <br>
mais cette fois-ci on ne connaît pas d’avance combien<br>
 l’utilisateur souhaite saisir de nombres. La saisie des nombres<br>
  s’arrête lorsque l’utilisateur entre un zéro.<br>
 <?php 
$enonce = ob_get_clean();
?>
<h1>  </h1>
<?php
ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

      </script>
<?php
$JS = ob_get_clean();

ob_start();
$array = array();

?>
<form method="POST" action="exo58B.php">  
<?php

for ($i=1; $i <20; $i++)
    {
        echo '<input type="text" name="nbr'.$i.'"/> <br>';   
    }
?>
<input type="submit" value="Envoyer"/> 
</form>

<?php


if (isset($_POST["nbr1"]))
{
    for ($i=1; $i <20; $i++)
    {
      $array [] = $_POST["nbr$i"];
    }
$test =  max($array);

 $key = array_search($test, $array);

echo "(atention, dans un tableau on commence à compter à partir de zéro !) <br> C'est le nombre numéros : " .$key  ;






}





$formulaire = ob_get_clean();

require '../template.html';
?>
