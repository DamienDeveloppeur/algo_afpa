<?php
ob_start();
?>
<h1>Exercice 3.6</h1><br>
Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur.<br>
 Ensuite, il l’informe de sa catégorie : <br>
•"Poussin" de 6 à 7 ans<br>
•"Pupille" de 8 à 9 ans<br>
•"Minime" de 10 à 11 ans<br>
•"Cadet" après 12 ans<br>
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ?<br>:
 <?php 
$enonce = ob_get_clean();
ob_start();
?>

<?php
$pseudocode = ob_get_clean();

ob_start();
?>
  
  <form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un age </label>
  <input type="text" id="FJS336" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>


  <input  onclick="exo36()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo36jq()" value="Exe jquery" class="nes-btn is-error"></input>
</form>
</div>
<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS336" class="nes-balloon from-left">
        
      </div>
    </section>
     
<?php
$JS = ob_get_clean();
ob_start();

$jquerry = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


include '../template.html';
?>
