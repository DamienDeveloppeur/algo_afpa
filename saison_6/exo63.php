<?php
ob_start();
session_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.3</p>
  <p>Ecrire un algorithme qui déclare un <br>
    tableau de 9 notes, dont on fait ensuite<br>
     saisir les valeurs par l’utilisateur.<br>
    </p>
</div>

 <?php 
$enonce = ob_get_clean();


ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array => tableau en numérique et nbr en numérique<br>
DEBUT<br>
POUR index == 0 à index == 8<br>
    ecrire "entrez une note"<br>
    lire nbr <br>
    ajouter nbr à array<br>
FIN DU POUR<br>
ecrire array<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
require './FunctionPhp6.php';
?>

<form method="POST" action="exo63.php">

<div  class="nes-field is-inline">
 <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS63" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo63()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo63jq()" value="Exe jquery" class="nes-btn is-error"></input>
  
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

  </form>
  <?php
    if (!empty($_POST["nbr"]))
    { 
    
    $solution63 = exo63();
?>
<script>

  </script>
<?php
    }
    ?>

    <section class="nes-container is-dark">
      <section class="message-list">
        <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS63" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
           if (isset($solution63))
           {
            echo $_SESSION["solution63"];

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