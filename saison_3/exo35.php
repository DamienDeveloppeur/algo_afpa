<?php
ob_start();
?>
Exercice 3.5<br>
Ecrire un algorithme qui demande un nombre à l’utilisateur,<br>
 et l’informe ensuite si ce est positif ou négatif <br>
 (on inclut cette fois le traitement du cas où le nombre vaut zéro).<br>
 <?php 
$enonce = ob_get_clean();
ob_start();
?>
variable nb en numerique<br>
	DEBUT<br>
		ecrire "Entrer un nombre :  "<br>
		lire nb<br>
		SI (nb>0) ALORS<br>
			ecrire "votre nombre est positif"<br>
		Sinon<br>
			ecrire "votre nombre est negatif"<br>
		FIN de Si<br>
	FIN<br>

<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un premier nombre </label>
  <input type="text" id="FJS3351" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <label for="dark_field" style="color:#fff;">Entrez un deuxiéme nombre  </label>
  <input type="text" id="FJS3352" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>
  <input  onclick="exo35()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo35jq()" value="Exe jquery" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS335" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();
ob_start();

$jquerry = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


include '../template.html';
?>
