<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 10.5</p>
  <p>
  Même question, mais cette fois le carnet est supposé être <br>
   trié par ordre alphabétique. L’individu doit donc être<br>
inséré au bon endroit dans le fichier.<br>
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
berbien        Jean-Philippe  0289765194vantard@free.fr  <br>
hergébel       Octave         0149875231rg@aol.fr  <br>
zétofrais      Mélanie        0456912347zetofrais@free.fr <br>


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


<form method="POST" action="exo105.php">

<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nom à modif</label>
  <input type="text" id="FJS1051" class="nes-input is-dark"  name="name"/> 
  </div>

  <div class="nes-field is-inline" id="FJS1052G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nouveau nom</label>
  <input type="text"  class="nes-input is-dark"  name="nameChanged"/> 
  </div>

<input  onclick="exo101()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo101jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php
session_start();

    if (!empty($_POST["nameChanged"]) || !empty($_POST["name"]))
    {
      $solutionFinal =  exo105();
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