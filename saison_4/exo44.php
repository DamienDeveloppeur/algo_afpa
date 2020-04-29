<?php
	ob_start(); 
?>
<h1> Exercice 4.4 </h1>
    Un magasin de reprographie facture 0,10 E les dix premières photocopies,<br>
   
    0,09 E les vingt suivantes et 0,08 E au-delà.<br>
     Ecrivez un algorithme qui demande à l’utilisateur le nombre de photocopies effectuées et qui affiche la facture correspondante.<br>
    <?php
$enonce = ob_get_clean();
ob_start(); 
?>
variable Tutu et Toto  en numerique<br>
	variable Tata en alphanumerique<br>
	DEBUT<br>
		ecrire " quelle nombre vaut Tutu : "<br>
		lire Tutu ;<br>
		ecrire " quelle nombre vaut Toto : "<br>
		lire Toto ;<br>
		ecrire " quelle mot vaut Tata : "<br>
		lire Tata;<br>

		SI ( Tutu <= ( Toto +4 ) ET (Tata.toUpperCase() != "OK")) ALORS<br>

			Tutu-- ;<br>
			ecrire "tutu vaut maintenant : " + Tutu;<br>
		
        SINON<br>
        <?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo44.php">
<label>Rentrer le nombre de photocopie pour connaitre le tarif </label>

<input type="number" name="nbr"/>
<input type="submit" value="Envoyer"/> 
</form>

    <?php
    if (isset($_POST["nbr"]))
    {
    $nbr = $_POST["nbr"];

        if ($nbr <= 10)
        {
            
            echo "Tarif :" . $nbr  * 0.10;
            
        } 
        elseif ($nbr <= 30 && $nbr > 10)
        {
            echo ((0.10 * 10) + ($nbr - 10)) * 0.09;
        }
        elseif ($nbr > 30)
        {
            echo (0.10 * 10) + (0.09 * 20) + ($nbr - 30) * 0.08;
        }
    }

    $formulaire = ob_get_clean();

  ob_start();
?>
<form>
   <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez le nombre de copie</label>
  <input type="number" id="FJS44" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo44()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS44" class="nes-balloon from-left">
        
      </div>
    </section>

<?php
$JS = ob_get_clean();
require('../template.html');