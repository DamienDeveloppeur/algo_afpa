<?php
ob_start();
?>
 Exercice 5.8 A
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

variable nbr et max en numérique 
DEBUT

FIN

  </p>
</div>
<?php

$pseudocode = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr et max en numérique<br>
DEBUT
max = 0;
index = 0;
POUR index < 20
ecrire "entrez un nombre"
lire nbr 
    SI nbr > max 
    ALORS
    max = nbr
    FIN DU SI
FIN DU POUR
Ecrire max
  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form>

<div class="nes-field is-inline">
   
      <input  onclick="exo58A()" value="Testez !" class="nes-btn is-error"></input>
</div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS58A" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();

ob_start();

$array = array();

?>
<form method="POST" action="exo58A.php">  

<?php

for ($i=1; $i <5; $i++)
    {
        echo '<div class="nes-field is-inline"> <input  type="text" name="nbr'.$i.'"/> <br> </div>';
        
    }
    
?>
<input class="nes-btn is-error" type="submit" value="Envoyer"/> 
 
</form>

<?php


if (isset($_POST["nbr1"]))
{
$max = 0;

    for ($i=1; $i <5; $i++)
    {
      $nombre = $_POST["nbr".$i];
     
      if ($nombre > $max)
      {
        $max = $nombre;
        $controle = 1;
      }


    }
  }
  ?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS58A" class="nes-balloon from-left">
        <?php
        if (isset($controle))
        {
          echo $max;
        }

?>
      </div>
    </section>
<?php



$formulaire = ob_get_clean();

require '../template.html';
?>
