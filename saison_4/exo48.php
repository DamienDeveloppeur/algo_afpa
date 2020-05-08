<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 4.8</p>
  <p>Ecrivez un algorithme qui a près avoir demandé un numéro de jour, de mois <br>
  et d'année à l'utilisateur, renvoie s'il s'agit ou non d'une date valide.<br>
  Cet exercice est certes d’un manque d’originalité affligeant, mais après<br>
   tout, en algorithmique comme ailleurs, il faut connaître ses classiques !<br>
    Et quand on a fait cela une fois dans sa vie, on apprécie pleinement <br>
    l’existence d’un type numérique « date » dans certains langages…).<br>
    Il n'est sans doute pas inutile de rappeler rapidement que le mois<br>
     de février compte 28 jours, sauf si l’année est bissextile, auquel <br>
     cas il en compte 29. L’année est bissextile si elle est divisible<br>
      par quatre. Toutefois, les années divisibles par 100 ne sont <br>
      pas bissextiles, mais les années divisibles par 400 le sont.<br>
.</p>
</div>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

DEBUT

FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
   
   <form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un jour </label>
  <input type="text" id="FJS481" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un mois </label>
  <input type="text" id="FJS482" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez une année </label>
  <input type="text" id="FJS483" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo48()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS48" class="nes-balloon from-left">
        
      </div>
    </section>


<?php
$JS = ob_get_clean();

ob_start();
?>
<p>Entrez une date valide </p>
<form method="POST" action="exo48.php">


    <label>Entrer un jour  </label>
    <input type="text" name="jour">

    <label>Entrer un mois </label>
    <input type="text" name="mois">

    <label>Entrer une année  </label>
    <input type="text" name="annee">

    <input type="submit" value="valider">

    <?php

if (isset($_POST["jour"]) && isset($_POST["mois"]) && isset($_POST["annee"]))
{
$jour = $_POST["jour"];
$mois = $_POST["mois"];
$annee = $_POST["annee"];

    if ($jour > 1 && $jour <= 31)
    {
        if ($mois > 1 && $mois <= 12 )
        {
            if ($annee > 1950 && $annee < 2021  )
            {
                echo "date valide";
            }
        }
        else 
        {
            echo "le mois n'est pas valide";
        }
    }
    else 
    {
        echo "le jour n'est pas valide";
    }


}
$formulaire = ob_get_clean();

require('../template.html');
?>



