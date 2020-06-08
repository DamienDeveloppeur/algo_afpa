<?php
ob_start();
?>
<h1> Exercice 6.4 </h1>
Que produit l’algorithme suivant ? <br>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  Tableau Nb(5) en Entier <br>
Variable i en Entier <br>
Début<br>
 Pour i ← 0 à 5 <br>
 Nb(i) ← i * i<br>
 i suivant<br>
   Pour i ← 0 à 5<br>
   Ecrire Nb(i)<br>
    i suivant <br>
    Fin<br>
Peut-on simplifier cet algorithme avec le même résultat ?<br><br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
session_start();
unset($_SESSION["compteur617"]);
require './FunctionPhp6.php';
?>
    
    <form method="POST" action="exo64.php">

  <input  onclick="exo64()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo64jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="hidden" name="exephp" value="">
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php
if (isset($_POST["exephp"]))
{
$showSoluce = exo64();

}
  

?>
  <section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS64" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
            if (isset($showSoluce))
            {
             echo $showSoluce;
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