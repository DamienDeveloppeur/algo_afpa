<?php
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Exercice 8.7</p>
  <p>
  Écrire un algorithme de jeu de dames très simplifié.<br>
L’ordinateur demande à l’utilisateur dans quelle case se trouve son pion <br>
(quelle ligne, quelle colonne). On met en<br>
place un contrôle de saisie afin de vérifier la validité des valeurs entrées.<br>
Ensuite, on demande à l’utilisateur quel mouvement il veut effectuer : 0 <br>
(en haut à gauche), 1 (en haut à droite), 2<br>
(en bas à gauche), 3 (en bas à droite).<br>
Si le mouvement est impossible (i.e. on sort du damier ), on le signale à <br>
l’utilisateur et on s’arrête là . Sinon, on<br>
déplace le pion et on affiche le damier résultant, en affichant un « O »<br>
 pour une case vide et un « X » pour la case où<br>
se trouve le pion.<br>
</p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();



ob_start();

$showJS= ob_get_clean();

ob_start();

$showjquerry = ob_get_clean();

ob_start();

$showphp = ob_get_clean();

ob_start();
//require './FunctionPhp6.php';
?>


<form method="POST" action="exo86.php">
<div class="nes-field is-inline" id="FJS871G" style="visibility: visible">
<label for="dark_field" style="color:#fff;">Entrer les coordonnées de la piece sélectionné </label>
  <input type="number" id="FJS871" class="nes-input is-dark"  name="nbr1"/> 
  </div>

  <div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
  <label for="dark_select" style="color:#fff">Choississez un deplacement </label>
  <div class="nes-select is-dark">
    <select required id="FJS872" name="coordonnesReception">
      <option value="" disabled selected hidden>Select one</option>
      <option value="0">Haut-gauche</option>
      <option value="1">Haut-droit</option>
      <option value="2">Bas-gauche</option>
      <option value="3">Bas-droit</option>
    </select>
  </div>
</div>



  <input  onclick="deplacementFinal()" value="Executer le deplacement" class="nes-btn is-error"></input>
<input  onclick="uploadDamier()" value="Upload Damier" class="nes-btn is-error"></input>

</form>
<?php

    if (isset($control)) 
    {
      
    }


?>

        <div id ="AJS87" >
         


        </div>
      

<?php
$JS = ob_get_clean();


require('../template.html');