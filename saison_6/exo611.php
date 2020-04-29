<?php
ob_start();
?>
<h1> Exercice 6.11 </h1>
Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le « Toon » <br>
 des deux tableaux. Pour calculer le « Toon », il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2,
et additionner le tout.
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

var array1 = [4,8,7,9,1,5,4,6];
var array2 = [7,6,5,2,1,3,7,4];
var arrayTOON = [];
var sommeTOTALE = 0;

for (i = 0; i < 8; i++)
{
   
    var nbr1 = array1[i];
    var nbr2 = array2[i];
   
        for (p = 0; p < 8 ; p++)
        {
            var nbr3 = array2[p];
            var produit = nbr1 * nbr3; 
            arrayTOON.push(produit);
        }
 
}
var tailleTOON = arrayTOON.length;

for (m = 0; m < tailleTOON; m++ ) 
{
    var valeurTOON = arrayTOON[m];
    sommeTOTALE = sommeTOTALE + valeurTOON;
}



 document.write(sommeTOTALE);



      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>