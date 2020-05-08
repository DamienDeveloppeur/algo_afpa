<?php
ob_start();
?>
<h1> Exercice 6.4 </h1>
Que produit l’algorithme suivant ? <br>

 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
  Tableau Nb(5) en Entier <br>
Variable i en Entier <br>
Début<br>
 Pour i ← 0 à 5 <br>
 Nb(i) ← i * i<br>
 i suivant<br>
   Pour i ← 0 à 5<br>
   Ecrire Nb(i)<br>
    i suivant <br>
    Fin<br>
Peut-on simplifier cet algorithme avec le même résultat ?<br><br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
    

    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">

<input  onclick="exo64()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS64" class="nes-balloon from-left">
      
    </div>
  </section>

     
<?php
$JS = ob_get_clean();

ob_start();

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>