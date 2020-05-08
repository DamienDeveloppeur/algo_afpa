<?php
ob_start();
echo "Exercice 5.3<br>
a) Ecrire un algorithme qui demande un nombre de départ, <br>et qui ensuite affiche les dix nombres suivants.<br>
 Par exemple, si l'utilisateur entre le nombre 17,<br> le programme affichera les nombres de 18 à 27.<br>";

$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  variable nbr en numérique<br>
  variable index en numérique<br>
  variable listeNombre en string <br>
DEBUT<br>
    ecrire "entrez un nombre"<br>
    lire nbr <br>
    index = nbr +1<br>
    TANT QUE index != nbr + 11<br>
    index ++<br>
    ecrire index<br>
    listeNombre = listeNombre +  index + " "; <br>
    FIN DU TANT QUE<br>
   Ecrire = listeNombre;
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
?>
<form>

<div class="nes-field is-inline noircnoir">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS53" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo53()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS53" class="nes-balloon from-left">
        
      </div>
    </section>
    <?php
$JS = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo53.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
<?php
if (isset($_POST["nbr"]))
{
$nbr = $_POST["nbr"];
$i = $nbr;
while ($i < $nbr + 11)
{
    $i++;
    echo "$i";
}
}
$formulaire = ob_get_clean();

require('../template.html');