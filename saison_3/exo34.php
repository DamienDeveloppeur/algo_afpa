<?php
ob_start();
?>
Exercice 3.4<br>
Ecrire un algorithme qui demande un nombre à l’utilisateur,<br>
 et l’informe ensuite si ce nombre est positif ou négatif <br>
 (on inclut cette fois le traitement du cas où le nombre vaut zéro)..<br>
 <?php 
$enonce = ob_get_clean();
ob_start();
?>
variable nb1  en numerique<br>
	DEBUT<br>
		ecrire "Entrer un nom 1 :  "<br>
		lire nom1<br>
		SI ( nb1 > 0 ) ALORS<br>
			ecrire "le nombre " + nb1 + " est positif."<br>
		SINON SI ( nb1 < 0 )<br>
			ecrire "le nombre " + nb1 + " est negatif."<br>
		SINON<br>
			ecrire "le nombre " + nb1 + " est null ."<br>
		FIN de Si<br>
	FIN<br>


<?php
$pseudocode = ob_get_clean();

ob_start();
?>

<form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un premier nom  </label>
  <input type="text" id="FJS334" class="nes-input is-dark"  name="PAHT"/> <br><br><br>

  <input  onclick="exo34()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS334" class="nes-balloon from-left">
        
      </div>
    </section>

<?php
$JS = ob_get_clean();


require 'exo_1.html';
?>


