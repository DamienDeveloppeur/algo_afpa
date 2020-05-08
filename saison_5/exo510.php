<?php
ob_start();
?>
<h1> Exercice 5.10 </h1>
Lire la suite des prix (en euros entiers et terminée par zéro) des achats d’un client.<br>
 Calculer la somme qu’il doit, lire la somme qu’il paye, et simuler la remise de la monnaie en<br>
 affichant les textes "10 Euros", "5 Euros" et "1 Euro" autant de fois qu’il y a de coupures de chaque sorte à rendre.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable total, nbr, sommePayee et sommeARendre en numérique <br>
DEBUT<br>
    REPETEZ
    Ecrire entrer le prix de vos articles, 0 pour stop 
    lire nbr <br>
    total = total + nbr<br>
    TANT QUE nbr != 0<br>
        ecrire "vous devez un total de :" + total <br>
        ecrire "entrez ici la somme payee"<br>
        lire sommePayee<br>
             SI sommePayee == sommeTotal <br>
                ALORS ecrire Vous avez donnez l'appoint, merci de votre visite <br>
             SINON SI sommePayee > total <br>
                      sommeARendre = sommePayee - total <br>
                      Ecrire "On vous rends la somme de "+ sommeARendre <br>
            SINON SI sommePayee < total <br>
                    REPETEZ <br>
                    ecrire entrez une nouvelle somme <br>
                    lire sommePayee<br>
                    JUSQU'A sommePayee < total <br>
                        SI sommePayee > total <br>
                        sommeARendre = sommePayee - total <br>
                        Ecrire "on vous rends : " + sommeARendre <br>
                        SINON <br>
                        ecrire "vous avez donnez l'appoint, merci de votre visite"  <br>            
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>

<form>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS510" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo510()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS510" class="nes-balloon from-left">
        
      </div>
    </section>


<?php
$JS = ob_get_clean();

ob_start();

?>

<form method="POST" action="exo510.php">

<div class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS510" class="nes-input is-dark"  name="nbr"/> 
</div>

  <input type="submit" value="Envoyer" class="nes-btn is-error"></input>
  


     
    <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
      <input type="number" id="sommePayee" class="nes-input is-dark"  name="sommePayee"/> <br><br><br>
      <input type="submit" value="Envoyer2" class="nes-btn is-error"></input>
      
    

</form>
<?php
if (isset($_POST["nbr"]))
{
  ?>
  <script type="text/javascript" >
displaysommePayee();
</script>

  <?php
 
$nbr = $_POST["nbr"];

$total = 0;
$sommeARendre = 0;
$sommeTotal = "";
$resultat2 = "";
   
/*
    $sommeTotal = "Vous devez un total de : " . $total . "<br>";


    if ($sommePayee > $total)
        {
      $sommeARendre = $sommePayee - $total ;
      echo " On vous rends :" . $sommeARendre . "<br>";
        }
    else if ($sommePayee == $total)
        {
            echo  "Vous avez donné l'apoint, félicitation.<br>";

        }
    else 
        {
           echo  "vous n'avez pas donné assez";

        }







*/
}


?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS510" class="nes-balloon from-left">
        <?php
var_dump($nbr);
        ?>
      </div>
    </section>


<?php
$formulaire = ob_get_clean();

require('../template.html'); ?>
?>