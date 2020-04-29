<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 4.5</p>
  <p>Les habitants de Toon’sCity paient l’impôt selon les règles suivantes :<br>
  <div class="lists">
<ul class="nes-list is-circle">
    <li>les hommes de plus de 20 ans paient l’impôt</li>
    <li>les femmes paient l’impôt si elles ont entre 18 et 35 ans</li>
    <li>les autres ne paient pas d’impôt</li>
    
  </ul>
</div>
Le programme demandera donc l’âge et le sexe du Toon,<br> et se prononcera donc ensuite sur le fait que l’habitant est imposable ou non.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();


$pseudocode = ob_get_clean();

ob_start();

?>


<form>
   <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le sexe de l'individu </label>
  <input type="text" id="FJS451" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez l'age de l'individu </label>
  <input type="number" id="FJS452" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo45()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS45" class="nes-balloon from-left">
        
      </div>
    </section>


    <?php
$JS = ob_get_clean();

ob_start();

?>

<form method="POST" action="exo45.php">
<label>Entrer H ou F pour le sexe </label>
    <input type ="text" name="sexe">
    <input type="submit" value="valider">

    <label>Entrer votre age</label>
    <input type ="number" name="age">
    <input type="submit" value="valider">


</form>



<?php
if (isset($_POST["sexe"] ) && isset($_POST["age"]))
{
$sexe = $_POST["sexe"];

$age = $_POST["age"];


    if ($sexe = "H")
    {
        if ($age >= 20)
        {
            echo "tu paie";
        }
        else
        {
            echo "pour l'instant tu paie";
        }
    }
   elseif ($sexe = "F")
    {
        if ($age >= 18 && $age <= 35)
        {
            echo "tu paie";
        }
        else 
        {
            echo "pour l'instant tu paie pas";
        }
    }
}

$formulaire = ob_get_clean();



require('../template.html');