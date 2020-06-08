<?php


ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.9 </p>
  Réécrire l’algorithme précédent, <br>
mais cette fois-ci on ne connaît pas d’avance combien<br>
 l’utilisateur souhaite saisir de nombres. La saisie des nombres<br>
  s’arrête lorsque l’utilisateur entre un zéro.<br>
</div>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr, max, compteur et position en numérique<br>
DEBUT<br>
max = 0<br>
compteur = 0<br>
position = 0<br>
<br>
REPETEZ <br>
    ecrire "entrez un nombre"<br>
    lire nbr <br>
    SI nbr > max <br>
    ALORS max = nbr <br>
          position = compteur <br>
    JUSQU'A nbr != 0<br>
        ALORS<br>
        Ecrire "le nombre le plus grand est : "<br>
        max + "arrivant en " + position + "position"<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo59.php">

<div  class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="nbr" id="FJS59" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo59()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo59jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php


if (isset($_POST["nbr"]))
{
  session_start();

  if (empty($_SESSION['compteur']))
   {
      $_SESSION['compteur'] = 0;
      $_SESSION['max'] = 0;
     
      $_SESSION['position'] = 0;
  }
  
  $_SESSION['compteur']++;
  
  if ($_SESSION['compteur'] == 1 || $_POST['nbr'] > $_SESSION['max']) 
  {
      $_SESSION['max'] = $_POST['nbr'];
      $_SESSION['position'] = $_SESSION['compteur'];
  }
  
  if ($_POST['nbr'] == 0) 
  {
      $control= "Le nombre le plus grand est " . $_SESSION['max'] . " arrivant en position " . $_SESSION['position'] ;
     session_destroy();

  } 
  else 
  {
    $control = "Pour l'instant le nombre le plus grand est : ". $_SESSION["max"];
  }

}
?>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS59" class="nes-balloon from-left">
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

require '../template.html';
?>
