<?php
ob_start();
?>
<h1> Exercice 6.10 </h1>
Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis.<br>
Le nouveau tableau sera la somme des éléments des deux tableaux de départ. <br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

var array1 = [4,8,7,9,1,5,4,6];
var array2 = [7,6,5,2,1,3,7,4];
var array3 = [];


for (i =0; i < 8; i++)
{
   
    var nbr1 = array1[i];
    var nbr2 = array2[i];
    array3.push(nbr1 + nbr2);
 
}


document.write(array3);



      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>