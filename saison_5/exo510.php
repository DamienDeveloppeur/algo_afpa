<?php
session_start();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.10 </p>
  Lire la suite des prix (en euros entiers et terminée par zéro) des achats d’un client.<br>
 Calculer la somme qu’il doit, lire la somme qu’il paye, et simuler la remise de la monnaie en<br>
 affichant les textes "10 Euros", "5 Euros" et "1 Euro"<br>
  autant de fois qu’il y a de coupures de chaque sorte à rendre.<br>
  </div>
<h1> </h1>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable total, nbr, sommePayee et sommeARendre en numérique <br>
DEBUT<br>
    REPETEZ
    Ecrire entrer le prix de vos articles, 0 pour stop 
    lire nbr <br>
    total = total + nbr<br>
    TANT QUE nbr != 0<br>
        ecrire "vous devez un total de :" + total <br>
        ecrire "entrez ici la somme payee"<br>
        lire sommePayee<br>
             SI sommePayee == sommeTotal <br>
                ALORS ecrire Vous avez donnez l'appoint, merci de votre visite <br>
             SINON SI sommePayee > total <br>
                      sommeARendre = sommePayee - total <br>
                      Ecrire "On vous rends la somme de "+ sommeARendre <br>
            SINON SI sommePayee < total <br>
                    REPETEZ <br>
                    ecrire entrez une nouvelle somme <br>
                    lire sommePayee<br>
                    JUSQU'A sommePayee < total <br>
                        SI sommePayee > total <br>
                        sommeARendre = sommePayee - total <br>
                        Ecrire "on vous rends : " + sommeARendre <br>
                        SINON <br>
                        ecrire "vous avez donnez l'appoint, merci de votre visite"  <br>            
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo510.php">

<div class="nes-field is-inline" id="FJS5101G">
<label for="dark_field" style="color:#fff;">Entrez le prix de l'article (0 pour stop)</label>
  <input type="number" id="FJS510" class="nes-input is-dark"  name="prix"/> <br><br><br>
  </div>

  <div class="nes-field is-inline" id="FJS510G" style="visibility: hidden">
  <label for="dark_field" style="color:#fff;">Entrez un paiement</label>
  <input type="number" id="FJS5102" class="nes-input is-dark"  name="sommePayee"/> <br><br><br>
  </div>

  <input  onclick="exo510()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo510jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php

if (isset($_POST["prix"]))
{
$_POST["prix"] = intval($_POST["prix"]);

  

    if (empty($_SESSION["total"]))
    {
      $_SESSION["total"] = 0;
      intval($_SESSION["total"]);
      $_SESSION["sommeARendre"] = 0;
      $_SESSION["sommeTotal"] =0;
      $_SESSION["resultat2"] = 0;
      $_SESSION["billet10"] = 0;
      $_SESSION["billet5"] = 0;
      $_SESSION["piece1"] = 0;
      
     
    }
    
  $_SESSION["total"] = ($_SESSION["total"] + $_POST["prix"]);
  $control ="Vous devez pour l'instant un total de : " . $_SESSION["total"] . "euros";
        //$sommeTotal = "Vous devez un total de : " . $total . "<br>";
  if ($_POST["prix"] == 0)
  {
    ?>
    <script>
    
    document.getElementById("FJS510G").style.visibility = "visible";
    document.getElementById("FJS5101G").style.visibility = "hidden";

0    </script>
    <?php

if ( !empty($_POST['sommePayee']) )
  {

    if ($_POST["sommePayee"] > $_SESSION["total"])
    {
      $_SESSION["sommeARendre"] = ($_POST["sommePayee"] - $_SESSION["total"]) ;
      /*
      if ($_SESSION["sommeARendre"] < 5)
      {
        $control = " On vous rends :" . $_SESSION["sommeARendre"] ."piéce de 1 euros" ;
        session_destroy();
      }
      else if ($_SESSION["sommeARendre"] < 10 )
      {
        $control = " On vous rends :" . $_SESSION["sommeARendre"] . "avec un billet de 5 euros, et " . ($_SESSION["sommeARendre"] - 5) . "pièces de 1 euros";
        session_destroy();
      }
      else 
      {
        $control = " On vous rends :" . $_SESSION["sommeARendre"] ."avec ". ($_SESSION["sommeARendre"]/10) . " billet de 10 euros" ;
        session_destroy();
      }
  */
      while ( $_SESSION["sommeARendre"] >= 10)
      {
        $_SESSION["sommeARendre"] = $_SESSION["sommeARendre"] - 10;
        $_SESSION["billet10"]++;
      }
      while ( $_SESSION["sommeARendre"] >= 5)
      {
        $_SESSION["sommeARendre"] = $_SESSION["sommeARendre"] - 5;
        $_SESSION["billet5"]++;
      }
      while ( $_SESSION["sommeARendre"] >= 1)
      {
        $_SESSION["sommeARendre"] = $_SESSION["sommeARendre"] - 1;
        $_SESSION["piece1"]++;
      }
      $control = " On vous rends :" . $_SESSION["sommeARendre"] ."avec ". $_SESSION["billet10"]. " billet de 10 euros, ". $_SESSION["billet5"] . " billet de 5 euros et  ".$_SESSION["piece1"]. " pièce de 1 euros";
      session_destroy();
    }
    else if ($_POST["sommePayee"] == $_SESSION["total"])
    {
      $control = "Vous avez donné l'apoint, félicitation.<br>";
      session_destroy();
    }
   else 
    {
      $control = "vous n'avez pas donné assez, entrez une nouvelle somme";

    }
}
 else 
 {
  $control = "Entrez un paiement";
 }
  }
    
}

?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS510" class="nes-balloon from-left">
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

require('../template.html'); ?>
?>