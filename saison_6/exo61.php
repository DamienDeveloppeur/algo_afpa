<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.1</p>
  Ecrire un algorithme qui déclare et remplisse un tableau de<br>
 7 valeurs numériques en les mettant toutes à zéro.<br>
  </div>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-Code</p>
  <p>
DEBUT <br>
tableau de Nbr(7)<br>
Pour i = 0 à 7<br>
    i = 0<br>
      Nb(i) = i <br>
      i suivant<br>
      Fin de la boucle<br>
      Ecrire Nb(i)<br>
Fin<br>
  </p>
</div>

<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php'
?>
  <form method="POST" action="exo61.php">
  

<div  class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez le nombre de chevaux partants</label>
  <input type="number" id="FJS63" class="nes-input is-dark"  name="nbr1"/> 
  </div>

  <input  onclick="exo61()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo61jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="hidden" name="exephp" value="">
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>

<?php
if (isset($_POST["exephp"]))
{
 $solution = exo61();
}

 

  ?>
    <section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS61" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
          if (isset($solution))
          {
           echo $solution;
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