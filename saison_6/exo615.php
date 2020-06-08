<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.15 </p>
  Pour sa naissance, la grand-mère de TITI place <br>
une somme de 1000 Euros sur son compte épargne rémunéré<br>
au taux de 2.75% (chaque année le compte est augmenté de 2.75%).<br>
Développer un algorithme permettant<br>
de stocker dans un tableau sur 20 ans associant à chaque anniversaire de TITI la somme acquise sur son compte.<br>
Puis, la grand-mère de TITI aura la possibilité de saisir un âge (compris entre 1 et 20 ans) <br>
et l'algorithme affichera la somme correspondante qu'il y'aura alors sur le compte.<br>
</div>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable arraySomme en tableau numérique <br>
variable sommeCompte et I en numérique<br>
constante taux en numérique<br>
DEBUT<br>
arraySomme[0] = 1000<br>
    POUR index de 1 à index 20<br>
    var I = (sommeCompte * taux) / 100<br>
    sommeCompte = I + sommeCompte<br>
    arraySomme[i] = sommeCompte <br>
    FIN DU POUR <br>
Ecrire entrez l'annee du compte <br>
lire arraySome[nbr]<br>
<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
require './FunctionPhp6.php';
?>
<form method="POST" action="exo615.php">
<div class="nes-field is-inline" id="FJS6151G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez l'année que vous souhaitez consulté</label>
  <input type="number" id="FJS6141" class="nes-input is-dark"  name="nbr1"/> 
  </div>


<input  onclick="exo615()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo615jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
session_start();

if (isset($_POST["nbr1"]))
{
  $control = false;
    if ($_POST["nbr1"] >= 0 && $_POST["nbr1"] <= 20 )
    {
      $arraySomme = exo615();
      $control = true;
    }
    else 
    {
      $control615 = "Veuillez entrer une valeure entre 0 et 20 (inclue)";
    }
   
 
}

?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS615" class="nes-balloon from-left is-dark">
         


        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
      if (isset($control))
      {
        if($control == true)
        {
           echo "Voici la somme : ". $arraySomme[$_POST["nbr1"]] . " <br>";
           echo "A l'année ". $_POST["nbr1"];
            
        }

      }
          
           else if (isset( $control615))
           {
             echo $control615;
           }
          
          ?>
        </div>
        <i class="nes-bcrikko"></i>
      </section>
    </section>
  </section>
</section>
<?php
$JS = ob_get_clean();




require '../template.html';
?>