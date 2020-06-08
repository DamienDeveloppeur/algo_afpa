<?php

ob_start();
$compteur = 0;
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.8 A</p>
a) Ecrire un algorithme qui demande successivement 20 nombres à l’utilisateur,<br>
 et qui lui dise ensuite quel était le<br>
plus grand parmi ces 20 nombres :<br>
</div>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr et max en numérique<br>
DEBUT<br>
max = 0;<br>
index = 0;<br>
POUR index < 20<br>
ecrire "entrez un nombre"<br>
lire nbr <br>
    SI nbr > max <br>
    ALORS<br>
    max = nbr<br>
    FIN DU SI<br>
FIN DU POUR<br>
Ecrire max<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();

    ?>
  <div id="FJS58AG">
    <form method="POST" action="exo58A.php">  
    <div class="nes-field is-inline">
   
    <label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
   
      <input id="FJS58A" type="number" class="nes-input is-dark" name="nbr"/> 
      </div>
          
      <input  onclick="exo58A()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo58Ajq()" value="Exe jquery" class="nes-btn is-error"></input>
    <input class="nes-btn is-error" type="submit" value="Exe PHP"/> 

    </form>
</div>
    <?php


    if (isset($_POST["nbr"]))
    {
      session_start();
     
      $_SESSION["tailleValeur"] = 4;
        if (empty($_SESSION["compteur"]))
        {
          $_SESSION["compteur"] = 0;
          $_SESSION["max"] = 0;
         
        }
        $_SESSION["compteur"]++;
        if ($_SESSION["compteur"] == 1 || $_POST["nbr"] > $_SESSION["max"] )
        {
          $_SESSION["max"] = $_POST["nbr"];
          
       

        }
         if ($_SESSION["compteur"] == $_SESSION["tailleValeur"])
        {
          $control = "le nombre le plus grand est : " . $_SESSION["max"] ;
          ?>
              <script>
                  document.getElementById("FJS58AG").style.display = "none";
                  
              </script>
          <?php
          $_SESSION["compteur"] = 0;
          $_SESSION["max"] = 0;
          session_destroy();
        }
        else 
        {
          $control = "Pour l'instant le nombre le plus grand est : ". $_SESSION["max"] . ", il manque encore ". ($_SESSION["tailleValeur"] - $_SESSION["compteur"]) . "valeurs rentrés";
     
        }


        
    }


?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS58A" class="nes-balloon from-left">
        <?php
        if (isset($control))
          {
           echo $control;
          }
        ?>
    </section>
<?php


/*
if (isset($_POST["nbr"]))
{


  $nbr = $_POST["nbr"];
  var_dump($nbr);
    if ($compteur < 3)
    {
        if ($compteur == 0)
        {
          $max = $nbr;
          $compteur +=1;
        }
        else 
        {
          var_dump($compteur);
          $compteur +=1;
          if ($nbr > $max)
          {
            $max= $nbr;
          }
        }

    }
    else 
    {
      var_dump($compteur);
      $control = $max;
    }


}

    
*/

$JS = ob_get_clean();

require '../template.html';
?>
