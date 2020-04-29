<?php
ob_start();
?>
<h1> Exercice 5.10 </h1>
Lire la suite des prix (en euros entiers et terminée par zéro) des achats d’un client.<br>
 Calculer la somme qu’il doit, lire la somme qu’il paye, et simuler la remise de la monnaie en<br>
 affichant les textes "10 Euros", "5 Euros" et "1 Euro" autant de fois qu’il y a de coupures de chaque sorte à rendre.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();


$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">
   
   var total = 0;
do 
{
var nbr=prompt("entrer le prix de l'article, zéro pour stop", "");
var nbr1 = parseInt(nbr);
total += nbr1;


} while (nbr != 0);
document.write("Vous devez un total de : " + total + "<br>");

var sommePayeeString=prompt("entrer la somme payée", "");
var sommePayee= parseInt(sommePayeeString);

if (sommePayee > total)
    {
    var sommeARendre = sommePayee - total ;
    document.write(" On vous rends :" + sommeARendre + "<br>");
    }
else if (sommePayee == total)
    {
        document.write("Vous avez donné l'apoint, félicitation.<br> Vous avez fait preuve d'un certain civisme en épargnant du boulot à la caissiére");

    }
else 
    {
        document.write("vous n'avez pas donné assez");

        do 
        {
            var nbr=prompt("entrer une nouvelle somme donnee", "");
             sommePayee = parseInt(nbr);
            


            } while (sommePayee < total );
            
                 if (sommePayee > total)
                    {
                    var sommeARendre = sommePayee - total ;
                    document.write(" On vous rends :" + sommeARendre + "<br>");
                    }
                else if (sommePayee == total)
                    {
                        document.write("Vous avez donné l'apoint, félicitation.<br> Vous avez fait preuve d'un certain civisme en épargnant du boulot à la caissiére");

                    }
    }

      </script>
<?php
$JS = ob_get_clean();

ob_start();






$formulaire = ob_get_clean();

require('../template.html'); ?>
?>