<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 10.2</p>
  <p>Ecrivez l’algorithme qui produit un résultat similaire<br>
   au précédent, mais le fichier texte "Exemple.txt"<br>
    est cette fois de type délimité (caractère de délimitation : /).<br>
     On produira à l'écran un affichage où pour des raisons<br>
      esthétiques, ce caractère sera remplacé avec des espaces.<br>
      </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  Variable Truc en Caractère<br>
   Début <br>
   Ouvrir "Exemple.txt" sur 5 en Lecture<br>
    Tantque Non EOF(5)<br>
     LireFichier 5, Truc<br>
      Ecrire Truc<br>
       FinTantQue <br>
       Fermer 5<br>
        Fin<br>


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


<form method="POST" action="exo102.php">

<input  onclick="exo101()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo101jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
<input  type="hidden" value="" name="exephp"></input>
</form>
<?php

    if (isset($_POST["exephp"]))
    {
      $buffer =  exo102();
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
     
        echo $buffer;
      
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