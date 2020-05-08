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
variable score1, score2, score3 et score4 en numérique 
variable nom1, nom2, nom3 et nom4 en string 
DEBUT
  ecrire entrez les noms et les scores des candidats 
  lire score1; score2, score3 et score4 
  lire nom1, nom2, nom3 et nom4

  SI score1 > 50 
    ALORS candidat élu à la majorité absolue 
  SINON SI score1 >= 12.5
      SI score1 > score2 et score1 > score3 et score1 > score4
      ecrire candidat en ballotage favorable 
      SINON SI candidat en balotage défavorable 
  SINON 
      ecrire candidat battu 
  FIN DU SI
FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
   <form>
   <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du premier candidat</label><br>
  <input type="text" id="FJS461" class="nes-input is-dark"  name="PAHT" placeholder="Nom"/> 
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline"><br>
  <input type="number" id="FJS462" class="nes-input is-dark"  name="PAHT" placeholder="score" /> 
</div>
<br><br><br>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du deuxiéme candidat</label>
  <input type="text" id="FJS463" class="nes-input is-dark"  name="PAHT" placeholder="Nom"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <input type="number" id="FJS464" class="nes-input is-dark"  name="PAHT" placeholder="score"/> <br><br><br>
</div>
<br><br><br>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du troisième candidat</label>
  <input type="text" id="FJS465" class="nes-input is-dark"  name="PAHT" placeholder="Nom"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <input type="number" id="FJS466" class="nes-input is-dark"  name="PAHT" placeholder="score"/> <br><br><br>
</div>
<br><br><br>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Indiquez le nom et le score du dernier candidat</label>
  <input type="text" id="FJS467" class="nes-input is-dark"  name="PAHT" placeholder="Nom"/> <br><br><br>
</div>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <input type="number" id="FJS468" class="nes-input is-dark"  name="PAHT" placeholder="score"/> <br><br><br>
</div>



  <input  onclick="exo46()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS46" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();
ob_start();
?>
<h1>PHP </h1>
<form method="POST" action="exo46.php">

<label>nom du candidat 1 </label>
<input type="text" name="nom1"><br>

<label>Score du candidat 1 </label>
<input type="number" name="score1"><br>

<label>nom du candidat 2 </label>
<input type="text" name="nom2"><br>

<label>Score du candidat 2 </label>
<input type="number" name="score2"><br>

<label>nom du candidat 3 </label>
<input type="text" name="nom3"><br>
 
<label>Score du candidat 3 </label>
<input type="number" name="score3"><br>

<label>nom du candidat 4 </label>
<input type="text" name="nom4"><br>

<label>Score du candidat 4 </label>
<input type="number" name="score4"><br>




<input type="submit" value="valider">
</form>


<?php

if (isset($_POST["nom1"]) && isset($_POST["score1"]) && isset($_POST["nom2"]) && isset($_POST["score2"]) 
&& isset($_POST["nom3"]) && isset($_POST["score3"]) && isset($_POST["nom4"]) && isset($_POST["score4"]))
{
    
    $nom1 = $_POST["nom1"];
    $score1 = $_POST["score1"];

    $nom2 = $_POST["nom2"];
    $score2 = $_POST["score2"];

    $nom3 = $_POST["nom3"];
    $score3 = $_POST["nom3"];

    $nom4 = $_POST["nom4"];
    $score4 = $_POST["score4"];




    if ($score1 > 50)
    {
       echo "Candidat " . $nom1 . "élu";
    }
    else if ($score1 >= 12.5)
        {                
        if($score1 > $score2 && $score1 > $score3 && $score1 > $score4)
            {
                echo "Candidat " . $nom1 . " en balottage favorable avec le score de" . $score1 . "%";
            }
        else 
           {
                echo "Candidat " . $nom1 . " en balottage défavorable" . $score1 . "%";
           }
                       
         }
                    
    else 
    {
        echo "Candidat battu";
    }

}



$formulaire = ob_get_clean();

require('../template.html');
?>

