<?php
ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Exercice 3.4</p>
  Ecrire un algorithme qui demande un nombre à l’utilisateur,<br>
 et l’informe ensuite si ce nombre est positif ou négatif <br>
 (on inclut cette fois le traitement du cas où le nombre vaut zéro)..<br>
</div>

 <?php 
$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
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
</div>



<?php
$pseudocode = ob_get_clean();

ob_start();
?>

<form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un premier nom  </label>
  <input type="text" id="FJS334" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
  </div>
  <input  onclick="exo34()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo34jq()" value="Exe jquery" class="nes-btn is-error"></input>
</form>

<br>
<!-- 
<section class="message -left">
      <i class="nes-bcrikko"></i>
      
      <div id ="AJS334" class="nes-balloon from-left">
        
      </div>
	</section>
-->

	<section class="nes-container is-dark">
  <section class="message-list">
    <section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS334" class="nes-balloon from-left">
        <p>Hello NES.css</p>
      </div>
    </section>

  </section>
</section>







<?php
$JS = ob_get_clean();
ob_start();

$jquerry = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


include '../template.html';
?>


