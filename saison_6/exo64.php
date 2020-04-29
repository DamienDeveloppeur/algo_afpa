<?php
ob_start();
?>
<h1> Exercice 6.4 </h1>
Que produit l’algorithme suivant ? <br>
Tableau Nb(5) en Entier <br>
Variable i en Entier <br>
Début<br>
 Pour i ← 0 à 5 <br>
 Nb(i) ← i * i<br>
 i suivant<br>
   Pour i ← 0 à 5<br>
   Ecrire Nb(i)<br>
    i suivant <br>
    Fin<br>
Peut-on simplifier cet algorithme avec le même résultat ?<br><br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">
    var nb = [];
for (i=0; i< 5; i++)
{
  nb.push() = i * i;


}


      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>