
<?php
ob_start();
?>
Exercice 3.1<br>
Ecrire un algorithme qui demande un nombre à l’utilisateur,<br>
 et l’informe ensuite si ce nombre est positif ou négatif <br>
 (on laisse de côté le cas où le nombre vaut zéro).<br>
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
<form method="POST" action="exo31.php">
<div class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un nombre =/= 0  </label>

  <input type="text" id="FJS331" class="nes-input is-dark"  name="PAHT"/>
  </div>


  <input  onclick="exo31()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo31jq()" value="Exe jquery" class="nes-btn is-error"></input>
  
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS31" class="nes-balloon from-left">
		<?php
		if (isset($_POST["PAHT"]))
		{
			echo $_POST["PAHT"];
		}
		?>
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





