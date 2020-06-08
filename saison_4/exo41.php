<?php 

  ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 4.1</p>
  <p>Formulez un algorithme équivalent à l’algorithme suivant :<br>
       Si Tutu > Toto + 4 OU Tata = "OK" Alors <br>
       Tutu ← Tutu + 1 <br>
        Sinon <br>
        Tutu ← Tutu – 1 <br>
        Finsi<br> </p>
</div>


<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

DEBUT

FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo41.php"> 
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez une valeur pour Tutu  </label>
  <input type="text" id="FJS411" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez une valeur pour Toto  </label>
  <input type="text" id="FJS412" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez une valeur pour Tata </label>
  <input type="text" id="FJS413" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo41()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo41jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS41" class="nes-balloon from-left">
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

    if (isset($_POST["nbr"]))
    {

    
        if ($_POST["nbr"] < 1 || $_POST["nbr"] > 3)
        {
          $control = "not good";
            
        }
        else 
        {
          $control = "Bravo !";
             
        }
}
$formulaire = ob_get_clean();
 
require('../template.html');

