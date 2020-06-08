<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 10.8</p>
  <p>
  Ecrire un algorithme qui supprime dans notre carnet d'adresses <br>
   tous les individus dont le mail est invalide <br>
   (pour employer un critère simple, on considèrera que sont invalides les mails ne<br>
    comportant aucune arobase, ou plus d'une arobase).<br>
      </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  Bottin : <br>
 aaron          Sophie         1342156487fonfec@yahoo.fr  <br>
berbien        Jean-Philippe  0289765194vantardfree.fr  <br>
zétofrais      Mélanie        0456912347zetofrais@@free.fr <br>
hergébel       Octave         0149875231rg@aol.fr  <br>


  Debut : <br>
Faire sortir chaque lignes en bloc pour désigner les noms/etc... <br>
vérifier caractére par caractére dans l'email  <br>
pour voir si un seul correspondat à une @ <br>

  fin <br>

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
require './FunctionPhp10.php';
?>


<form method="POST" action="exo108.php">
<input  type="hidden" value="" name="exephp"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php
session_start();

    if (isset($_POST["exephp"]))
    {
      $solutionFinal =  exo108();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS615" class="nes-balloon from-left is-dark">
         <?php
    
          ?>
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
     
        //echo($solutionFinal);
      print_r($solutionFinal);
          ?>
        </div>
        <i class="nes-bcrikko"></i>
      </section>
    </section>
  </section>
</section>

<?php
$JS = ob_get_clean();


require('../template.html');