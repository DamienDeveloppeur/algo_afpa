<?php
ob_start();
session_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.12</p>
<p>  Ecrivez un algorithme qui permette la saisie d’un nombre quelconque<br>
 de valeurs, sur le principe de l’ex 6.8. <br>
Toutes les valeurs doivent être ensuite augmentées de 1,<br>
 et le nouveau tableau sera affiché à l’écran.<br></p>
</div>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  variable array1 = [];<br>
  variable nbr1 et nbr2 en numérique<br>
DEBUT<br>
ecrire "entrez le nombre de valeur souhaitée"<br>
lire nbr1 <br>
    POUR index  0 à nbr1<br>
        ecrire "entrez un nombre qui sera incrémenté et ajoutez au tableau"<br>
        lire nbr3<br>
        variable nbr4 = nbr3 +1<br>
       ajoutez nbr4 au tableau<br>
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
<form method="POST" action="exo612.php">
<div class="nes-field is-inline" id="FJS6121G" style="display: block">
<label for="dark_field" style="color:#fff;">Entrez le nombre de valeur souhaitée</label>
  <input type="number" id="FJS6121" class="nes-input is-dark"  name="nbr1"/> <br><br><br>
  </div>

  <div class="nes-field is-inline" style="display: none" id="FJS6122G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs souhaitées</label>
  <input type="number" id="FJS6122" class="nes-input is-dark"  name="nbr2"/> <br><br><br>
  </div>

<input  onclick="exo612()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo612jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php

        if (!empty($_POST["nbr1"]) || isset($_SESSION["nbr1"]) )
        {
          $_SESSION["soluceStyle"] = exo612();
        }


?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS612" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
             /* var_dump($_SESSION["compteur612"]);
              var_dump($_SESSION["nbr1"]);
              var_dump($_SESSION["nbr2"]);*/
           if(isset($_SESSION["soluceStyle"]))
           {
              echo $_SESSION["soluceStyle"];
           
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