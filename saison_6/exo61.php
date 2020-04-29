<?php
ob_start();
?>
<h1> Exercice 6.1 </h1>
Ecrire un algorithme qui déclare et remplisse un tableau de 7 valeurs numériques en les mettant toutes à zéro.
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();

?>
    <script type="text/javascript">
 var array = [];
for (i =0; i < 7; i++)
{
   
    array.push(i);

}

document.write(array);

      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>