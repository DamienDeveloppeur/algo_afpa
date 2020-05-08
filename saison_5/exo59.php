<?php
ob_start();
?>
<h1> Exercice 5.9  </h1>
Réécrire l’algorithme précédent, <br>
mais cette fois-ci on ne connaît pas d’avance combien<br>
 l’utilisateur souhaite saisir de nombres. La saisie des nombres<br>
  s’arrête lorsque l’utilisateur entre un zéro.<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr, max, compteur et position en numérique<br>
DEBUT<br>
max = 0<br>
compteur = 0<br>
position = 0<br>
<br>
REPETEZ <br>
    ecrire "entrez un nombre"<br>
    lire nbr <br>

    SI nbr > max <br>

    ALORS max = nbr <br>
          position = compteur <br>

    JUSQU'A nbr != 0<br>
  
        ALORS<br>
        Ecrire "le nombre le plus grand est : "<br>
        max + "arrivant en " + position + "position"<br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form>

<div  class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS59" class="nes-input is-dark"  name="PAHT"/> <br><br><br>


  <input  onclick="exo59()" value="Envoyer" class="nes-btn is-error"></input>
  </div>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS59" class="nes-balloon from-left">
        
      </div>
    </section>
    <?php
$JS = ob_get_clean();

ob_start();
?>



<form>
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS59" class="nes-input is-dark"  name="number"/> <br><br><br>


  <input class="nes-btn is-error" type="submit" value="Envoyer"/> 
  </form>

  

<?php
$max = 0;
$position = 0;
$compteur = 0;
if (isset($_POST["number"]))
{

$number = $_POST["number"];

    if ($number != 0 )
    {
      $compteur += 1;
        if ($nombre > $max)
        {
          $max = $nombre;
          $position = $compteur;
        
        }

    }
    else
    {
      $resultat = "Le resultat est :". $max;
      var_dump($resultat);
    }


}




?>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS59" class="nes-balloon from-left">
        <?php
         var_dump($max);
         var_dump($compteur);
        if(isset($resultat))
        {
         
          echo $resultat;
        }

?>
      </div>
    </section>

<?php

$formulaire = ob_get_clean();

require '../template.html';
?>
