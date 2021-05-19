<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 10.3</p>
  <p>
  On travaille avec le fichier du carnet d’adresses<br>
   en champs de largeur fixe.<br>
Ecrivez un algorithme qui permet à l’utilisateur de saisir<br>
 au clavier un nouvel individu qui sera ajouté à ce carnet d’adresses.<br>
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


<form method="POST" action="exo103.php">

<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
  <input type="text" id="FJS1031" class="nes-input is-dark"  name="name"/> 
  </div>

  <div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
  <input type="text" id="FJS6141" class="nes-input is-dark"  name="lastName"/> 
  </div>

  <div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
  <input type="number" id="FJS6141" class="nes-input is-dark"  name="nbr"/> 
  </div>

  <div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
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
      $aResult =  exo103();
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
     echo $aResult;
       // echo $aResult;
      
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