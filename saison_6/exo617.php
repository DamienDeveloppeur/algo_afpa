<?php
ob_start();
?>
<h1> Exercice 6.17 </h1>

Ecrire un algorithme permettant de saisir 100 valeurs et qui les range au fur et<br>
 à mesure dans un tableau. Cela s'appelle le tri à la volée (qui est une forme de tri par insertion)<br>
 <?php 
$enonce = ob_get_clean();

ob_start();

$pseudocode = ob_get_clean();

ob_start();
?>
    <script type="text/javascript">



      </script>
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