<?php
ob_start();
?>
<h1> Exercice 6.14 </h1>
Toujours et encore sur le même principe, écrivez un algorithme permettant, <br>
à l’utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, <br>
renvoie le nombre de ces notes supérieures à la moyenne de la classe.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  variable arrayNotes et arrayNoteOverMoy => tableau en numérique<br>
  variable nbrDonnee, noteRentree, somme et moy en numérique<br>
DEBUT<br>
ecrire entrez le nombre de notes<br>
lire nbrDonnee<br>
POUR index  0 à index nbrDonnee<br>
    ecrire "entrez une note"<br>
    lire noteRentree <br>
    ajouter nbr à arrayNotes<br>
    somme = somme + noteRentree<br>
FIN DU POUR<br>
    moy = somme / arrayNotes.lenght<br>
    POUR index (p) à 0 à taille de arrayNotes<br>
        SI arrayNotes à l'index de p > moy <br>
        ALORS <br>
             arrayNoteOverMoy.push(arrayNotes[p])<br>
FIN DU POUR<br>
ecrire arrayNoteOverMoy<br>
FIN<br>
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
       <div class="nes-field is-inline">

<input  onclick="exo614()" value="Envoyer" class="nes-btn is-error"></input>
</div>


<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS614" class="nes-balloon from-left">
      
    </div>
  </section>
<?php
$JS = ob_get_clean();

ob_start();
?>

<?php


$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>