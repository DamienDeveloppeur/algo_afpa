<?php
ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Exercice 5.6</p>
  Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu’à ce nombre. <br>
Par exemple, si l’on entre 5, le programme doit calculer :<br>
1 + 2 + 3 + 4 + 5 = 15<br>
</div>
<?php
$enonce = ob_get_clean();
ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable nbr et somme en numérique
DEBUT
somme = 0;<br>
index = 1;<br>
ecrire entrez un nombre
lire nbr 
POUR index != nbr + 1;
index ++
somme = somme + index;
        SI index strictement égale à nbr 
        ALORS
        Ecrire somme 
FIN

  </p>
</div>
<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form method="POST" action="exo56.php">  

<div  class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez un chiffre</label>
  <input type="number" id="FJS56" class="nes-input is-dark"  name="nbr"/> <br><br><br>
  </div>

  <input  onclick="exo56()" value="Exe javascript" class="nes-btn is-error"></input>
  <input  onclick="exo56jq()" value="Exe jquery" class="nes-btn is-error"></input>
  <input  type="submit" value="Exe PHP" class="nes-btn is-error"></input>

</form>
<?php
if (isset($_POST["nbr"]))
{
  $nbr = $_POST["nbr"];
  $somme = 0;
  $control = "";
  for ($i = 1; $i != $nbr + 1; $i++  )
  {
      $somme = $somme + $i;
      if ($i == $nbr)
      {

      
     $control = $somme ;
      }
      
  }
}
?>

<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS56" class="nes-balloon from-left">
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


ob_start();

$showphp = ob_get_clean();

require('../template.html'); ?>