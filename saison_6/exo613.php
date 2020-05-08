<?php
ob_start();
?>
<h1> Exercice 6.13 </h1>
Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un nombre déterminé<br>
de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position <br>
elle occupe dans le tableau. On prendra soin d’effectuer la saisie dans un premier temps, et la recherche de la plus <br>
grande valeur du tableau dans un second temps. <br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
 PAS sur
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
    <div class="nes-field is-inline">

<input  onclick="exo613()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS613" class="nes-balloon from-left">
      
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