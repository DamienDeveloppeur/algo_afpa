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
/*
Dans l’ordre : une chance sur X de gagner 
Dans le désordre : une chance sur Y de gagner

X = n ! / (n - p) !
Y = n ! / (p ! * (n – p) !)

NB : la factorielle de 8, notée 8 !, vaut
1 x 2 x 3 x 4 x 5 x 6 x 7 x 8

*/
var nbr=prompt("entrer le nombre de chevaux partans", "");
var n = parseInt(nbr);

var nbr2=prompt("entrer le nombre de chevaux joué", "");
var p = parseInt(nbr2);


var factoN = 1;
for (i = 1; i != n + 1; i++  )
{
    factoN = factoN * i;  
}

var factoPN = 1;
for (i = 1; i != (n - p)  + 1; i++  )
{
    factoPN = factoPN * i;  
}

var factoP = 1;
for (i = 1; i != p  + 1; i++  )
{
    factoP = factoP * i;  
}


var X = factoN / factoPN;

var Y = factoN / (factoP * factoPN);
document.write("Vous avez une chance sur " + X + "de gagner dans l'ordre");
document.write("Vous avez une chance sur " + Y + "de gagner dans le désordre");
//document.write(factoN);


      </script>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();

require '../template.html';
?>
