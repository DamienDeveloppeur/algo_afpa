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
<form>
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

  <input  onclick="exo41()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS41" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();
ob_start();

?>

<p>Veuillez entrer un chiffre entre 1 et 3 </p>
 

        
          <form method="POST" action="exo41.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
    
    <?php
    if (isset($_POST["nbr"]))
    {

    
        if ($_POST["nbr"] < 1 || $_POST["nbr"] > 3)
        {
            echo "not good";
            
        }
        else 
        {
            echo "Bravo !";
        }
}
$formulaire = ob_get_clean();
 
require('../template.html');

