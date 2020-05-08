<?php
ob_start();
?>
<h1> Exercice 6.17 </h1>

Ecrire un algorithme permettant de saisir 100 valeurs et qui les range au fur et<br>
 à mesure dans un tableau. Cela s'appelle le tri à la volée (qui est une forme de tri par insertion)<br>
 <?php 
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
variable array en tableau numérique<br>
variable nbr,temp, i et p en numérique<br>
DEBUT<br>
        POUR index (p) de 0 à 99<br>
        ecrire entrez une valeurs<br>
        lire nbr <br>
        ajouter nbr au tableau array <br>
              POUR index (i) de 0 à longeur de array <br>
                    SI array[i] > array[i + 1] <br>
                          TANT QUE array[i] > array[i + 1] <br>
                              var temp = array[i]<br>
                              array[i] = array[i + 1] <br>
                              array[i + 1] = temp <br>
                              i = 0 <br>
                          FIN DU TANT QUE <br>
                    FIN DU SI <br>
              FIN DU POUR <br>
FIN<br>

  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
    <div class="nes-field is-inline">

<input  onclick="exo617()" value="Envoyer" class="nes-btn is-error"></input>
</div>
<br>
<section class="message -left">
    <i class="nes-bcrikko"></i>
    <!-- Balloon -->
    <div id ="AJS617" class="nes-balloon from-left">
      
    </div>
  </section>
<?php
$JS = ob_get_clean();

ob_start();

?>
<form method="POST" action="exo617.php">  
            <label>Votre message</label><br>
          

<?php
for ($i=1; $i <10; $i++)
    {
        echo '<input type="text" name="nbr'.$i.'"/> <br>';   
    }

?>
<input type="submit" value="Envoyer"/> 
       </form>
<?php
$array = array();

    if (isset($_POST["nbr0"]))
    {
        $array[$i] = $_POST["nbr$i"];                                
    }
echo $array;

$formulaire = ob_get_clean();


ob_start();

$jquery = ob_get_clean();



require '../template.html';
?>