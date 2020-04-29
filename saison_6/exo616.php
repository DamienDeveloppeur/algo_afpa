<?php
ob_start();
?>
<h1> Exercice 6.16 </h1>
Ecrire un algorithme permettant de résoudre le problème suivant :<br>
– Données : un tableau tableau contenant 100 entiers<br>
– Résultat : “vrai” si les entiers sont consécutifs et “faux” sinon<br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();

?>
    <script type="text/javascript">
var controle = 0;
 var array = [];
for (i=0; i < 100; i++)
{
      array.push(i);
}

for (i=1; i < 100; i++)
{
     if (array[i] == array[i] -1 && array[i] == array[i] +1 )
     {
controle = 1;
     }
      else
      {
           controle = 2;
      }
}
if (controle = 1)
{
      document.write("Tout est dans l'ordre");
}
else
{
      document.write("C'est pas dans l'ordre");
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