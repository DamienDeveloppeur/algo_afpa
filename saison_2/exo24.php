<?php 

 ob_start(); 

echo "exercice 2.4 <br>
Ecrire un algorithme utilisant des variables de type chaîne de caractères,<br>
 et affichant quatre variantes possibles de la célèbre <br>
« belle marquise, vos beaux yeux me font mourir d’amour ».<br>
 On ne se soucie pas de la ponctuation, ni des majuscules.<br>
";
$enonce = ob_get_clean();

ob_start();
?>
 Variables phrase1, phrase2 ,phrase3 ,phrase4, phrase5 alphanumériques<br>
DEBUT<br>
	phrase1 <-- "belle marquise"<br>
	ecrire phrase1<br>
	phrase2 <-- "vos yeux"<br>
	ecrire phrase2<br>
	phrase3 <-- "me font "<br>
	ecrire phrase3<br>
	phrase4 <-- "mourrir d'amour"<br>
	ecrire phrase4<br>
    <br>
string2 + string1 + string3 + string4;<br>
string2 + string3 + string4 + string1;<br>
string1 + string2 + string4 + string3;<br>
string4 + string3 + string2 + string1;<br>
	

FIN
				

<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<input  onclick="exo24()" value="Envoyer" class="nes-btn is-error"></input>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS24" class="nes-balloon from-left">
        
      </div>
    </section>

<?php
$JS = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


include '../template.html';