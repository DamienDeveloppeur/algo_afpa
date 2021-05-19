<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 10.4</p>
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


<form method="POST" action="exo104.php">

<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nom</label>
  <input type="text" id="FJS1031" class="nes-input is-dark"  name="name"/> 
  </div>

  <div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le prénom</label>
  <input type="text" id="FJS6141" class="nes-input is-dark"  name="lastName"/> 
  </div>

  <div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le numéro de téléphone</label>
  <input type="text" id="FJS6141" class="nes-input is-dark"  name="nbr"/> 
  </div>

  <div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le mail</label>
  <input type="text" id="FJS6141" class="nes-input is-dark"  name="email"/> 
  </div>

<input  onclick="exo101()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo101jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
 <input  type="hidden" value="" name="exephp"></input> 
</form>
<?php

    if (isset($_POST["exephp"]))
    {
      $solutionFinal =  exo104();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS104" class="nes-balloon from-left is-dark">
         <?php
    
?>
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
 
    // print_r($aSolution);
      echo $solutionFinal;
     
       
      
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