
    <?php
	ob_start();
	?>
 <div class="nes-container with-title is-centered">
 <p class="title">Exercice 22</p>
 <p>Ecrire un programme qui demande un nombre à l’utilisateur,<br>
 puis qui calcule et affiche le carré de ce nombre.</p>
</div>
<?php
$enonce = ob_get_clean();
ob_start();
?>
 Variables val, carre numériques<br>
	DEBUT<br>
		ecrire "veuillez rentrer un nombre : "<br>
		lire val<br>
		carre ← Val * val<br>
		ecrire " le carré de de " + val + " est de " + carre<br>
	FIN<br>
				
<?php
$pseudocode = ob_get_clean();
 ob_start();
 ?>
 
<button type="button" class="nes-btn is-success" onclick="calculerCarre()">Testez le programme !</button>

<form id="F22" >
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <label for="dark_field" style="color:#fff;">Entrez une valeur</label>
  <input type="number" id="dark_field" class="nes-input is-dark"  name="test">
  
  <input  onclick="calculerCarre2()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<div id="affichage">

</div>

<section  class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS22" class="nes-balloon from-left">
        
      </div>
    </section>
</p>
<?php
$JS = ob_get_clean();


include 'exo_1.html';

