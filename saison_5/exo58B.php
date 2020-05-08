<?php
ob_start();
?>
 Exercice 5.8 B
Réécrire l’algorithme précédent, <br>
mais cette fois-ci on ne connaît pas d’avance combien<br>
 l’utilisateur souhaite saisir de nombres. La saisie des nombres<br>
  s’arrête lorsque l’utilisateur entre un zéro.<br>
 <?php 
$enonce = ob_get_clean();
?>
<h1>  </h1>
<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr et max en numérique<br>
DEBUT<br>
max = 0<br>
index = 0<br>
position = 0<br>
POUR index < 20<br>
ecrire "entrez un nombre"<br>
lire nbr <br>
    SI nbr > max <br>
    ALORS<br>
    max = nbr<br>
    position = index<br>
    FIN DU SI<br>
FIN DU POUR<br>
Ecrire max<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
   
      <input  onclick="exo58B()" value="Testez le programme !" class="nes-btn is-error"></input>
</div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS58B" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();

ob_start();
$array = array();
$max = 0;
$position = 0;
?>
<form method="POST" action="exo58B.php">  
<?php

for ($i=1; $i <5; $i++)
    {
        echo '<input type="text" name="nbr'.$i.'"/> <br>';   
    }
?>
<input type="submit" value="Envoyer"/> 
</form>

<?php


if (isset($_POST["nbr1"]))
{
    for ($i=1; $i <5; $i++)
    {
      $nombre = $_POST["nbr".$i];
      if ($nombre > $max)
      {
          $max = $nombre;
          $position = $i;
      }
     
    }
    ?>
    <section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS58B" class="nes-balloon from-left">
    <?php  
echo "Le nombre le plus grand est :" . $max . "arrivant en position :" . $position;
?>
    </div>
  </section>
  <?php
}

$formulaire = ob_get_clean();

require '../template.html';
?>
