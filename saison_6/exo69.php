<?php
ob_start();
session_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 6.9 </p>
  Ecrivez un algorithme calculant la somme des valeurs d’un tableau <br>
(on suppose que le tableau a été préalablementsaisi).
</div>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  variable array => tableau en numérique [5,6,1,9,3,4,5,10]<br>
  variable somme en numérique <br>
DEBUT<br>
POUR index  0 à taille du tableau<br>

    somme = somme + arrayExemple à l'index de i <br>
 
FIN DU POUR<br>
ecrire somme<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
require './FunctionPhp6.php';
?>

<form method="POST" action="exo69.php">
<div class="nes-field is-inline" id="FJS691G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nombre de valeur souhaitée</label>
  <input type="number" id="FJS691" class="nes-input is-dark"  name="nbr1"/> <br><br><br>
  </div>


  <div class="nes-field is-inline" style="visibility: hidden" id="FJS692G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs souhaitées</label>
  <input type="number" id="FJS692" class="nes-input is-dark"  name="nbr2"/> <br><br><br>
  </div>



<input  onclick="exo69()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo69jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="hidden" name="exephp" value="">
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<br>
    <?php
   
   if (isset($_POST["nbr1"]) || !empty($_SESSION["nbr1"]))
   {

    
    $somme = exo69();

   }
   
   
    
    ?>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS69" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
        /* var_dump($_SESSION["compteur69"]);
        var_dump($_SESSION["nbr1"]);
        var_dump($_POST["nbr2"]);*/
    //  var_dump($_SESSION["compteur69Reste"]);
           if(isset($somme))
           {
            
            echo "Voici la somme du tableau :". $somme .
             "<br> Il reste encore ". $_SESSION["compteur69Reste"]." valeurs à rentrer pour obtenir la somme finale";
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