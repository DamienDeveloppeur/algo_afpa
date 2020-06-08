<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 8.1</p>
  <p>Écrivez un algorithme remplissant un tableau de 6 sur 13, avec des zéros.</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

DEBUT

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
require './FunctionPhp8.php';
?>


<form method="POST" action="exo81.php">

<input  onclick="exo81()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo81jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input   value="" type="hidden" name="exephp"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php

    if (isset($_POST["exephp"]))
    {
      $solution1  = exo81();
    }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS81" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
      if (isset($solution1 ))
      {
       echo $solution1;
       //var_dump($solution)  ;
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


require('../template.html');