<?php
	ob_start(); 
?>
<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 4.4 </p>
  Un magasin de reprographie facture 0,10 E les dix premières photocopies, <br>
   
   0,09 E les vingt suivantes et 0,08 E au-delà.<br>
    Ecrivez un algorithme qui demande à l’utilisateur le <br>
    nombre de photocopies effectuées et qui affiche la facture correspondante.<br>
  </div>
   
    <?php
$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr en numérique<br>
DEBUT<br>
    ecrire entrez le nombre de photocopie<br>
    lire nbr <br>
        SI nbr <=10<br>
        ALORS ecrire "Tarif : " + (nbr * 0.10) + " euros"<br>
        SINON SI nbr <=30 et nbr >10 <br>
        ALORS ecrire "Tarif : " + ((0.10 * 10) + (nbr - 10) * 0.09)+ " euros"<br>
        SINON SI nbr > 30<br>
        ALORS ecrire "Tarif : " + ((0.10 * 10) + (0.09 * 20) + (nbr - 30) * 0.08)+ " euros"<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


    if (isset($_POST["nbr"]))
    {
    $nbr = $_POST["nbr"];

        if ($nbr <= 10)
        {
            
            $control = "Tarif :" . $nbr  * 0.10;
            
        } 
        elseif ($nbr <= 30 && $nbr > 10)
        {
           $control = ((0.10 * 10) + ($nbr - 10)) * 0.09;
        }
        elseif ($nbr > 30)
        {
            $control = (0.10 * 10) + (0.09 * 20) + ($nbr - 30) * 0.08;
        }
    }

   
ob_start();

?>
<form action="exo44.php" method="POST">
   <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez le nombre de copie</label>
  <input type="number" id="FJS44" class="nes-input is-dark"  name="nbr"/> <br><br><br>
</div>

  <input  onclick="exo44()" value="Envoyer" class="nes-btn is-error"></input>
  <input  onclick="exo44jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS44" class="nes-balloon from-left">
      <?php
      if (isset($control))
        {
         
         echo $control;
         
        }
        ?>
      </div>
    </section>

<?php
$JS = ob_get_clean();
require('../template.html');