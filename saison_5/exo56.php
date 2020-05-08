<?php
ob_start();
?>
<h1>Exercice 5.6</h1>
Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu’à ce nombre. <br>
Par exemple, si l’on entre 5, le programme doit calculer :<br>
1 + 2 + 3 + 4 + 5 = 15<br>
<?php

$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr et somme en numérique
DEBUT
somme = 0;<br>
index = 1;<br>
ecrire entrez un nombre
lire nbr 
POUR index != nbr + 1;
index ++
somme = somme + index;
        SI index strictement égale à nbr 
        ALORS
        Ecrire somme 
FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS56" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo56()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS56" class="nes-balloon from-left">
        
      </div>
    </section>
    <?php
$JS = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo56.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php

if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$somme = 0;

for ($i = 1; $i != $nbr + 1; $i++  )
{
    $somme = $somme + $i;
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