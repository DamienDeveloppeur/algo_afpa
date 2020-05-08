<?php
ob_start();
?>

<?php
$enonce = ob_get_clean();



ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable n, p, factoN, factoP, factoPN, X et Y en numérique <br>
DEBUT<br>
Ecrire "entrez le nombre de chevaux partant"<br>
lire n <br>
ecrire "entrez le nombre de chevaux joué"<br>
lire p <br>
var factoN = 1 <br>
var factoP = 1 <br>
var factoPN = 1<br>
var index = 1<br>
<br>
    POUR index !=n+1 <br>
    factoN = factoN * index <br>
    FIN DU POUR <br>
    <br>
    POUR index != p+1 <br>
    factoP = factoP * index <br>
    FIN DU POUR <br>
    <br>
    POUR index != (n-p) + 1<br>
    factoPN = factoPN * index <br>
    FIN DU POUR <br>
    <br>
X = factoN / factoPN <br>
Y = factoN / (factoP * factoPN) <br>
<br>
Ecrire "vous avez une chance sur " + X + "de gagner dans l'ordre"<br>
Ecrire "vous avez une chance sur " + Y + "de gagner dans le désordre"<br>
ecrire "sinon vous payez votre import volontaire"<br>
<br>
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
  <input type="number" id="FJS511" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo511()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS511" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();

require '../template.html';
?>
