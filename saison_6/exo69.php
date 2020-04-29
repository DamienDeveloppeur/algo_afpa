<?php
ob_start();
?>
<h1> Exercice 6.9 </h1>
Ecrivez un algorithme calculant la somme des valeurs d’un tableau <br>
(on suppose que le tableau a été préalablementsaisi).
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
  if (nbr1 >= 0)
  {
    arrayP.push(nbr1);
  }
   else
   {
    arrayN.push(nbr1);
   }
    

 
}
document.write(arrayP);
document.write(arrayN);


      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>