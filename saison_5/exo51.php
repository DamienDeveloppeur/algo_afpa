<?php 

  ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.1</p>
 <p> Ecrire un algorithme qui demande à l’utilisateur un nombre<br>
    compris entre 1 et 3 jusqu’à ce que la réponse convienne.</p>
</div>
<?php


$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
DEBUT<br>
    variable nbr en int <br>
ECRIRE "entrey un nombre entre 1 et 3"<br>
Lire nbr <br>
TANT QUE nbr < 1 OU > 3<br>
    ecrire "Réessayez"<br>
    lire nbr <br>
FIN TANT QUE
 ecrire "bravo !"<br>

FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form method="POST" action="exo51.php">  
<div id="FJS51G">
  <div  class="nes-field is-inline">
  <label for="dark_field" style="color:#fff;">Entrez l'age de l'individu </label>
    <input type="number" id="FJS51" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo51()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo51jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
</div>
<?php

if (isset($_POST["nbr"]))
{
  $controle = 1;
    $nbr = $_POST["nbr"];
   
   for ($i = 1; $i < 3; $i++)
   {
    if ($_POST["nbr"] >= 1 && $_POST["nbr"] <= 3)
    {
      $control = "Bravo !";
      var_dump("oui");
      ?>
      <script>
        document.getElementById("FJS51G").style.display = "none";
     </script>
     <?php
    }
    else 
    {
      $control = "Essaie encore !";
      var_dump("non");
    }
  

   }

 

}
?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id="AJS51" class="nes-balloon from-left">
        <?php
      if (isset($control))
        {

         
           echo $control;
         
        }
        ?>
      </div>
    </section>



<?php
$JS = ob_get_clean();



 
include "../template.html";
