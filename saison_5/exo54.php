<?php
ob_start();
?>
<h1>Exercice 5.4</h1>
Réécrire l'algorithme précédent, en utilisant cette fois l'instruction Pour
<?php

$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
      variable nbr, index,  en numérique <br>
      variable listeNombre en string
      variable index en numérique<br>
DEBUT<br>
        POUR index nbr + 1 à nbr + 11<br>
        <br>
        listeNombre = listeNombre +  index + " ";<br>
        FIN POUR<br>
        Ecrire listeNombre; <br>
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
  <input type="number" id="FJS54" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo54()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS54" class="nes-balloon from-left">
        
      </div>
    </section>

    <?php
$JS = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo54.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];

for ($i = $nbr + 1;  $i < $nbr + 11; $i++)
{
    
    echo "$i";
}
}

$formulaire = ob_get_clean();


ob_start();

$showphp = ob_get_clean();

require('../template.html');