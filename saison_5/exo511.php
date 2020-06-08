<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.11</p>

</div>
<?php
$enonce = ob_get_clean();



ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable n, p, factoN, factoP, factoPN, X et Y en numérique <br>
DEBUT<br>
Ecrire "entrez le nombre de chevaux partant"<br>
lire n <br>
ecrire "entrez le nombre de chevaux joué"<br>
lire p <br>
var factoN = 1 <br>
var factoP = 1 <br>
var factoPN = 1<br>
var index = 1<br>
<br>
    POUR index !=n+1 <br>
    factoN = factoN * index <br>
    FIN DU POUR <br>
    <br>
    POUR index != p+1 <br>
    factoP = factoP * index <br>
    FIN DU POUR <br>
    <br>
    POUR index != (n-p) + 1<br>
    factoPN = factoPN * index <br>
    FIN DU POUR <br>
    <br>
X = factoN / factoPN <br>
Y = factoN / (factoP * factoPN) <br>
<br>
Ecrire "vous avez une chance sur " + X + "de gagner dans l'ordre"<br>
Ecrire "vous avez une chance sur " + Y + "de gagner dans le désordre"<br>
ecrire "sinon vous payez votre import volontaire"<br>
<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


ob_start();
?>
   <form method="POST" action="exo511.php">

<div  class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez le nombre de chevaux partants</label>
  <input type="number" id="FJS511" class="nes-input is-dark"  name="nbr1"/> <br><br><br>
  </div>
  <div  class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez le nombre de chevaux joués</label>
  <input type="number" id="FJS512" class="nes-input is-dark"  name="nbr2"/> <br><br><br>
  </div>

  <input  onclick="exo511()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo511JQ()" value="Exe jquery" class="nes-btn is-error"></input>
  <input type="submit" value="Exe PHP" class="nes-btn is-error"></input>
 
</form>
<?php
if (isset($_POST["nbr1"]) && isset($_POST["nbr2"]))
{
  $nbr1 =  $_POST["nbr1"];
  $nbr2 =  $_POST["nbr2"];


   $factoN = 1;
  for ($i = 1; $i != $nbr1 + 1; $i++  )
  {
      $factoN = $factoN * $i;  
  }

   $factoPN = 1;
  for ($i = 1; $i != ($nbr1 - $nbr2)  + 1; $i++  )
  {
      $factoPN = $factoPN * $i;  
  }

   $factoP = 1;
  for ($i = 1; $i != $nbr2  + 1; $i++  )
  {
      $factoP = $factoP * $i;  
  }


 $X = $factoN / $factoPN;

  $Y = $factoN / ($factoP * $factoPN);


}



?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS511" class="nes-balloon from-left">
      <?php  
    if (isset($X) && isset($Y))
    {
      echo "Une chance sur". $X . "de gagner dans l'ordre <br>
      Une chance sur". $Y . "de gagner dans le désordre";
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
