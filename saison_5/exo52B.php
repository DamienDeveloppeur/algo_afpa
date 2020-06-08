<?php

ob_clean();

echo "Exercice 5.2 B <br>

b) Ecrire un algorithme qui choisit un nombre au hasard compris entre 1 et 100.<br>
 Pour ceci, on utilise la fonction : iNombreHasard <- random[1..100] <br>
 Demander à l'utilisateur de trouver le nombre. On fera apparaître un message : « Plus petit ! »,<br>
  et inversement, « Plus grand ! » jusqu’à ce que l'utilisateur ait trouvé et afficher en combien de coups.<br>";

  $enonce = ob_get_clean();
  ob_start();
  ?>
  <div class="nes-container is-dark with-title">
    <p class="title">Pseudo-code</p>
    <p>
      var nbr en numérique<br>
      var compteur en numérique<br>
  DEBUT<br>
  iNombreHasard <- random[1..100]<br>
  ecrire "Devinez un nombre en 1 et 100<br>
  lire nbr<br>
TANT QUE nbr != iNombreHasard<br>
compteur ++;<br>
  SI (nbr < iNombreHasard)<br>
  <br>
    ecrire "Plus grand !";<br>
      lire nbr<br>
      <br>
SINON SI (nbr > iNombreHasard)<br>
    ecrire "plus petit !"<br>
    lire nbr <br>
    FIN DE SI <br>
  FIN DE TANT QUE <br>
Ecrire : "vous avez trouvez le nombre <br>
iNombreHasard "en " compteur "coup"<br>
  FIN <br>
    </p>
  </div>
  <?php
  $pseudocode = ob_get_clean();

  ob_start();
  session_start();
?>
  <div id="FJS52BG">
  <form method="POST" action="exo52B.php">  
    <div class="nes-field is-inline">
    <label for="dark_field" style="color:#fff;">Devinez le nombre entre 1 et 100</label>
  <input type="number" id="FJS52B" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo52B()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo52Bjq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
</div>
<?php



  if ( isset($_POST["nbr"]))
  {
    if (empty($_SESSION["nbr1"]))
    {
      $_SESSION["nbr1"] = rand (1, 100);
    }
   

      $nbr = $_POST["nbr"];
      if ($nbr != $_SESSION["nbr1"])
      {
          
              if ($nbr < $_SESSION["nbr1"])
              {
                  $control = "Plus grand !";
              }
              elseif ($nbr > $_SESSION["nbr1"])
              {
                $control =  "Plus petit ! ";
              }
          
          }
          

    else if ($nbr == $_SESSION["nbr1"])
    {
      $control = "bien joué !";
      $_SESSION["nbr1"] = NULL;
    }
  }


    


?>

<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS52B" class="nes-balloon from-left">
      <?php
       var_dump($_SESSION["nbr1"]);
       var_dump($nbr);
      if (isset($control))
        {
          //var_dump($nbr1);
         
           echo $control;
         
        }
        ?>
      </div>
    </section>

<?php
$JS = ob_get_clean();


 require('../template.html');
 ?>