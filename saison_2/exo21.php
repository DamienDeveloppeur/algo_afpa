<?php
ob_start();
?>
<span class="nes-text is-primary">Primary</span>
Exercice 2.1<br>
Quel résultat produit le programme suivant ?<br>
Variables val, double numériques<br> Début<br> Val ← 231<br>
 Double ← Val * 2<br>
  Ecrire Val<br>
   Ecrire Double<br>
    Fin";
<?php
$enonce = ob_get_clean();


ob_start();
?>

<div class="nes-container is-dark with-title">
  <p class="title">Container.is-dark</p>
  <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
</div>

<?php
$pseudocode = ob_get_clean();


ob_start();
?>
    <script type="text/javascript">

let Val = 231;
let Double = Val * 2;
document.write("Val = " + Val + "<br>");
document.write("Double = 231 * 2<br>");
document.write("Double = " +Double);

      </script>
<?php
$JS = ob_get_clean();
ob_start();
$formulaire = ob_get_clean();


require '../template.html';
?>





