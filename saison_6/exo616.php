<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.16</p>
  Ecrire un algorithme permettant de résoudre le problème suivant :<br>
– Données : un tableau tableau contenant 100 entiers<br>
– Résultat : “vrai” si les entiers sont consécutifs et “faux” sinon<br>
</div>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable controle en numérique <br>
variable array en tableau numérique dans l'ordre<br>
variable arrayTest en tableau numérique dans le désordre<br>
DEBUT<br>
    POUR index (i) de 1 à array.length - 1 <br>
          SI array[i] - 1 == array[i - 1] && array[i]  + 1== array[i +1]<br>
          ALORS controle = 1<br>
          sinon <br>
          ALORS controle = 2<br>
          FIN DE SI <br>
    FIN DU POUR <br>
  SI controlle ==1 <br>
    Alors ecrire tout est dans l'ordre <br>
  SINON <br>
  alors ecrire tout les dans l'ordre <br>
FIN<br>
<br>o
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php';
?>
<form method="POST" action="exo616.php">

<div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
  <label for="dark_select" style="color:#fff">Array 1 = [1,2,3,4,5,6,7,8] ~~ Array 2 = [9,4,7,3,1,2,8,4]</label>
  <div class="nes-select is-dark">
    <select required id="dark_select" name="choixArray">
      <option  value="" disabled selected hidden>Choisir un des arrays</option>
      <option value="0">Premier array</option>
      <option value="1">Second array</option>
    </select>
  </div>
</div>

<input  onclick="exo616()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo616jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
if (isset($_POST["choixArray"]))
{
  $control = exo616();
 
}
?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS616" class="nes-balloon from-left is-dark">
 
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

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>