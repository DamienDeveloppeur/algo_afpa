<?php
ob_start();
?>


 <div class="nes-container is-dark with-title">
  <p class="title">Exercice 4.6</p>
  <p>
  Les élections législatives, en Toonerie Nationale, obéissent à la règle suivante :<br>
 lorsque l'un des candidats obtient plus de 50% des suffrages,<br>
 il est élu dès le premier tour.<br>
 en cas de deuxième tour, peuvent participer uniquement les candidats<br>
 ayant obtenu au moins 12,5% des voix au premier tour.<br> </p>
</div>

<?php 
$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable score1, score2, score3 et score4 en numérique <br>
variable nom1, nom2, nom3 et nom4 en string <br>
DEBUT<br>
  ecrire entrez les noms et les scores des candidats <br>
  lire score1; score2, score3 et score4 <br>
  lire nom1, nom2, nom3 et nom4<br>

  SI score1 > 50 <br>
    ALORS candidat élu à la majorité absolue <br>
  SINON SI score1 >= 12.5<br>
      SI score1 > score2 et score1 > score3 et score1 > score4<br>
      ecrire candidat en ballotage favorable <br>
      SINON SI candidat en balotage défavorable <br>
  SINON <br>
      ecrire candidat battu <br>
  FIN DU SI<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
if (isset($_POST["nom1"]) && isset($_POST["score1"]) && isset($_POST["nom2"]) && isset($_POST["score2"]) 
&& isset($_POST["nom3"]) && isset($_POST["score3"]) && isset($_POST["nom4"]) && isset($_POST["score4"]))
{
    
    $nom1 = $_POST["nom1"];
    $score1 = $_POST["score1"];

    $nom2 = $_POST["nom2"];
    $score2 = $_POST["score2"];

    $nom3 = $_POST["nom3"];
    $score3 = $_POST["score3"];

    $nom4 = $_POST["nom4"];
    $score4 = $_POST["score4"];




    if ($score1 > 50)
    {
       $control = "Candidat " . $nom1 . "élu";
    }
    elseif ($score1 >= 12.5 )
        {                
        if($score1 > $score2 && $score1 > $score3 && $score1 > $score4)
        
            {
               $control = "Candidat " . $nom1 . " en balottage favorable avec le score de " . $score1 . "%";
            }
        else 
           {
              $control = "Candidat " . $nom1 . " en balottage défavorable avec le score de " . $score1 . "%";
           }
                       
         }
                    
    else 
    {
       $control =  "Candidat battu";
    }

}

?>
   <form method="POST" action="exo46.php">
   <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du premier candidat</label><br>
  <input type="text" id="FJS461" class="nes-input is-dark"  name="nom1" placeholder="Nom1"/> 
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline"><br>
  <input type="number" id="FJS462" class="nes-input is-dark"  name="score1" placeholder="score1" /> 
</div>
<br><br><br>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du deuxiéme candidat</label>
  <input type="text" id="FJS463" class="nes-input is-dark"  name="nom2" placeholder="Nom"/> 
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <input type="number" id="FJS464" class="nes-input is-dark"  name="score2" placeholder="score"/>
</div>
<br><br><br>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du troisième candidat</label>
  <input type="text" id="FJS465" class="nes-input is-dark"  name="nom3" placeholder="Nom"/> 
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <input type="number" id="FJS466" class="nes-input is-dark"  name="score3" placeholder="score"/>
</div>
<br><br><br>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du dernier candidat</label>
  <input type="text" id="FJS467" class="nes-input is-dark"  name="nom4" placeholder="Nom"/> 
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <input type="number" id="FJS468" class="nes-input is-dark"  name="score4" placeholder="score"/> 
</div>



  <input  onclick="exo46()" value="Envoyer" class="nes-btn is-error"></input>
  <input  onclick="exo46jq()" value="Envoyer" class="nes-btn is-error"></input>
  <input type="submit" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS46" class="nes-balloon from-left">
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
?>




<input type="submit" value="valider">
</form>


<?php




require('../template.html');
?>

