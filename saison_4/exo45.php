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
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable sexe et age en numérique <br>

DEBUT<br>
ecrire indiquez votre sexe <br>
lire sexe1<br>
ecrire indiquez votre age <br>
lire age<br>
    SI sexe  == "h" ou "H" <br>
    ALORS sexe  = 1<br>
    SINON SI sexe == "f" ou "F"<br>
    ALORS sexe = 2<br>
    FIN DU SI <br>

    SI sexe == 1 <br>
        SI age >= 20<br>
          ecrire "Imposable"<br>
        SINON <br>
          ecrire non-imposable <br>

    SINON SI sexe == 2<br>
        SI age >= 18 et <=35 <br>
        ecrire imposable <br>
        SINON <br>
        ecrire non-imposable<br>
    FIN DU SI<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();

?>


<form method="POST" action="exo45.php">
<!--
   <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le sexe de l'individu </label>
  <input type="text" id="FJS451" class="nes-input is-dark"  name="sexe"/> <br><br><br>
</div>
-->
<div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
  <label for="dark_select" style="color:#fff">nes-select.is-dark</label>
  <div class="nes-select is-dark">
    <select required id="FJS451" name="sexe">
      <option value="" disabled selected hidden>Selectionner H/F</option>
      <option value="0">Homme</option>
      <option value="1">Femme</option>
    </select>
  </div>
</div>



<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez l'age de l'individu </label>
  <input type="number" id="FJS452" class="nes-input is-dark"  name="age"/> <br><br><br>
</div>

  <input  onclick="exo45()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo45jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input type="submit" value ="Exe PHP" class="nes-btn is-error"></input>
</form>
</div>
<br>
<?php
if (isset($_POST["sexe"] ) && isset($_POST["age"]))
{

  $sexe = $_POST["sexe"];

  $age = $_POST["age"];

    if ($sexe == 0)
    {
        if ($age >= 20)
        {
            $control ="imposable";
        }
        else
        {
            $control ="non-imposable";
        }
    }
   elseif ($sexe == 1)
    {
        if ($age >= 18 && $age <= 35)
        {
          $control ="imposable";
        }
        else 
        {
          $control = "non-imposable";
        }
    }
}

?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS45" class="nes-balloon from-left">
        <?php
  
         echo $control;
         
        
        ?>
      </div>
    </section>


    <?php
$JS = ob_get_clean();





require('../template.html');