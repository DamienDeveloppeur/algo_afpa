<?php
ob_start();
?>
<h1> Exercice 6.8 </h1>
Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, <br>
 qui devront être stockées dans un tableau.<br>
 L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir. <br>
Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée,<br>
 le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives. <br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

var arrayP = [];
var arrayN = [];
var somme = 0;
var moy = 0;

var nbr=prompt("Entrer le nombre de valeur souhaité", "");
var nbr1 = parseInt(nbr);

for (i =0; i < nbr1; i++)
{
    var nbr2=prompt("Entrer le nombre de valeur souhaité", "");
var nbr3 = parseInt(nbr2);

  if (nbr3 >= 0)
  {
    arrayP.push(nbr3);
  }
   else
   {
    arrayN.push(nbr3);
   }
    

 
}
document.write("Il y a "+ arrayP.length+"valeur positives, voici la liste :"+ arrayP +"<br>");
document.write("Il y a "+ arrayN.length+"valeur négatives, voici la liste :" + arrayN + "<br>");


      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>