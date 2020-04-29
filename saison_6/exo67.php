<?php
ob_start();
?>
<h1>  </h1>

 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">

var array = [];
var somme = 0;
var moy = 0;

for (i =0; i < 9; i++)
{
   var nbr=prompt("Entrer une note", "");
   var nbr1 = parseInt(nbr);
    array.push(nbr1);

   somme = somme + nbr1;
    moy = somme / array.length;
}


document.write(array + "<br>");
document.write(moy);

      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>