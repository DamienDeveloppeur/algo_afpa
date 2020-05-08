<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.2</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array en tableau [5,4,9,2,1]
variable temp en numérique 
DEBUT
    POUR index (i) de 0 à taille du tableau 
    temp = array[i]
            POUR index (j) de i jusqu'a j > 0 et array[j - 1] < temp, j-- 
            array[j] = array[j-1]
            FIN DU POUR 
        array[j] = temp 
    FIN DU POUR 
    ecrire array 
FIN

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
  <input type="number" id="FJS72" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo721()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>
<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS72" class="nes-balloon from-left">
      
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