<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 7.7</p>
  <p>
  Écrivez un algorithme qui fusionne deux tableaux (déjà existants)<br>
   dans un troisième, qui devra être trié.<br>
Attention ! On présume que les deux tableaux de départ sont préalablement triés :<br>
 il est donc irrationnel de faire une simple concaténation des deux tableaux de départ,<br>
  puis d'opérer un tri : comme quand on se trouve face à deux tas de papiers déjà triés<br>
   et qu'on veut les réunir, il existe une méthode bien plus économique <br>
   (et donc, bien plus rationnelle...)<br>
    </p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
aFirstArray77 = [4,6,8,10,13,17] et aSecondArray77 = [7,9,12,14,15,19] <br>

Début<br>

Afini ← faux<br>
Bfini ← faux<br>
ia ← 0<br>
ib ← 0<br>
ic ← -1<br>
TantQue Non(Afini) ou Non(Bfini)<br>
   ic ← ic + 1<br>
   Redim C(ic)<br>
   Si Afini ou A(ia)>B(ib) Alors<br>
      C(ic) ← B(ib)<br>
      ib ← ib + 1<br>
      Bfini ← ib > n<br>
   Sinon<br>
      C(ic) ← A(ia)<br>
      ia ← ia + 1<br>
      Afini ← ia > m<br>
   FinSi<br>
FinTantQue<br>
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
require './FunctionPhp7.php';
?>

<form method="POST" action="exo77.php">


<input  onclick="exo77()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo77jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
<input type="hidden" value="" name="exephp"></input>
</form>
<?php

    if (isset($_POST["exephp"]))
    {
     $soluce = exo77();
    }


?>

<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS77" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
       if (isset($soluce))
       {
       
      echo $soluce;
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