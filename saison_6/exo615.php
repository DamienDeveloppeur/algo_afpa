<?php
ob_start();
?>
<h1>Exercice 6.15  </h1>
Pour sa naissance, la grand-mère de TITI place une somme de 1000 Euros sur son compte épargne rémunéré<br>
au taux de 2.75% (chaque année le compte est augmenté de 2.75%).<br>
Développer un algorithme permettant<br>
de stocker dans un tableau sur 20 ans associant à chaque anniversaire de TITI la somme acquise sur son compte.<br>
Puis, la grand-mère de TITI aura la possibilité de saisir un âge (compris entre 1 et 20 ans) <br>
et l'algorithme affichera la somme correspondante qu'il y'aura alors sur le compte.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">
var sommeCompte = 1000;
const taux = 2.75;


var arraySomme = [];


for (i = 0; i < 20; i++)
{
    var I = (sommeCompte * taux) / 100;
    sommeCompte = I + sommeCompte; 
    /*document.write(sommeCompte + "<br>")*/
    arraySomme.push(sommeCompte);
    var compteParAnnee = arraySomme[i];
}


var nbr = +prompt("entrer l'année de compte", "");

/*document.write(nbr);*/
document.write(arraySomme[nbr]);


      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>