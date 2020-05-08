<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">exercice 7.1</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable arrayExo71 en tableau numérique <br>
variable tailleTableau, temp, nbr en numérique <br>
DEBUT<br>
    ecrire "entrez le nombre de valeur souhaitée"<br>
    lire tailleTableau<br>
      POUR index (i) de 0 à taille de arrayExo71 <br>
            ecrire "entrez les valeurs souhaitée"<br>
            lire nbr <br>
            ajouter nbr dans arrayExo71<br>
                POUR index (p) de 0 à taille de arrayExo71<br>
                  TANT QUE array[i] > array[i + 1]<br>
                    SI array[i] > array[i + 1]<br>
                        var temp = array[i + 1]<br>
                        array[i + 1] = array[i]<br>
                        array[i] = temp<br>
                    FIN DE SI <br>
                  FIN DU TANT QUE<br>
                FIN DU POUR <br>
      FIN DU POUR <br>
      <br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();



ob_start();

$showJS= ob_get_clean();

ob_start();

$showjquerry = ob_get_clean();

ob_start();

$showphp = ob_get_clean();

ob_start();
?>
<form>

<div class="nes-field is-inline noircnoir">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS71" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo71()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>
<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS71" class="nes-balloon from-left">
      
    </div>
  </section>
<?php
$JS = ob_get_clean();

ob_start();

$jquerry = ob_get_clean();

ob_start();
?>

<?php
$formulaire = ob_get_clean();


require('../template.html');