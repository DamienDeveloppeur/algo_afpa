<?php
ob_start();
?>
<h1> Exercice 6.14 </h1>
Toujours et encore sur le même principe, écrivez un algorithme permettant, <br>
à l’utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, <br>
renvoie le nombre de ces notes supérieures à la moyenne de la classe.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

var nbr = prompt("Entrer le nombre de valeur souhaitée", "");
var nbrDonnee = parseInt(nbr);
var arrayNotes = [];
var somme = 0;


for (i = 0; i < nbrDonnee; i++)
{
    var nbr1 = prompt("Entrer une note", "");
    var noteRentree = parseInt(nbr1);
  
    arrayNotes.push(noteRentree);

    somme = somme+  noteRentree;

}

var moy = somme / arrayNotes.length;
document.write(moy + "<br>");



var solution = arrayNotes.filter(element => element > moy);
 document.write(solution);



      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>