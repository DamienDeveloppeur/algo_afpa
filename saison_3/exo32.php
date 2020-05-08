<?php
ob_start();
?>
Exercice 3.2<br>
Ecrire un algorithme qui demande deux nombres à l’utilisateur <br>
et l’informe ensuite si leur produit est négatif ou positif <br>
(on laisse de côté le cas où le produit est nul).<br>
 Attention toutefois : on ne doit pas calculer le produit des deux nombres.<br>
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
  
  <form >
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un premier nombre  </label>
  <input type="text" id="FJS3321" class="nes-input is-dark"  name="PAHT"/> <br><br><br>

  <label for="dark_field" style="color:#fff;">Entrez un deuxieme nombre  </label>
  <input type="text" id="FJS3322" class="nes-input is-dark"  name="PAHT2"/> <br><br><br>
  </div>
  <input  onclick="exo32()" value="Exe JS" class="nes-btn is-error"></input>
  <input  onclick="exo32jq()" value="Exe JQUERY" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS32" class="nes-balloon from-left">
      
	
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


