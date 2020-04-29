<?php
ob_start();
?>
<h1> Exercice 6.12 </h1>
Ecrivez un algorithme qui permette la saisie d’un nombre quelconque de valeurs, sur le principe de l’ex 6.8. <br>
Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveau tableau sera affiché à l’écran.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">


var array = [];


var nbr=prompt("Entrer le nombre de valeur souhaité", "");
var nbr1 = parseInt(nbr);

for (i =0; i < nbr1; i++)
{
    var nbr2=prompt("Entrer un nombre à mettre dans le TABLO", "");
    var nbr3 = parseInt(nbr2);
    var nbr4 = nbr3 + 1;
 
    array.push(nbr4);
 
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