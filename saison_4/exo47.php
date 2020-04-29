<?php
ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Exercice 4.7</p>
  <p>Une compagnie d'assurance automobile propose à<br> ses clients quatre familles de tarifs <br>
    identifiables par une couleur, du moins au plus<br> onéreux : tarifs bleu, vert, orange et<br>
     rouge. Le tarif dépend de<br> la situation du conducteur :<br>
     <div class="lists">
  <ul class="nes-list is-circle">
    <li>un conducteur de moins de 25 ans et titulaire du permis depuis moins de deux ans, se<br>
         voit attribuer le tarif rouge, si toutefois il n'a jamais été responsable d'accident.<br>
          Sinon, la compagnie refuse de l'assurer.</li><br>
    <li>un conducteur de moins de 25 ans et titulaire du permis depuis plus de deux ans, ou de <br>
        plus de 25 ans mais titulaire du permis depuis moins de deux ans a le droit au tarif orange<br>
         s'il n'a jamais provoqué d'accident, au tarif rouge pour un accident, sinon il est refusé.</li><br>
    <li>un conducteur de plus de 25 ans titulaire du permis depuis plus de deux ans bénéficie du tarif<br>
         vert s'il n'est à l'origine d'aucun accident et du tarif orange pour un accident, du tarif<br>
          rouge pour deux accidents, et refusé au-delà</li><br>
    <li>De plus, pour encourager la fidélité des clients acceptés, la compagnie propose un contrat<br>
         de la couleur immédiatement la plus avantageuse s'il est entré dans la maison depuis plus<br>
          de cinq ans. Ainsi, s'il satisfait à cette exigence, un client normalement "vert" devient <br>
          "bleu", un client normalement "orange" devient "vert", et le "rouge" devient orange.</li><br>
  </ul>
</div>
Ecrire l'algorithme permettant de saisir les données nécessaires (sans contrôle de saisie) et de traiter<br>
 ce problème. Avant de se lancer à corps perdu dans cet exercice, on pourra réfléchir un peu et s'apercevoir<br>
  qu'il est plus simple qu'il n'en a l'air (cela s'appelle faire une analyse !)<br>
    
    
    </p>
</div>
<?php
$enonce = ob_get_clean();
?>
<form method="POST" action="exo47.php">

    <label>Votre age </label>
    <input type="number" name="age"><br>

<label>Titulaire du permis depuis combien de temps ? </label>
    <input type="number" name="TitulairePermisTemps"><br>

    <label>Combien d'accident responsable ? </label>
    <input type="number" name="nbrAccident"><br>

    <label>Quel est votre ancienneté ? </label>
    <input type="number" name="anciennete"><br>



    <input type="submit" value="valider">
</form>
<?php

if (isset($_POST["age"]) && isset($_POST["TitulairePermisTemps"]) && isset($_POST["nbrAccident"]) && isset($_POST["anciennete"]))
{
$age = $_POST["age"];
$TitulairePermisTemps = $_POST["TitulairePermisTemps"];
$nbrAccident = $_POST["nbrAccident"];
$anciennete = $_POST["anciennete"];

    if ($age >= 25)
    {
        if ($TitulairePermisTemps >= 2)
        {
            if ($nbrAccident == 0)
            {
                if ($anciennete > 5)
                {
                    echo"tarif bleue";
                }
                else 
                {
                    echo"tarif vert";
                }
                
            }
            else if ($nbrAccident = 1)
            {
                if ($anciennete > 5)
                {
                    echo"tarif vert";
                }
                else 
                {
                    echo"tarif orange";
                }
                
            }
            else if ($nbrAccident = 2)
            {
                if ($anciennete > 5)
                {
                    echo"tarif orange";
                }
                else 
                {
                    echo"tarif rouge";
                }
            }
            else
            {
                echo"refusé";
            }
        }
        else if ($TitulairePermisTemps < 2)
        {
            if ($nbrAccident = 0)
            {
                echo"tarif orange";
            }
            if ($nbrAccident = 1)
            {
                echo"tarif rouge";
            }
            else
            {
                echo"refusé";
            }
        }

    }
    else if ($age < 25)
    {
        if ($TitulairePermisTemps < 2)
        {
            if ($nbrAccident = 0)
            {
                echo"tarif rouge";
            }
            else 
            {
                echo"refusé";
            }
        }
        if ($TitulairePermisTemps > 2)
        {
            if ($anciente > 5)
            {
                echo"tarif vert";
            }
            else
            {
                echo"tarif orange";
            }
        }
    }
}
$formulaire = ob_get_clean();
ob_start();
?>
<form>
<div class="nes-field" style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Indiquez votre age</label>
  <input type="text" id="FJS471" class="nes-input">
</div>

<div class="nes-field"style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Titulaire du permis depuis combien d'années ?</label>
  <input type="text" id="FJS472" class="nes-input">
</div>
<br><br><br>
<div class="nes-field"style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Nombre d'accident responsable ?</label>
  <input type="text" id="FJS473" class="nes-input">
</div>

<div class="nes-field"style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Ancienneté ?</label>
  <input type="text" id="FJS474" class="nes-input">
</div>
<br><br><br>

<input  onclick="exo47()" value="Envoyer" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
   <i class="nes-bcrikko"></i>
   <!-- Balloon -->
   <div id ="AJS47" class="nes-balloon from-left">
     
   </div>
 </section>

<?php
$JS = ob_get_clean();


require('../template.html');