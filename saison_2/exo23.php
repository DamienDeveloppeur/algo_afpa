<?php 

 ob_start(); 
?>
<div class="nes-container with-title is-centered">
  <p class="title">exercice 2.3</p>
  <p>Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles <br>et
 le taux de TVA, et qui fournit le prix total TTC correspondant.<br>
 Faire en sorte que des libellés apparaissent clairement.<br></p>
</div>
<?php
$enonce = ob_get_clean();

ob_start();
 ?>

 <p>
 <form method="POST" action="exo23.php">  
            <label>Indiquer prix de l'article</label>
            <input type="number" name="prix"/>
            

            <label>Nombre d'article</label>
            <input type="number" name="nbrarticle"/>
            

            <label>Taux de tva</label>
            <input type="number" name="taux"/>
            <input type="submit" value="Envoyer"/> 



    </form>
    
    <?php
   
    
    if (isset($_POST["prix"]) && isset($_POST["nbrarticle"]) && isset($_POST["taux"]) )
    {
        $prixArticleHT = $_POST["prix"];

        $nbrarticle = $_POST["nbrarticle"];
        
        $TauxDeTva = $_POST["taux"];
        
        $PrixEtapeIntermediaire = ($prixArticleHT * $TauxDeTva) / 100 ;
        
        $prixFinal = $prixArticleHT + $PrixEtapeIntermediaire;
        
        $valeurPanier = $prixFinal * $nbrarticle;
        
        echo "Tu as dépensé : ".  $valeurPanier . "Euros pour ". $nbrarticle . " article de basse facture venant de chine";
    }
$formulaire = ob_get_clean(); 

ob_start();
?>
<div class="nes-container is-dark with-title">
  <p class="title">PSEUDO CODE</p>
  <p> Variables val, carre numériques<br>
	DEBUT<br>
		ecrire "veuillez rentrer un nombre : "<br>
		lire val<br>
		carre ← Val * val<br>
		ecrire " le carré de de " + val + " est de " + carre<br>
	FIN<br></p>
</div>


<?php
$pseudocode = ob_get_clean();
ob_start();
?>
<form>
<div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
  <!-- <label for="dark_field" style="color:#fff;">Entrez le prix de l'article </label> -->
  <input type="text" id="FJS231" class="nes-input is-dark"  name="PAHT" placeholder="prix de l'article"/> <br><br><br>

 <!-- <label for="dark_field" style="color:#fff;">Entrez le nombre d'article</label> -->
  <input type="text" id="FJS232" class="nes-input is-dark"  name="nbrarticle" placeholder="nombre d'article"/> <br>
 <!-- <label for="dark_field" style="color:#fff;">Entrez le taux de TVA</label> -->
  <input type="text" id="FJS233" class="nes-input is-dark"  name="test" placeholder="taux de TVA"/> <br>

  <input  onclick="exo23()" value="Envoyer" class="nes-btn is-error"></input>
  </div>

</form>

<section class="message -left">
      <i class="nes-bcrikko"></i>
      <!-- Balloon -->
      <div id ="AJS23" class="nes-balloon from-left">
        
      </div>
    </section>


<?php
$JS = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


include '../template.html';