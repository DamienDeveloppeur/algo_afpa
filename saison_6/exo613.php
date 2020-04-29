<?php
ob_start();
?>
<h1> Exercice 6.13 </h1>
Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un nombre déterminé<br>
de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position <br>
elle occupe dans le tableau. On prendra soin d’effectuer la saisie dans un premier temps, et la recherche de la plus <br>
grande valeur du tableau dans un second temps. <br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

var nombreDonneeSaisie1 = prompt("Entrer le nombre de donnee que vous souhaitez ?", "");
var nombreDonneeSaisie = parseInt(nombreDonneeSaisie1);
var array1 = [];



for (i = 0; i < nombreDonneeSaisie; i++ )

    {
        var nbr1 = prompt("Entrer le nombre de donnee que vous souhaitez ?", "");
        var nombreDansLarray = parseInt(nbr1);
        array1.push(nombreDansLarray);
 
    }

 var max =  Math.max.apply(Math, array1);
   document.write("La valeur maximale est :" + max + "<br>");
var position = array1.indexOf(max);
document.write(position);

/*
document.write(nombreMax);
*/

      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>