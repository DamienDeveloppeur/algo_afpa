<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title"> Exercice 6.14</p>
  Toujours et encore sur le même principe, écrivez un algorithme permettant, <br>
à l’utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, <br>
renvoie le nombre de ces notes supérieures à la moyenne de la classe.<br>
</div>

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
require './FunctionPhp6.php';
?>
<form method="POST" action="exo614.php">
<div class="nes-field is-inline" id="FJS6141G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrez le nombre de valeur souhaitée</label>
  <input type="number" id="FJS6141" class="nes-input is-dark"  name="nbr1"/> 
  </div>

  <div class="nes-field is-inline" style="visibility: hidden" id="FJS6142G">
<label for="dark_field" style="color:#fff;">Entrez les valeurs souhaitées</label>
  <input type="number" id="FJS6142" class="nes-input is-dark"  name="nbr2"/>
  </div>

<input  onclick="exo614()" value="Exe javascript" class="nes-btn is-error"></input>
<input  onclick="exo614jq()" value="Exe jquery" class="nes-btn is-error"></input>
<input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>
</form>
<?php
session_start();

if (isset($_POST["nbr1"]) || isset($_SESSION["nbr1"]))
{
  $soluce = exo614();
}

?>
<br>
<section class="nes-container is-dark">
  <section class="message-list">
      <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS614" class="nes-balloon from-left is-dark">
         
        </div>
      </section>

      <section class="message -right">
        <!-- Balloon -->
        <div class="nes-balloon from-right is-dark">
          <?php
            /*  var_dump($_SESSION["compteur614"] );
              var_dump($_SESSION["nbr1"]);
              var_dump($_POST["nbr2"]);*/

           if(isset($_SESSION["max"]))
           {
          
              echo "Il reste encore ". $_SESSION["compteurTemp614"] . " A rentrer <br>";
                  if ($_SESSION["moy"]  != 0)
                  {
                    echo "Voici les chifres au dessus de la moyenne : ". $_SESSION["soluce"] . "<br>";
                    echo "Voici la moyenne : ". $_SESSION["moy"];
                  }
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