<?php
ob_start();
echo "
Exercice 5.2 (A)
a) Ecrire un algorithme qui demande un nombre compris entre 10 et 20,<br>
 jusqu’à ce que la réponse convienne. En cas de réponse supérieure à 20,<br>
 on fera apparaître un message : « Plus petit ! », et inversement,<br> « Plus grand ! » si le nombre est inférieur à 10.";
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  DEBUT<br>
    variable nbr en int <br>
ECRIRE "entrey un nombre entre 10 et 20"<br>
Lire nbr <br>
TANT QUE nbr < 10 ET > 20<br>
    si nbr < 10<br>
    ecrire "Entrez un nombre plus grand "<br>
    si sinon nbr > 20<br>
    ecrire "Entrez un nombre plus petit "<br>
    lire nbr <br>
    else <br>
    ecrire "correct, fin du TANT QUE"<br>
    <br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>

<form>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre entre 10 et 20</label>
  <input type="number" id="FJS52A" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo52A()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS52A" class="nes-balloon from-left">
        
      </div>
    </section>

<?php
$JS = ob_get_clean();
ob_start();
?>

<form method="POST" action="exo52A.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>

<?php 


if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];

    if($nbr < 10 || $nbr > 20)
    {
        if ($nbr < 10)
        {
            echo "Plus grand !";
        }
        elseif ($nbr > 20)
        {
            echo "Plus petit ! ";
        }
    
    }
    else 
    {
        echo "Bravo !";
    }
}
$formulaire = ob_get_clean();

require('../template.html');