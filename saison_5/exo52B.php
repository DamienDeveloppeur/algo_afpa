<?php

ob_clean();

echo "Exercice 5.2 B <br>

b) Ecrire un algorithme qui choisit un nombre au hasard compris entre 1 et 100.<br>
 Pour ceci, on utilise la fonction : iNombreHasard <- random[1..100] <br>
 Demander à l'utilisateur de trouver le nombre. On fera apparaître un message : « Plus petit ! »,<br>
  et inversement, « Plus grand ! » jusqu’à ce que l'utilisateur ait trouvé et afficher en combien de coups.<br>";

  $enonce = ob_get_clean();
  ob_start();
  ?>
  <div class="nes-container is-dark with-title">
    <p class="title">Pseudo-code</p>
    <p>
      var nbr en numérique<br>
      var compteur en numérique<br>
  DEBUT<br>
  iNombreHasard <- random[1..100]<br>
  ecrire "Devinez un nombre en 1 et 100<br>
  lire nbr<br>
TANT QUE nbr != iNombreHasard<br>
compteur ++;<br>
  SI (nbr < iNombreHasard)<br>
  <br>
    ecrire "Plus grand !";<br>
      lire nbr<br>
      <br>
SINON SI (nbr > iNombreHasard)<br>
    ecrire "plus petit !"<br>
    lire nbr <br>
    FIN DE SI <br>
  FIN DE TANT QUE <br>
Ecrire : "vous avez trouvez le nombre <br>
iNombreHasard "en " compteur "coup"<br>
  FIN <br>
    </p>
  </div>
  <?php
  $pseudocode = ob_get_clean();

  ob_start();
?>
  
      <form>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Devinez le nombre entre 1 et 100</label>
  <input type="number" id="FJS52B" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo52B()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS52B" class="nes-balloon from-left">
        
      </div>
    </section>







<?php
$JS = ob_get_clean();


  ob_start();

?>
<div class="refresh">
    <?php
  $nbr1 = rand (1, 1000);
?>
</div>


<form method="POST" action="exo52B.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>

<?php 


if (isset($_POST["nbr"]) && isset($nbr1))
{
    
$nbr = $_POST["nbr"];
    if ($nbr != $nbr1)
    {
        
            if ($nbr < $nbr1)
            {
                echo "Plus grand !";
            }
            elseif ($nbr > $nbr1)
            {
                echo "Plus petit ! ";
            }
        
        }
        

else if ($nbr == $nbr1)
{
    echo "bien joué !";
}
}
echo $nbr1;
 $formulaire = ob_get_clean();

 require('../template.html');
 ?>