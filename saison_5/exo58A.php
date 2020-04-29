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
    var max = 0;
for (i = 0; i < 20; i++)
{
var nbr=prompt("entrer un nombre", "");
var nbr1 = parseInt(nbr);

  if (nbr1 > max)
  {
    max = nbr1;
  }

}
document.write(max);
      </script>
<?php
$JS = ob_get_clean();

ob_start();
/*
$array = array();

?>
<form method="POST" action="exo58A.php">  
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
   echo max($array);
}




*/
$formulaire = ob_get_clean();

require '../template.html';
?>
