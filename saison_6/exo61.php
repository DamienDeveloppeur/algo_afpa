<?php
ob_start();
?>
<h1> Exercice 6.1 </h1>
Ecrire un algorithme qui déclare et remplisse un tableau de 7 valeurs numériques en les mettant toutes à zéro.
 <?php 
$enonce = ob_get_clean();

ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-Code</p>
  <p>
DEBUT 
tableau de Nbr(7)
Pour i = 0 à 7
    i = 0
      Nb(i) = i 
      i suivant
      Fin de la boucle
      Ecrire Nb(i)
Fin
  </p>
</div>

<?php
$pseudocode = ob_get_clean();

ob_start();
?>

<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">

  <input  onclick="exo61()" value="Envoyer" class="nes-btn is-error"></input>
  </div>


<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS61" class="nes-balloon from-left">
        
      </div>
    </section>
<?php
$JS = ob_get_clean();

ob_start();
?>

  <input type="submit" value="Envoyer en php" name="exo61php" class="nes-btn is-error"></input>

<br>
<?php
  if (isset($_POST["exo61php"]))
  {

      $arrayphp = array();
      $p = 0;
      for ($i =0; $i < 7; $i++)
      {
        $array[] = $p;
      }


  }


  ?>
  <section class="message -left">
        <i class="nes-bcrikko"></i>
        <!-- Balloon -->
        <div id ="AJS61" class="nes-balloon from-left">
          <?php
if (isset($_POST["exo61php"]))
{
  echo "VOici la solution". $array;

}
?>
        </div>
      </section>
  <?php
$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>