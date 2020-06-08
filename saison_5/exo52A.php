<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.2 (A)</p>
  a) Ecrire un algorithme qui demande un nombre compris entre 10 et 20,<br>
 jusqu’à ce que la réponse convienne. En cas de réponse supérieure à 20,<br>
 on fera apparaître un message : « Plus petit ! », et inversement,<br>
  « Plus grand ! » si le nombre est inférieur à 10.";
</div>
<?php
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
<div id="FJS52AG">
<form method="POST" action="exo52A.php">  

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre entre 10 et 20</label>
  <input type="number" id="FJS52A" class="nes-input is-dark"  name="nbr"/> <br><br><br>
</div>

  <input  onclick="exo52A()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo52Ajq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input type="submit" value="Exe PHP" class="nes-btn is-error"></input>
  </div>
</form>
</div>
<?php
if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];

    if($nbr < 10 || $nbr > 20)
    {
        if ($nbr < 10)
        {
           $control = "Plus grand !";
        }
        elseif ($nbr > 20)
        {
            $control ="Plus petit ! ";
        }
    
    }
    else 
    {
       $control = "Bravo !";
       ?>
       <script>
       document.getElementById("FJS52AG").style.display = "none";
    </script>
    <?php
    }
}
?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS52A" class="nes-balloon from-left">
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
ob_start();


$formulaire = ob_get_clean();

require('../template.html');