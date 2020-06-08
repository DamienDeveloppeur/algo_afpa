<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.2</p>
  <p>Ecrire un algorithme qui déclare et remplisse <br>
      un tableau contenant les six voyelles de l’alphabet latin..</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
var arrayLetter = tableau avec des variables de type string<br>
DEBUT<br>
pour index 0 à 5<br>
    SI index ==0<br>
    ALORS ajouter a dans arrayLetter<br>

    SINON SI index == 1<br>
    ajouter e dans arrayLetter <br>

    SINON SI index == 2<br>
    ajouter i dans arrayLetter <br>

    SINON SI index == 3<br>
    ajouter o dans arrayLetter <br>

    SINON SI index == 4<br>
    ajouter u dans arrayLetter <br>

    SINON SI index == 5<br>
    ajouter y dans arrayLetter <br>
    FIN DE SI<br>
    Ecrire arrayLetter<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php';
?>

<form method="POST" action="exo62.php">

  <input  onclick="exo62()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo62jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="hidden" name="exephp" value="">
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php
if (isset($_POST["exephp"]))
{

$control = exo62();

}

?>


    <section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS62" class="nes-balloon from-left is-dark">
          
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
          if (isset($control))
          {
            echo $control;

          }
          ?>
        </div>
        <i class="nes-bcrikko"></i>
      </section>
    </section>
  </section>
</section>




<?php
$JS = ob_get_clean();





require '../template.html';
?>