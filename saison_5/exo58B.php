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
$array = array();
$max = 0;
$position = 0;
?>
<div id="FJS58BG">
<form method="POST" action="exo58B.php">  

<div class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS58B" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

       <input  onclick="exo58B()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo58Bjq()" value="Exe jquery" class="nes-btn is-error"></input>
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
        $_SESSION["position"] = 0;
      }
      $_SESSION["compteur"]++;

      if ($_SESSION["compteur"] == 1 || $_POST["nbr"] > $_SESSION["max"] )
      {
        $_SESSION["max"] = $_POST["nbr"];
        $_SESSION["position"] = $_SESSION["compteur"];
      }

       if ($_SESSION["compteur"] == $_SESSION["tailleValeur"])
      {
        $control = "le nombre le plus grand est : " . $_SESSION["max"] . " arrivant en position ". $_SESSION["position"] ;
        ?>
            <script>
                document.getElementById("FJS58BG").style.display = "none";
                
            </script>
        <?php
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
    <div id ="AJS58B" class="nes-balloon from-left">
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

ob_start();


$formulaire = ob_get_clean();

require '../template.html';
?>
