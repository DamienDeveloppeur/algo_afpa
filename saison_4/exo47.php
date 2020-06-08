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

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable compteurPoint, age, titulairePermisTemps, nbrAccident et anciennete en numérique <br>

DEBUT<br>
    ecrire indiquez l'age, depuis combien d'année<br>
     vous êtes titulaire du permis, <br>
     le nombre d'accident resposnable et l'anciennete<br>
    lire age, TitulairePermisTemps, nbrAccident et anciennete <br>

        SI age > 25<br>
            compteurPoint += 1<br>
        SI TitulairePermisTemps > 2<br>
             compteurPoint += 1<br>
        SI nbrAccident == 1<br>
            compteurPoint += 1<br>
        SINON SI nbrAccident == 2<br>
            compteurPoint -= 1<br>
        SINON SI nbrAccident == 3<br>
            compteurPoint -= 1<br>
        SI anciennete > 5<br>
            compteurPoint += 1<br>
        FIN DU SI <br>
        <br>
        SI compteurPoint == 4<br>
            ecrire tarif bleue<br>
        SI compteurPoint == 3<br>
            ecrire tarif vert<br>
        SI compteurPoint == 2<br>
            ecrire tarif orange<br>
        SI compteurPoint == 1<br>
            ecrire tarif rouge <br>
        SI compteurPoint < 1<br>
            ecrire refusé <br>
        FIN DU SI<br>

FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();


if (isset($_POST["age"]) && isset($_POST["TitulairePermisTemps"]) && isset($_POST["nbrAccident"]) && isset($_POST["anciennete"]))
{
$age = $_POST["age"];
$TitulairePermisTemps = $_POST["TitulairePermisTemps"];
$nbrAccident = $_POST["nbrAccident"];
$anciennete = $_POST["anciennete"];
$compteurPoint = 1;
if ($age > 25)
{
    $compteurPoint += 1;
}
if ($TitulairePermisTemps > 2)
{
    $compteurPoint += 1;
}
if ($nbrAccident == 1)
{
    $compteurPoint -= 1;
}
else if ($nbrAccident == 2)
{
    $compteurPoint -= 2;
}
else if ($nbrAccident == 3)
{
    $compteurPoint -= 6;
}
if ($anciennete > 5)
{
    $compteurPoint += 1;
}

if ($compteurPoint == 4)
{
    $control = "Tarif bleue";
}
if ($compteurPoint == 3)
{
    $control = "Tarif vert";
}
if ($compteurPoint == 2)
{
    $control = "Tarif orange";
}
if ($compteurPoint == 1)
{
    $control = "Tarif rouge";
}
if ($compteurPoint < 1)
{
    $control = "Refusé";
}


}

ob_start();
?>
<form method="POST" action="exo47.php">
<div class="nes-field" style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Indiquez votre age</label>
  <input type="text" id="FJS471" class="nes-input" name="age">
</div>

<div class="nes-field"style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Titulaire du permis depuis combien d'années ?</label>
  <input type="text" id="FJS472" class="nes-input" name="TitulairePermisTemps">
</div>
<br><br><br>
<div class="nes-field"style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Nombre d'accident responsable ?</label>
  <input type="text" id="FJS473" class="nes-input" name="nbrAccident">
</div>

<div class="nes-field"style="background-color:#212529; padding: 1rem;">
  <label for="name_field">Ancienneté ?</label>
  <input type="text" id="FJS47" class="nes-input" name="anciennete">
</div>
<br><br><br>

<input  onclick="exo47()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo47jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>

<br>
<section class="message -left">
   <i class="nes-bcrikko"></i>
   <!-- Balloon -->
   <div id ="AJS47" class="nes-balloon from-left">
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


require('../template.html');