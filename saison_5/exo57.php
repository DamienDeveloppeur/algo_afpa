<?php
ob_start();
?>
<h1>Exercice 5.7</h1>
Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.<br>
NB : la factorielle de 8, notée 8 !, <br> vaut
1 x 2 x 3 x 4 x 5 x 6 x 7 x 8
<?php

$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr et somme en numérique<br>
DEBUT<br>
somme = 1;<br>
index = 1;<br>
pour index != nbr + 1<br>
somme = somme * index;<br>
    SI index == nbr <br>
    ALORS <br>
    Ecrire somme <br>
    FIN DU POUR<br>
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
  <input type="number" id="FJS57" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo57()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS57" class="nes-balloon from-left">
        
      </div>
    </section>
    <?php
$JS = ob_get_clean();


ob_start();
?>
<form method="POST" action="exo57.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$somme = 1;

for ($i = 1; $i != $nbr + 1; $i++  )
{
    $somme = $somme * $i;
    if ($i == $nbr)
    {

    echo $somme ;
    }
    
}
}
$formulaire = ob_get_clean();
ob_start();

$showphp = ob_get_clean();

require('../template.html'); ?>