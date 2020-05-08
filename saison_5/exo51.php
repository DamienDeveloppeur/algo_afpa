<?php 

  ob_start();

echo "
 Exercice 5.1<br>
 Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à ce que la réponse convienne.
 ";
$enonce = ob_get_clean();

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">Pseudo-code</p>
  <p>
DEBUT
    variable nbr en int 
ECRIRE "entrey un nombre entre 1 et 3"
Lire nbr 
TANT QUE nbr < 1 ET > 3
    ecrire "Réessayez"
    lire nbr 
AUTRE ecrire "bravo !"

FIN
  </p>
</div>
<?php
$pseudocode = ob_get_clean();

ob_start();
?>
<form>

<div class="nes-field is-inline">
<label for="dark_field" style="color:#fff;">Entrez l'age de l'individu </label>
  <input type="number" id="FJS452" class="nes-input is-dark"  name="PAHT"/> <br><br><br>
</div>

  <input  onclick="exo51()" value="Envoyer" class="nes-btn is-error"></input>
</form>

<br>
<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS51" class="nes-balloon from-left">
        
      </div>
    </section>



<?php
$JS = ob_get_clean();
ob_start();

?>

<p>Veuillez entrer un chiffre entre 1 et 3 </p>
 

        
          <form method="POST" action="exo51.php">  
            <label>Votre message</label>
            <input type="number" name="nbr"/>
            <input type="submit" value="Envoyer"/> 
    </form>
    
    <?php
    if (isset($_POST["nbr"]))
    {
        $nbr = $_POST["nbr"];
        while ($nbr < 1 || $nbr > 3 )
        {
           
                echo "Bravo !";

            echo "Fin de la boucle";
        }
echo "fin de la boucle";
}
$formulaire = ob_get_clean();
 
include "../template.html";
